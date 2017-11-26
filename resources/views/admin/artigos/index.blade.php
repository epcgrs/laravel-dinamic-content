@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
		<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
		

		<tabela-lista 
		v-bind:titulos="['#','Título','Descrição']"
		v-bind:itens="{{$listaArtigos}}"
		ordem="desc" ordemcol="1"
		criar="#criar" detalhe="#detalhe" editar="#criar" deletar="#deletar" token="827891273"
		modal="sim"
		>
		</tabela-lista>	
	</painel>
</pagina>
<modal nome="adicionar">
	<painel titulo="Adicionar">
		<formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
			</div>
			<div class="form-group">
				<label for="descricao">Descição</label>
				<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
			</div>
			<button class="btn btn-info">Adicionar</button>

		</formulario>
			
	</painel>
</modal>
<modal nome="editar">
	<painel titulo="Editar">
		<formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
			</div>
			<div class="form-group">
				<label for="descricao">Descição</label>
				<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
			</div>
			<button class="btn btn-info">Atualizar</button>

		</formulario>
			
	</painel>
</modal>
@endsection
