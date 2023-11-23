<template>
    <Head>
        <title>{{ $page.props.appName }}</title>
        <meta head-key="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta charset="utf-8" />
    </Head>

    <div class="container d-flex flex-column justify-content-between min-vh-100">
        <Navbar />

        <div class="flex-grow-1">
            <div v-if="$page.props.message" class="alert alert-success text-center" role="alert">
                <strong>{{ $page.props.message }}</strong>
            </div>
            <div v-if="$page.props.message_warning" class="alert alert-warning text-center" role="alert">
                <strong>{{ $page.props.message_warning }}</strong>
            </div>
            <div v-if="$page.props.message_danger" class="alert alert-danger text-center" role="alert">
                <strong>{{ $page.props.message_danger }}</strong>
            </div>

            <slot />
        </div>

        <Footer />
    </div>
</template>

<script>
import Navbar from '../../Components/Admin/Navbar.vue';
import Footer from '../../Components/Admin/Footer.vue';
import { Head } from '@inertiajs/vue3'

export default {
    components: {
        Navbar, Footer, Head
    }
}
</script>
