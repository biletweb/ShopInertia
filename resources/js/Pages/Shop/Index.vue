<template>
    <Head :title="title" />

    Shop Index Content
    
</template>

<script>
import MainLayout from '../Layouts/Shop/MainLayout.vue';
import { Head } from '@inertiajs/vue3';

export default {
    components: {
        Head
    },
    props: {
        title: String
    },

    layout: MainLayout
}
</script>

<style>
    
</style>
