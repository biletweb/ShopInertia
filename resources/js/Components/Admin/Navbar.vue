<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary rounded-3 my-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">ADMIN PANEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-7">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-ex-7">
                <div class="navbar-nav me-auto">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Users</a>
                                <a class="dropdown-item" href="javascript:void(0)">Menu 2</a>
                                <a class="dropdown-item" href="javascript:void(0)">Menu 3</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ms-lg-auto">
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
