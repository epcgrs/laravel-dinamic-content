<template>
	<div :class="'col-sm-'+ (sm || '6') + ' col-md-'+ (md || '4')">
		<div class="thumbnail">
			<img src="https://getuikit.com/v2/docs/images/placeholder_600x400.svg" alt="thumbnail">
			<div class="caption">
				<small>{{data}} - {{autor}}</small>
				<h3>{{titulo}}</h3>
				<p>{{descricao}}</p>
				<p><a :href="link" class="btn btn-primary" role="button">Leia mais</a></p>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: [ 'titulo', 'descricao','link','imagem','data','autor','sm','md' ]
}
</script>
