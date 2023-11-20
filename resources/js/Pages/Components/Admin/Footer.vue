<template>
    <footer class="content-footer footer bg-primary rounded-3 my-2">
        <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 py-3">
            <div>
                <a href="javascript:void(0)" class="footer-text fw-bold">biletweb.store</a> © {{ currentYear }}
            </div>
            <div>
                <a href="javascript:void(0)" class="footer-link">Версия 1.0</a>
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
