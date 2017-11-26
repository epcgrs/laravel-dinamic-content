<template>

    <div v-bind:id="nome" class="modal fade" tabindex="-1" role="dialog" v-bind:aria-labelledby="nome">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <slot></slot>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    props:['nome']
}
</script>
