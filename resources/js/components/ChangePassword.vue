<template>
    <v-card titulo="Mudar senha de acesso">
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Senha atual</label>
                    <input type="password" name="old_password" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nova senha</label>
                    <input type="password" name="password" v-model="new_password" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Confirmar senha</label>
                    <input type="password" name="confirm_password" v-model="confirm_password1" class="form-control">
                </div>

                <!-- Validando se a senha foi digitada corretamente -->
                <span v-if="((typeof new_password) === (typeof confirm_password1)) && ( new_password == confirm_password1) && (confirm_password1 != null)"  role="alert">
                    <strong class="text-success">As senhas coincidem</strong>
                </span>
                <span v-if="((typeof new_password) === (typeof confirm_password1)) && ( new_password != confirm_password1) && (confirm_password1 != null)">
                    <strong class="text-danger">As senhas não são iguais</strong>
                </span>             
            </div>
        </div>
    </v-card>
</template>

<script>
    export default {
       
        data: function(){
            return{
                new_password : this.new_password,
                confirm_password1 : this.confirm_password1,
                teste : ''
            }
        },
    }
</script>