<template>
    <div class="card-body">
        <h3>Crear Usuario</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input v-model="create.nombre" type="text" class="form-control" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input v-model="create.apellido" type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cedula</label>
            <input v-model="create.cedula" type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input v-model="create.email" type="email" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Pais</label>
            <select v-model="create.pais" class="form-select" aria-label="Default select example">
                <option v-for="country in this.countries" :key="country.country">{{country.country}}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dirección</label>
            <input v-model="create.direccion" type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Celular</label>
            <input v-model="create.celular" type="number" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Categoria</label>
            <select v-model="create.id_independiet" class="form-select" aria-label="Default select example">
                <option v-for="categoria in this.categorias.data" :key="categoria.id" :value="categoria.id">{{categoria.categorias}}</option>
            </select>
        </div>
        <br>
        <button type="submit" @click="guardarCliente" class="btn btn-primary">Guardar</button>
    </div>
</template>

<script>
export default {
    components: {
    },
    data() {
        return {
            countries: [],
            categorias: [],
            create: {
                nombre: '',
                apellido: '',
                cedula: '',
                email: '',
                pais: '',
                direccion: '',
                celular: '',
                id_independiet: '',
            }
        }
    },
    mounted () {
        axios
        .get('https://api.first.org/data/v1/countries', {
            params: {
                'region': 'South America'
            }
        })
        .then(response => (this.countries = response.data.data));
        axios
        .get('api/independient')
        .then(response => (this.categorias = response));
    },
    methods: {
        guardarCliente() {
            axios.post("api/client", this.create)
            .then(response => {
                alert("Registro creado")
                this.create = {
                    nombre: '',
                    apellido: '',
                    cedula: '',
                    email: '',
                    pais: '',
                    direccion: '',
                    celular: '',
                    id_independiet: '',
                };
            })
            .catch(error => {
                alert(error.message)
                this.errorMessage = error.message;
                console.error("There was an error!", error);
            });
        }
    }
}
</script>
