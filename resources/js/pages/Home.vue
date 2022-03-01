<template>
    <div>
        <h1>Lista Pizze</h1>
        <ul>
            <li v-for="(pizza, index) in pizzas" :key="index">
                <router-link :to="{ name: 'single-pizza', params: { id: pizza.id}}">
                    {{pizza.name}}
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Home',
    data() {
        return {
            pizzas: []
        }
    },
    created() {
        axios.get("/api/pizzas")
            .then((response) => {
                this.pizzas = response.data
            })
            .catch((error) => {
                console.log(error);
            })
    }
}
</script>

<style lang="scss" scoped>

</style>