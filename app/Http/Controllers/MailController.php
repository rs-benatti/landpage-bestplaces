<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {
    public function EmailForm(Request $request){
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
        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
        $message->to('rafa.senna.benatti2@gmail.com', $to_name)
        ->subject('BestPlaces | Contato ');
        $message->from('rafa.senna.benatti2@gmail.com','BestPlaces');
        });
        $data = array('number'=>$number,'fullName'=>$fullName,'name'=>$nome, "body" => "Olá, gostaria de fazer meu site com a Best Places. Me interessei pelo ", "plano"=>$plano);
        Mail::send('mail-client', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('BestPlaces | Contato ');
        $message->from('rafa.senna.benatti2@gmail.com','BestPlaces');
        });
    }
}
