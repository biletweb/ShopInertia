<template>
    <Head>
        <title>{{ $t(title) }}</title>
    </Head>

    <form @submit.prevent="store">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ $t('Name') }}</label>
                    <input v-model="form.name" type="text" name="name" class="form-control" :class="{ 'is-invalid': form.errors.name }" id="name" :placeholder="$t('Enter name')" />
                    <div v-if="form.errors.name" class="invalid-feedback">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ $t('Email') }}</label>
                    <input v-model="form.email" type="text" name="email" class="form-control" :class="{ 'is-invalid': form.errors.email }" id="email" :placeholder="$t('Enter email')" />
                    <div v-if="form.errors.email" class="invalid-feedback">
                        {{ form.errors.email }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ $t('Password') }}</label>
                    <input v-model="form.password" type="password" name="password" class="form-control" :class="{ 'is-invalid': form.errors.password }" id="password" :placeholder="$t('Enter password')" />
                    <div v-if="form.errors.password" class="invalid-feedback">
                        {{ form.errors.password }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ $t('Confirm password') }}</label>
                    <input v-model="form.password_confirmation" type="password" name="password_confirmation" class="form-control" :class="{ 'is-invalid': form.errors.password }" id="password_confirmation" :placeholder="$t('Enter password')" />
                </div>
                <div class="d-flex justify-content-end">
                    <Link :href="route('users.index')" type="button" class="btn btn-sm btn-outline-secondary me-2 rounded-3">{{ $t('Back') }}</Link>
                    <button type="submit" :class="{ 'btn d-none': form.processing }" class="btn btn-sm btn-outline-secondary rounded-3">{{ $t('Save') }}</button>
                    <button v-if="form.processing" class="btn btn-sm btn-outline-secondary rounded-3" type="button" style="height: 28px;" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="visually-hidden">Loading...</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
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
    },

    setup() {
        const form = useForm({
            name: null,
            email: null,
            password: null,
            password_confirmation: null
        });

        function store() {
            form.post(route('users.store'))
        }

        return { form, store }
    },
    
    layout: MainLayout
}
</script>

<style scoped>
    .form-control:focus {
      border-color: #8592A3 !important;
    }
</style>
