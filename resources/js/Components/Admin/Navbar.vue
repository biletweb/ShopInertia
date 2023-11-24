<template>
    <nav class="navbar navbar-expand-md bg-secondary rounded-bottom mb-3">
        <div class="container">
            <Link class="navbar-brand" :href="route('admin.index')">{{ $t('ADMIN PANEL') }}</Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-7">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-ex-7">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">{{ $t('Menu') }}</a>
                        <div class="dropdown-menu">
                            <Link class="dropdown-item" :href="route('users.index')">{{ $t('Users') }}</Link>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">{{ $t('Language') }}</a>
                        <div class="dropdown-menu">
                            <button @click="changeLanguage('uk')" class="dropdown-item"><img src="../../src/img/flags/ukraine.png" style="max-width: 25px;" class="me-2">{{ $t('Ukrainian') }}</button>
                            <button @click="changeLanguage('en')" class="dropdown-item"><img src="../../src/img/flags/english.png" style="max-width: 25px;" class="me-2">{{ $t('English') }}</button>
                        </div>
                    </li>
                    <li class="nav-item" style="margin-right: -7px;">
                        <Link class="nav-link" :href="route('shop.index')">{{ $t('Return to store') }}</Link>
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
    },
    methods: {
        changeLanguage(locale) {
            this.$i18n.locale = locale;
        }
    }
}
</script>
