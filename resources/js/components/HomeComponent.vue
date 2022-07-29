<template>
    <secion>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <Navbar/>
                        </div>

                        <div class="card-body">
                            <Tabla-clientes />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container" v-if="this.show">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <Create-client />
                    </div>
                </div>
            </div>
        </div>
    </secion>
</template>

<script>
import Navbar from './Navbar.vue';
import TablaClientes from './clients/TablaClientes.vue';
import CreateClient from './clients/CreateClient.vue';
export default {
    components: {
        'Navbar': Navbar,
        'Create-client': CreateClient,
        'Tabla-clientes': TablaClientes
    },
    data() {
        return {
            show: true,
        }
    },
    mounted () {
    },
    methods: {
    }
}
</script>

