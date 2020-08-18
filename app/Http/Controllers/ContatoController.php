<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ContatoController extends Controller {
    public function Contato(){
        $iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
        $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
        $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
        $berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
        $ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
        // check if is a mobile
            if ($iphone || $android || $palmpre || $ipod || $berry == true) {
                header('Location:  https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20tenho%20uma%20dúvida%20acerca%20do%20meu%20site%20BestPlaces');
                //OR
                return redirect('https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20tenho%20uma%20dúvida%20acerca%20do%20meu%20site%20BestPlaces');
            } // all others
            else {
                header('Location: https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20tenho%20uma%20dúvida%20acerca%20do%20meu%20site%20BestPlaces');
                //OR
                return redirect('https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20tenho%20uma%20dúvida%20acerca%20do%20meu%20site%20BestPlaces');
            }}
    public function Planos(){
        $iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
        $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
        $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
        $berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
        $ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
        // check if is a mobile
            if ($iphone || $android || $palmpre || $ipod || $berry == true) {
                header('Location:  https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20personalizar%20o%20plano%20do%20meu%20site%20BestPlaces');
                //OR
                return redirect('https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20personalizar%20o%20plano%20do%20meu%20site%20BestPlaces');
            } // all others
            else {
                header('Location: https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20personalizar%20o%20plano%20do%20meu%20site%20BestPlaces');
                //OR
                return redirect('https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20personalizar%20o%20plano%20do%20meu%20site%20BestPlaces');
            }
        }
        public function Enviar(Request $request){
            $pizza= $request->all();
            $string = "";
            foreach ($pizza as $item){
                $string .= $item;
                $string .= ', ';
            }
            $replacement = '.';
            $string = substr($string, 0, -2).$replacement;
            $string = ucfirst(strtolower($string));
            $iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
            $android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
            $palmpre = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
            $berry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
            $ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
            // check if is a mobile
            if (count($pizza) > 1){
                if ($iphone || $android || $palmpre || $ipod || $berry == true) {
                    header('Location:  https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20os%20seguintes%20itens: '.$string);
                    //OR
                    return redirect('https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20os%20seguintes%20itens: '.$string);
                } // all others
                else {
                    header('Location: https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20os%20seguintes%20itens: '.$string);
                    //OR
                    return redirect('https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20os%20seguintes%20itens: '.$string);
                }
            } else {
                if ($iphone || $android || $palmpre || $ipod || $berry == true) {
                    header('Location:  https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20o%20seguinte%20item: '.$string);
                    //OR
                    return redirect('https://api.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20o%20seguinte%20item: '.$string);
                } // all others
                else {
                    header('Location: https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20o%20seguinte%20item: '.$string);
                    //OR
                    return redirect('https://web.whatsapp.com/send?phone=5575992132020&text=Olá!%20Eu%20gostaria%20de%20pedir%20o%20seguinte%20item: '.$string);
                }
            }
        }}
