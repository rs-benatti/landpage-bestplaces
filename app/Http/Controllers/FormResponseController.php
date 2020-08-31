<?php

namespace App\Http\Controllers;

use App\FormResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class FormResponseController extends Controller{
    public function index(){
        $FormResponse = FormResponse::all();
        return view('admin.index', compact('FormResponse'));
    }

    public function Store(Request $request){
        $FormResponse = new FormResponse();
        $FormResponse->nome = $request->nome;
        $FormResponse->email = $request->email;
        $FormResponse->telefone = $request->telefone;
        $FormResponse->plano = $request->plano;
        $FormResponse->save();
        $dados=$request->all();
        $pos = strpos($dados['nome'], ' ');
        $fullName = $dados['nome'];
        if ($pos === false) {
            $nome = $dados['nome'];
        }
        else{
            $nome = '';
            for ($i = 0; $i < $pos; $i++){
                $nome .= $dados['nome'][$i];
            }
        }
        $email = $dados['email'];
        $plano = $dados['plano'];
        $number = $dados['telefone'];
        $to_name = $nome;
        $to_email = $email;
        $data = array('number'=>$number,'fullName'=>$fullName,'name'=>$nome, "body" => "Olá, gostaria de fazer meu site com a Best Places. Me interessei pelo ", "plano"=>$plano);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to('rafa.senna.benatti2@gmail.com', $to_name)
        ->subject('BestPlaces | Contato ');
        $message->from('rafa.senna.benatti2@gmail.com','BestPlaces');
        });
        $data = array('number'=>$number,'fullName'=>$fullName,'name'=>$nome, "body" => "Olá, gostaria de fazer meu site com a Best Places. Me interessei pelo ", "plano"=>$plano);
        Mail::send('emails.mail-client', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('BestPlaces | Contato ');
        $message->from('rafa.senna.benatti2@gmail.com','BestPlaces');
        });
        return redirect('/admin');
    }
}
