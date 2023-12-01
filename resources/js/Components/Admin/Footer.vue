<template>
    <footer class="bg-secondary rounded mb-2 mt-3">
        <div class="container d-flex justify-content-between py-3">
            <div>
                <span class="fw-bold link-light">{{ $page.props.appName }}</span> <span class="link-light">© {{ currentYear }}</span>
            </div>
            <div>
                <span class="fw-bold link-light">{{ $t('Version') }} {{ $page.props.appVersion }}</span>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    data() {
        return {
            currentYear: new Date().getFullYear()
        };
    }
}
</script>
