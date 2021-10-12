<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reuniao;

class Unidade extends Model
{
    protected $connection = 'app';
    protected $fillable = ['nome'];
    public $timestamps = false;


    public function novareuniao($dados)
    {
        //dd($dados);
        $rn = new Reuniao();

        $rn->unidade_id =$this->id;
        $rn->titulo = $dados['titulo'];
        $rn->dia = $dados['data'];
        $rn->hora = $dados['hora'];
        $rn->local = $dados['local'];

        $rn->save();
    }
    public function reunioes()
    {
       $reunioes = Reuniao::where('unidade_id', $this->id)->get();
       if($reunioes){
        return $reunioes;
       }else{
           return [];
       }
    }

}


