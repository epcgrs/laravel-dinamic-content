<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{ titulo }}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props:['titulo','cor'],
    computed:{
        defineCor: function(){
            return "panel "+(this.cor || "panel-default" );
        }
    }
}
</script>

<style media="screen">

.blue {
    border-color: #493497;
}
.blue > .panel-heading {
    color: #ffffff;
    background-color: #493497;
    border-color: #d6e9c6;
}
.orange {
    border-color: #806c02;
}
.orange > .panel-heading {
    color: #ffffff;
    background-color: #806c02;
    border-color: #d6e9c6;
}
.green {
    border-color: #12be00;
}
.green > .panel-heading {
    color: #ffffff;
    background-color: #12be00;
    border-color: #d6e9c6;
}

</style>
