<template>
    <Head>
        <title>{{ title }}</title>
    </Head>

    <div class="d-flex justify-content-end mb-2">
        <Link :href="route('users.create')" type="button" class="btn btn-sm btn-outline-secondary">Create user</Link>
    </div>

    <div v-if="users.total > 0" class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.formatted_created_at }}</td>
                    <td>
                        <Link :href="route('users.edit', user.id)" role="button" class="btn btn-xs btn-outline-success rounded-1 me-2">Edit</Link>
                        <a @click="destroy(user.id)" role="button" class="btn btn-xs btn-outline-danger rounded-1">Delete</a>
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
import MainLayout from '../../../Layouts/Admin/MainLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from '../../../Components/Admin/Pagination.vue';

export default {
    components: {
        Head, Pagination, Link
    },
    props: {
        title: String,
        users: Object
    },
    methods: {
        destroy(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                this.$inertia.delete(this.route('users.destroy', id))
            }
        },
    },
    layout: MainLayout
}
</script>

<style>
    
</style>
