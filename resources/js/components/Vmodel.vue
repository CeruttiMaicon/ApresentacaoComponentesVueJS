<template>
    <div class="col-12">
        <div class="row">
            <div class="col-3">
                <input class="form-control" v-model="valor1" type="text" placeholder="Valor 1"> 
            </div>
            <div class="col-2">
                <div class="form-group ml-2 mt-1">
                    X
                </div>
            </div>
            <div class="col-3">
                <input class="form-control" v-model="valor2" type="text" placeholder="Valor 2">
            </div>
            <div class="col-4">
                <input disabled class="form-control" v-bind="multiplica" type="text" :placeholder="multiplica">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <br>
                Valor 1 = {{ valor1 }} <br>
                Valor 2 ={{ valor2 }} <br>
                Resultado = {{multiplica}}
            </div>
            
        </div>
       
    </div>
</template>

<script>

    export default {

        props:['valor1', 'valor2'],

        computed: {
          multiplica: function () {
            return this.valor1 * this.valor2;
          }
        },

        
        mounted() {
            console.log('Component vue V-model')
        },
    }
</script>
