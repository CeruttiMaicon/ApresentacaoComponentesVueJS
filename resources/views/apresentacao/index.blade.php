@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Componente Vue -->
            <v-card titulo="UM TITULO BONITO PARA O MEU CARD">


                <!-- Bootstrap normal -->
                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
                <button type="button" class="btn btn-outline-light">Light</button>
                <button type="button" class="btn btn-outline-dark">Dark</button>
           
            </v-card>

            <hr>

            <v-card titulo="PODER DO V-MODEL">
                <v-iteracao></v-iteracao>
               
            </v-card>           
        </div>
    </div>
</div>
@endsection
