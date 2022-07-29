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
                        <a class="nav-link" href="#">Configuración</a>
                    </li>
                    <li class="searchInput">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
            show: false
        }
    },
    mounted() {
        //console.log('Component mounted.')
    },
    methods: {
        createClient() {
            this.show = !this.show;
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
