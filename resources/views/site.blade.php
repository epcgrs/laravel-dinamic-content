@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Artigos">

		<div class="row">
			<artigocard 
			titulo="Título teste"
			descricao="Descrição de Teste"
			link="#"
			imagem="https://getuikit.com/v2/docs/images/placeholder_600x400.svg"
			data="12/12/2002"
			autor="Emmanuel"
			sm="6"
			md="4" >
			</artigocard>

			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="thumbnail">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>.Lorem ipsum</p>
						<p><a href="#" class="btn btn-primary" role="button">Leia mais</a></p>
					</div>
				</div>
			</div>
		</div>

	</painel>
</pagina>
@endsection
