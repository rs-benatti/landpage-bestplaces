<?php

namespace App\Http\Controllers;

use App\Email;
use App\Jobs\SendMailJob;
use App\User;
use App\UserEmail;
use App\FormResponse;
use Carbon\Carbon;
use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Mail\NewArrivals;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',Email::class);
        $emails = Email::orderBy('created_at','desc')->paginate(10);
        return view('email.index',compact('emails'));
    }

    public function updatePassword(){
        return view('users.changepassword');
    }


    public function up(Request $request, $id){
        $user = User::findBySlugOrFail($id);
        if ($request->has('actualpassword')) {
            if (\Hash::check(intval($request->input('actualpassword')),$user->password)) {
                if(strcmp($request->newpassword,$request->confirmpassword)==0){
                    $user->password = \Hash::make($request->input('newpassword'));
                    $user->save();
                    return redirect()->back()->with('success','Senha Alterada com sucesso!');
                }
                else{
                    return redirect()->back()->with('errors','As senhas não coincidem');
                }

            }
            else{
                return redirect()->back()->with('error','A senha atual digitada não coincide com os nossos registros');
            }

        }
    }


    public function toSend(){
        $this->authorize('viewAny',Email::class);
        $emails = Email::all();
        $hashids1 = new Hashids(Email::class.'7623e9b0009feff8e024a689d6ef59ce',10);
        $hashids2 = new Hashids(FormResponse::class.'7623e9b0009feff8e024a689d6ef59ce',10);
        $users = FormResponse::all();
        return view('email.send',compact('emails','hashids1','hashids2','users'));
    }

    public function sendMail(Request $request){
        $this->authorize('viewAny',Email::class);
        $hashids = new Hashids(Email::class.'7623e9b0009feff8e024a689d6ef59ce',10);
        $hashids2 = new Hashids(FormResponse::class.'7623e9b0009feff8e024a689d6ef59ce',10);
        $em = ($hashids->decode($request->email))[0];
        $email = Email::find($em);
        if($request->button_now) {
            foreach($request->users as $user){
                $us = ($hashids2->decode($user))[0];
                $user = FormResponse::find($us);
                $user_email = new UserEmail();
                $user_email->user_id = $user->id;
                $user_email->email_id = $email->id;
                $user_email->send_timer = Carbon::now();
                $user_email->frequency = $request->frequency;
                $user_email->delivered = 'YES';
                $user_email->send_time = date("H:i",strtotime(Carbon::now()));
                $user_email->save();
                $this->dispatch(new SendMailJob($user->email, new newArrivals($user, $email)));
            }
            return redirect()->route('email.sent',$email)->with(['success' => 'Email enviado com sucesso!']);
        }else{
            $existing = UserEmail::where('email_id',$email->id)->where('delivered','=','NO')->get();
            if(count($existing) ==0){
                foreach($request->users as $user) {
                    $us = ($hashids2->decode($user))[0];
                    $user = User::find($us);
                    $user_email = new UserEmail();
                    $user_email->user_id = $user->id;
                    $user_email->email_id = $email->id;
                    $user_email->frequency = $request->frequency;
                    $user_email->delivered = 'NO';
                    $user_email->send_time = $request->hora;
                    $user_email->send_timer = Carbon::now();
                    if($request->not_due_date == 1){
                        $user_email->last_day = null;
                    }else{
                        $user_email->last_day = $request->last_day;
                    }
                    $user_email->date_string = date("H:i",strtotime($request->hora));
                    $user_email->save();

                }
                    return redirect()->route('email.scheduled',$email)->with(['success' => 'Email agendado com sucesso!']);
            }else{
                return redirect()->route('email.scheduled',$email)->with(['errors' => 'Já existe um agendamento para esse email. Finalize-o para realizar um novo agendamento']);
            }

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Email::class);
        return view('email.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Email::class);
        $email = new Email();
        $email->title = $request->title;
        $email->body = $request->body;
        if($request->attachment){
            $path = $request->attachment->store('attachments', 'public');
            $email->attachment_name = $request->attachment->getClientOriginalName();
            $email->attachment = $path;
        }
        $email->save();
        return redirect()->route('email.index');
    }

    public function getAllMessages($id){
        $this->authorize('viewAny',Email::class);
        $email = Email::findBySlugOrFail($id);
        $user_emails_scheduled = UserEmail::where('email_id',$email->id)->where('frequency','!=',null)->where('delivered','!=','YES')->get();
        $user_emails_sent = UserEmail::where('email_id',$email->id)->where('delivered','=','YES')->get();
        return view('email.scheduled',compact('user_emails_scheduled','email','user_emails_sent'));
    }

    public function sent($id){
        $this->authorize('viewAny',Email::class);
        $email = Email::findBySlugOrFail($id);
        $sent = $email->sent()->orderBy('send_timer','desc')->paginate(10);
        return view('email.sent',compact('sent','email'));
    }


    public function finalize($id){
        $this->authorize('viewAny',Email::class);
        $email = Email::findBySlugOrFail($id);
        $user_emails_scheduled = UserEmail::where('email_id',$email->id)->where('frequency','!=',null)->where('delivered','!=','YES')->get();
        foreach($user_emails_scheduled as $email){
            $email->delivered = 'YES';
            $email->save();
        }
        return redirect()->route('email.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $email = Email::findBySlugOrFail($id);
        $this->authorize('update',$email);
        return view('email.edit',compact('email'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $email = Email::findBySlugOrFail($id);
        $this->authorize('update',$email);
        $email->title = $request->title;
        $email->body = $request->body;
        if($request->attachment){
            if($email->attachment){
                Storage::disk('public')->delete($email->attachment);
            }
            $email->attachment_name = $request->attachment->getClientOriginalName();
            $path = $request->attachment->store('attachments', 'public');
            $email->attachment = $path;
        }
        $email->save();
        return redirect()->route('email.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $email = Email::findBySlugOrFail($id);
        $this->authorize('delete',$email);
        $email->delete();
        return redirect()->route('email.index');
    }
}
