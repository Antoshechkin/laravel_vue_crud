<template>
    <div class="w-25 mx-auto" v-if="person">
        <p class="display-6">Update</p>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="person.name" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="person.age" id="age" placeholder="Age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="person.job" id="job" placeholder="Job">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('update', {id: person.id, name: person.name, age: person.age, job: person.job})" type="submit" class="btn btn-primary" value="Update">
        </div>
    </div>
</template>

<script>
export default {
    name: 'Edit',

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    methods: {
        
    },

    computed: {
        isDisabled() {
            return this.person.name && this.person.age && this.person.job
        },

        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style>

</style>