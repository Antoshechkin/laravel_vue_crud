<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Job</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in people" :key="item.id">
                    <th scope="row">{{ item.id }}</th>
                    <td>{{ item.name }}</td>
                    <td>{{ item.age }}</td>
                    <td>{{ item.job }}</td>
                    <td><router-link class="btn btn-outline-success" :to="{name: 'people.edit', params: {id: item.id}}">Edit</router-link></td>
                    <td><a href="#" @click.prevent="$store.dispatch('deletePeople', item.id)" class="btn btn-outline-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'Index',

    mounted() {
        this.$store.dispatch('getPeople')
    },

    methods: {

    },

    computed: {
        people() {
            return this.$store.getters.people
        }
    }

}
</script>

<style>

</style>