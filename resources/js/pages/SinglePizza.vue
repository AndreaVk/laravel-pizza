<template>
    <div>
        <h1>{{pizza.name}}</h1>
    </div>
</template>

<script>
export default {
    name: 'SinglePizza',
    data() {
        return {
            pizza: []
        }
    },
    created() {
        axios.get(`/api/pizzas/${this.$route.params.id}`)
            .then((response) => {
                this.pizza = response.data
            })
    }
}
</script>

<style>

</style>