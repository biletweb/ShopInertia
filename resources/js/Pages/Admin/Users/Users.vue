<template>
    <Head>
        <title>{{ $t(title) }}</title>
    </Head>

    <div class="d-flex justify-content-between mb-2 flex-sm-row flex-column gap-2">
        <form @submit.prevent="search">
            <div class="d-flex">
                <input v-model="form.search" name="search" class="search-input form-control form-control-sm rounded-pill" type="text" :placeholder="$t('Search for user by email')" />
                <button v-if="form.search.length != ''" type="submit" class="btn btn-sm btn-outline-secondary ms-2 rounded-3"><i class='bx bx-search' style="max-height: 18px; margin-top: -1px;"></i></button>
            </div>
        </form>
        <div>
            <Link :href="route('users.index')" v-if="route().current('admin.user.search')" type="button" class="btn btn-sm btn-outline-secondary rounded-3">{{ $t('Back') }}</Link>
            <Link :href="route('users.create')" v-if="route().current('users.index')" type="button" class="btn btn-sm btn-outline-secondary rounded-3" style="max-height: 28px;"><i class='bx bx-plus me-1'></i>{{ $t('User') }}</Link>
        </div>
    </div>

    <div v-if="users.total > 0" class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>{{ $t('Name') }}</th>
                    <th>{{ $t('Email') }}</th>
                    <th>{{ $t('Created') }}</th>
                    <th>{{ $t('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.formatted_created_at }}</td>
                    <td>
                        <div class="d-flex">
                            <Link :href="route('users.edit', user.id)" role="button" class="btn btn-xs btn-outline-success rounded-3 me-2 text-success"><i class='bx bx-edit-alt'></i></Link>
                            <a @click="destroy(user.id)" role="button" class="btn btn-xs btn-outline-danger rounded-3 text-danger"><i class='bx bx-trash-alt'></i></a>
                        </div>
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
import { Head, Link, useForm } from '@inertiajs/vue3';
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
    setup() {
        const form = useForm({
            search: '',
        });

        function search() {
            form.get(route('admin.user.search'))
        }

        return { form, search }
    },
    layout: MainLayout
}
</script>

<style scoped>
    .search-input {
        width: 300px;
    }
    .form-control:focus {
      border-color: #8592A3 !important;
    }
</style>
