<template>
    <section>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="data in dataTable.data" :key='data.id'>
                    <th scope="row">{{data.id}}</th>
                    <td>{{data.nombre}}</td>
                    <td>{{data.apellido}}</td>
                    <td>{{data.cedula}}</td>
                    <td>{{data.email}}</td>
                    <td>{{data.pais}}</td>
                    <td>{{data.direccion}}</td>
                    <td>{{data.celular}}</td>
                    <td>{{data.categories.categorias}}</td>
                    <td>
                        <div class="buttonsGroup">
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar" @click="eliminarCliente(data.id)"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
export default {
    data () {
      return {
          'dataTable': []
      }
    },
    mounted () {
        axios
        .get('api/client')
        .then(response => (this.dataTable = response))
    },
    methods: {
        eliminarCliente(id) {
            axios.delete('api/client/' + id)
            .then(response => {
                alert("Registro Eliminado")
                this.consultar();
            });
        },
        consultar() {
            axios
            .get('api/client')
            .then(response => (this.dataTable = response))
        }
    }
}
</script>

<style>
.buttonsGroup{
    display: flex;
    gap: 10px;
}
</style>
