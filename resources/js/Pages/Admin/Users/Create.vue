<template>
    <Head>
        <title>{{ title }}</title>
    </Head>

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control is-invalid" id="name" placeholder="Enter your name" />
                <div class="invalid-feedback">
                    Error
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control is-invalid" id="email" placeholder="Enter your email" />
                <div class="invalid-feedback">
                    Error
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control is-invalid" id="password" placeholder="Enter password" />
                <div class="invalid-feedback">
                    Error
                </div>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm password</label>
                <input type="password" name="confirm_password" class="form-control is-invalid" id="confirm_password" placeholder="Enter password" />
                <div class="invalid-feedback">
                    Error
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <Link :href="route('users.index')" type="button" class="btn btn-sm btn-outline-secondary me-2">Back</Link>
                <button type="button" class="btn btn-sm btn-outline-secondary">Save</button>
            </div>
        </div>
    </div>
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
    },
    layout: MainLayout
}
</script>

<style>
    
</style>
