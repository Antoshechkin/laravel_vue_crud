<template>
    <div>
        <div class="d-flex">
            <router-link class="btn btn-light" :to="{name: 'people.index'}">People</router-link>
            <router-link class="btn btn-light" :to="{name: 'people.create'}">Create</router-link>
        </div>
        <router-view></router-view>
    </div>
</template>

<script> 
export default {
    name: 'App',

    components: {

    }
}
</script>

<style scoped>

</style>