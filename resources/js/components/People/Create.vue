<template>
  <div class="w-25 mx-auto">
        <p class="display-6">Create new</p>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="Age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="job" id="job" placeholder="Job">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('store', {name: name, age: age, job: job})" type="submit" class="btn btn-primary" value="Add">
        </div>
    </div>
</template>

<script>
export default {
    name: 'Create',

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    methods: {
        
    },

    computed: {
        isDisabled() {
            return this.name && this.age && this.job
        }
    }
}
</script>

<style>

</style>