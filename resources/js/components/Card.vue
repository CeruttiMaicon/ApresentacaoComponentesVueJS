<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{titulo}}</div>

                    <div class="card-body">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        //Aqui sao passadas as propriedades do componente.
        props:['titulo'],

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
