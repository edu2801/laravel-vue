<template>
    <div>
        <h3 class="text-center">Editar cliente</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateCostumer">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="costumer.name">
                    </div>
                    <div class="form-group mt-2">
                        <label>Email</label>
                        <input type="email" class="form-control" v-model="costumer.email">
                    </div>
                    <div class="form-group mt-2">
                        <label>Telefone</label>
                        <input type="text" class="form-control" v-mask="['(##) ####-####', '(##) #####-####']"
                            v-model="costumer.phone">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
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
    created() {
        this.axios
            .get(`http://localhost:8000/api/costumers/${this.$route.params.id}`)
            .then((res) => {
                this.costumer = res.data;
            });
    },
    methods: {
        updateCostumer() {
            this.axios
                .patch(`http://localhost:8000/api/costumers/${this.$route.params.id}`, this.costumer)
                .then((res) => {
                    this.$router.push({ name: 'home' });
                });
        }
    }
}
</script>