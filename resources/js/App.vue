<template>
    <div class="container">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav" style="font-size: 20px;">
                    <router-link to="/" class="nav-item nav-link">Lista de clientes
                    </router-link>
                    <router-link to="/create" class="nav-item nav-link">Adicionar cliente</router-link>
                </div>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>
 
<script>
export default {}
</script>