@extends('layouts.app')

@section('content')
<pagina tamanho="10">
	<painel titulo="Dashboard">
		<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
		<div class="row">
			<div class="col-md-4">
				<caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="#03ee23" icone="ion ion-pie-graph"></caixa>
			</div>
			<div class="col-md-4">
				<caixa qtd="1800" titulo="Usuarios" url="{{route('usuarios.index')}}" cor="blue" icone="ion ion-person-add"></caixa>
			</div>
			<div class="col-md-4">
				<caixa qtd="25" titulo="Autores" url="#" cor="red" icone="ion ion-edit"></caixa>
			</div>
		</div>
	</painel>
</pagina>
@endsection
