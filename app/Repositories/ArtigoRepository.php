<?php

namespace App\Repositories;

use App\Artigo;

class ArtigoRepository 
{	
	protected $model;

	public function __construct()
	{
		$this->model = new Artigo();
	}

	/**
	* @param int paginate
	* @return \Illuminate\Support\Collection | []
	*/
	public function listaArtigos($search = '', $paginate = 5)
	{		
	   $artigos = $this->model->with(['user'])->whereHas('user', function($query) use ($search){
	   		if (!empty($search)) {
	   			$query->where('name', 'LIKE', "%{$search}%");
	   		}
	   })->paginate($paginate);       
	}
}