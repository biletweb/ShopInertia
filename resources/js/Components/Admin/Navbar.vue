<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary rounded-3 mt-2 mb-3">
        <div class="container-fluid">
            <Link class="navbar-brand" :href="route('admin.index')">ADMIN PANEL</Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-7">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-ex-7">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Menu</a>
                        <div class="dropdown-menu">
                            <Link class="dropdown-item" :href="route('users.index')">Users</Link>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Language</a>
                        <div class="dropdown-menu">
                            <button class="dropdown-item"><img src="../../src/img/flags/ukraine.png" style="max-width: 25px;" class="me-2">Ukrainian</button>
                            <!-- <button class="dropdown-item"><img src="../../src/img/flags/russia.png" style="max-width: 25px;" class="me-2">Russian</button> -->
                            <button class="dropdown-item" :href="route('users.index')"><img src="../../src/img/flags/english.png" style="max-width: 25px;" class="me-2">English</button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" :href="route('shop.index')">Return to store</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        Link
    }
}
</script>

<style>
    
</style>
