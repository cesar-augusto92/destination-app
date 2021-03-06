<?php

namespace App\Http\Controllers;

use App\Cep;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class CepsController extends Controller
{
    public function list(){
        
        $ceps = Cep::all();
        return view('list', compact('ceps'));
    }

    public function formConsultar(){
        
        return view(('ceps.consultar'));
    }

    public function destruir($id){
        
        $cep = Cep::find($id);

        if(!empty($cep)){
            $cep->delete();
        }

        return redirect()->action('CepsController@list');
    }

    public function consultar(Request $request){
        
        $numerocep = $request->input('cep');

        $cep = Cep::all()->where('numero_cep', $numerocep);
        
        if(count($cep) == 0)
        {
            $cep = new Cep();
            $cep->numero_cep = $numerocep;
         
            $dadosCep = file_get_contents("https://viacep.com.br/ws/{$numerocep}/json/");
            $dadosCep = json_decode($dadosCep);
            
            if(!empty($dadosCep))
            {
                if(isset($dadosCep->erro))
                {
                    if($dadosCep->erro == true)
                    {
                        return redirect()->action('CepsController@list');
                    }
                }else
                {
                    $cep->endereco = $dadosCep->logradouro;
                    $cep->bairro = $dadosCep->bairro;
                    $cep->cidade = $dadosCep->localidade;
                    $cep->estado = $dadosCep->uf;
                    $cep->save();
                }
            }
        }

        return redirect()->action('CepsController@list');
    }
}
