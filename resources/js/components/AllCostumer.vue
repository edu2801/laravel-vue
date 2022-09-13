<template>
    <div>
        <h2 class="text-center">Clientes</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="costumer in costumers" :key="costumer.id">
                    <td>{{ costumer.id }}</td>
                    <td>{{ costumer.name }}</td>
                    <td>{{ costumer.email }}</td>
                    <td>{{ costumer.phone }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'edit', params: { id: costumer.id }}" class="btn btn-success">
                                Editar</router-link>
                            <button class="btn btn-danger" @click="deleteCostumer(costumer.id)">Excluir</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
export default {
    data() {
        return {
            costumers: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/costumers/')
            .then(response => {
                this.costumers = response.data;
            });
    },
    methods: {
        deleteCostumer(id) {
            this.axios
                .delete(`http://localhost:8000/api/costumers/${id}`)
                .then(response => {
                    let i = this.costumers.map(data => data.id).indexOf(id);
                    this.costumers.splice(i, 1)
                });
        }
    }
}
</script>