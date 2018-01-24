@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel>
		<h2 align="center">{{$artigo->titulo}}</h2>
		<h4 align="center">{{$artigo->descricao}}</h4>
		<div class="blog-container">

			<div class="blog-image">
				<img  class="img-responsive" src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="thumbnail">
			</div>
			<div>
				<p>
					{!!$artigo->conteudo!!}
				</p>
			</div>

			
		</div>
		
		<p align="center"><small>{{$artigo->user->name}} - {{date('d/m/Y',strToTime($artigo->data))}}</small></p>
		
	</painel>
</pagina>
@endsection
