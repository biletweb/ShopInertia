<template>
    <Head>
        <title>{{ title }}</title>
    </Head>

    <form @submit.prevent="update">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input v-model="form.name" type="text" name="name" class="form-control" :class="{ 'is-invalid': form.errors.name }" id="name" placeholder="Enter your name" />
                    <div v-if="form.errors.name" class="invalid-feedback">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input v-model="form.email" type="text" name="email" class="form-control" :class="{ 'is-invalid': form.errors.email }" id="email" placeholder="Enter your email" />
                    <div v-if="form.errors.email" class="invalid-feedback">
                        {{ form.errors.email }}
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <Link :href="route('users.index')" type="button" class="btn btn-sm btn-outline-secondary me-2">Back</Link>
                    <button type="submit" class="btn btn-sm btn-outline-success">Update</button>
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
            email: props.user.email
        });

        function update() {
            form.put(route('users.update', props.user.id))
        }

        return { form, update }
    },
    layout: MainLayout
}
</script>

<style>
    
</style>
