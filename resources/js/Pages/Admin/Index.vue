<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <div>
        Admin Index Content
    </div>
</template>

<script>
import MainLayout from '../Layouts/Admin/MainLayout.vue';
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
