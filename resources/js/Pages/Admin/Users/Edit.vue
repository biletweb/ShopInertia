<template>
    <Head>
        <title>{{ $t(title) }}</title>
    </Head>

    <form @submit.prevent="update">
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
                    <label for="current_password" class="form-label">{{ $t('Current password') }}</label>
                    <input v-model="form.current_password" type="password" name="current_password" class="form-control" :class="{ 'is-invalid': form.errors.current_password }" id="current_password" :placeholder="$t('Enter password')" />
                    <div v-if="form.errors.current_password" class="invalid-feedback">
                        {{ form.errors.current_password }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ $t('New password') }}</label>
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
                    <div v-if="form.isDirty" class="flex-grow-1 fw-bold text-warning">{{ $t('Changed, do not forget to save') }}</div>
                    <Link :href="route('users.index')" type="button" class="btn btn-sm btn-outline-secondary me-2 rounded-3">{{ $t('Back') }}</Link>
                    <button type="submit" :class="{ 'btn d-none': form.processing }" class="btn btn-sm btn-outline-success rounded-3">{{ $t('Update') }}</button>
                    <button v-if="form.processing" class="btn btn-sm btn-outline-success rounded-3" type="button" disabled>
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
        user: Object
    },
    setup(props) {
        const form = useForm({
            name: props.user.name,
            email: props.user.email,
            current_password: null,
            password: null,
            password_confirmation: null
        });

        function update() {
            form.put(route('users.update', props.user.id))
        }

        return { form, update }
    },
    layout: MainLayout
}
</script>

<style scoped>
    .form-control:focus {
      border-color: #8592A3 !important;
    }
</style>
