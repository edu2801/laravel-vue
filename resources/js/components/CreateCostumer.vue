<template>
    <div>
        <h3 class="text-center">Adicionar cliente</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addCostumer">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="costumer.name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="costumer.email">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" class="form-control" v-model="costumer.phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
export default {
    data() {
        return {
            costumer: {}
        }
    },
    methods: {
        addCostumer() {
            this.axios
                .post('http://localhost:8000/api/costumers', this.costumer)
                .then(response => (
                    this.$router.push({ name: 'home' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>