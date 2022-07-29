<template>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Proyecto FG</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <input type="email" class="form-control" v-model="correo.email_admin">
                    </li>
                    <li>
                        <input class="btn btn-primary" type="button" value="Cambiar email" @click="cambiarCorreo()">
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</template>

<script>
import CreateClient from './clients/CreateClient.vue';
export default {
    components: {
        'Create-client': CreateClient,
    },
    data() {
        return {
            show: false,
            correo: {
                id: '',
                email_admin: '',
            },
            old: {
                id: '',
                email_admin: '',
            }
        }
    },
    mounted() {
        axios
        .get('api/setting')
        .then(response => (
            this.correo = {
                id: response.data[0].id,
                email_admin: response.data[0].email_admin
            }
        ));
        axios
        .get('api/setting')
        .then(response => (
            this.old = {
                id: response.data[0].id,
                email_admin: response.data[0].email_admin
            }
        ));
    },
    methods: {
        createClient() {
            this.show = !this.show;
        },
        cambiarCorreo(){
            axios.delete('api/setting/' + this.old.id)
            .then(response => {
            });
            axios.post("api/setting", this.correo)
            .then(response => {
                alert("Correo modificado");
                console.log(response)
                this.correo = {
                    id: response.data.id,
                    email_admin: response.data.email_admin,
                };
            })
            .catch(error => {
                this.errorMessage = error.message;
                console.error("There was an error!", error);
            });
        }
    }
}
</script>

<style>
.collapse{
    justify-content: flex-end;
}
ul li {
    margin: 0 5px 0 5px;
}
</style>
