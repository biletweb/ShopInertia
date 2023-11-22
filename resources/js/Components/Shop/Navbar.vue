<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary rounded-3 mt-2 mb-3">
        <div class="container-fluid">
            <img src="../../src/img/logo/logo.jpg" style="max-height: 35px; opacity: .8" class="me-3" alt="logo">
            <a class="navbar-brand" href="javascript:void(0)">{{ $page.props.appName }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-7">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-ex-7">
                <div class="navbar-nav me-auto">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Categories</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Category 1</a>
                                <a class="dropdown-item" href="javascript:void(0)">Category 2</a>
                                <a class="dropdown-item" href="javascript:void(0)">Category 3</a>
                            </div>
                        </li>
                    </ul>
                        <Link class="nav-item nav-link" :href="route('admin.index')">ADMIN PANEL</Link>
                    </div>
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><i class="tf-icons navbar-icon bx bx-cart-alt"></i>
                            Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><i class="tf-icons navbar-icon bx bx-user"></i>
                            Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><i
                                class="tf-icons navbar-icon bx bx-lock-open-alt"></i> Go out</a>
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
