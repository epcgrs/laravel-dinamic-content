@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Artigos">


	<p>
		<form action="{{route('site')}}" class="form-inline text-left" method="GET">
			<input type="search" class="customsearch" name="busca" placeholder="Buscar Artigos" value="{{($busca) ? $busca : ""}}">
		</form>
	</p>


	<div class="row">


		@foreach ($lista as $key => $value)

		<artigocard 
		titulo="{{str_limit($value->titulo, 25, '...')}}"
		descricao="{{str_limit($value->descricao, 40, '...')}}"
		link="{{route('artigo',[$value->id, str_slug($value->titulo)])}}"
		imagem="https://getuikit.com/v2/docs/images/placeholder_600x400.svg"
		data="{{$value->data}}"
		autor="{{$value->autor}}"
		sm="6"
		md="4" >
	</artigocard>	

	@endforeach

</div>
<div align="center">
	{{$lista}}
</div>

</painel>
</pagina>
@endsection
