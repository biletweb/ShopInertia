<template>
    <div class="container d-flex flex-column justify-content-between min-vh-100">
        <Navbar />

        <div class="flex-grow-1">
            <slot />
        </div>

        <Footer />
    </div>
</template>

<script>
import Navbar from '../../Components/Navbar.vue';
import Footer from '../../Components/Footer.vue';

export default {
    components: {
        Navbar, Footer
    }
}
</script>

<style scoped>
.container {
    width: 900px;
}
</style>
