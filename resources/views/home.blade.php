@extends('layouts.app')

@section('content')
<pagina tamanho="10">
	<painel titulo="Dashboard">
		Teste de Conteúdo....
		<div class="row">
			<div class="col-md-4">
				<caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="#e87d1d" icone="ion ion-pie-graph"></caixa>
			</div>
			<div class="col-md-4">
				<caixa qtd="1800" titulo="Usuarios" url="#" cor="blue" icone="ion ion-person-add"></caixa>
			</div>
			<div class="col-md-4">
				<caixa qtd="25" titulo="Autores" url="#" cor="red" icone="ion ion-edit"></caixa>
			</div>
		</div>
	</painel>
</pagina>
@endsection
