<template>
    <footer class="content-footer footer bg-secondary rounded-3 mt-3 mb-2">
        <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 py-3">
            <div>
                <span class="footer-text fw-bold link-light">{{ $page.props.appName }}</span> <span class="link-light">© {{ currentYear }}</span>
            </div>
            <div>
                <span class="footer-link fw-bold link-light">Version {{ $page.props.appVersion }}</span>
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

<style>
    
</style>
