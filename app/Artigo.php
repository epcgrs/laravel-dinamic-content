<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Artigo extends Model
{
    use SoftDeletes;

    protected $fillable = ['titulo','descricao','conteudo','data'];    
    protected $dates = ['deleted_at'];


    public function user(){      
    	return $this->belongsTo('App\User');
    }

    /****** Mutators ******/


    /******** Scopes ********/


   public static function listaArtigosSite($paginate, $busca = null){


    if ($busca ) {
       $listaArtigos = DB::table('artigos')
       ->join('users','users.id','=','artigos.user_id')
       ->select('artigos.id','artigos.titulo','artigos.descricao','users.name as autor','artigos.data')
       ->whereNull('deleted_at')
       ->whereDate('data','<=',date('Y-m-d'))
       ->where(function($query) use ($busca){
        $query->orWhere('titulo', 'like', '%'.$busca.'%')
        ->orWhere('descricao', 'like', '%'.$busca.'%');
    })
       ->orderBy('data','DESC')
       ->paginate($paginate);


       return $listaArtigos;
   } else {


       $listaArtigos = DB::table('artigos')
       ->join('users','users.id','=','artigos.user_id')
       ->select('artigos.id','artigos.titulo','artigos.descricao','users.name as autor','artigos.data')
       ->whereNull('deleted_at')
       ->whereDate('data','<=',date('Y-m-d'))
       ->orderBy('data','DESC')
       ->paginate($paginate);

       return $listaArtigos;
   }
}



}
