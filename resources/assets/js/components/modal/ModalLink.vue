<template>
	<span class=""> 
		<button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome">
			{{titulo}}
		</button>
		<button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+nome">
			{{titulo}}
		</button>
		<a v-if="tipo == 'link'" v-bind:class="css || ''" href="#" data-toggle="modal" v-bind:data-target="'#'+nome">{{titulo}}</a>
	</span>

</template>

<script>
export default {
	props:['tipo','nome','titulo','css']
}
</script>
