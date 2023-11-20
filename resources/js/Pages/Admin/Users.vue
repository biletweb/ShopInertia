<template>
    <Head>
        <title>{{ title }}</title>
    </Head>

    <div class="d-flex justify-content-end mb-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Add user</button>
    </div>

    <div v-if="users.total > 0" class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user, key) in users.data" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        <button type="button" class="btn btn-xs btn-success rounded-3 me-2">Edit</button>
                        <button type="button" class="btn btn-xs btn-danger rounded-3">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div v-else class="alert alert-secondary rounded-3 text-center fw-bold" role="alert">
        No users
    </div>

    <Pagination :links="users.links" />
</template>

<script>
import MainLayout from '../../Layouts/Admin/MainLayout.vue';
import { Head } from '@inertiajs/vue3';
import Pagination from '../../Components/Admin/Pagination.vue';

export default {
    components: {
        Head, Pagination
    },
    props: {
        title: String,
        users: Object
    },
    layout: MainLayout
}
</script>

<style>
    
</style>
