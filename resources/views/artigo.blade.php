@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel>
		<h2 align="center">{{$artigo->titulo}}</h2>
		<h4 align="center">{{$artigo->descricao}}</h4>
		<p>
			{!!$artigo->conteudo!!}
		</p>
		<p align="center"><small>{{$artigo->user->name}} - {{date('d/m/Y',strToTime($artigo->data))}}</small></p>
		
	</painel>
</pagina>
@endsection
