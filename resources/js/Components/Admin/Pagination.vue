<template>
    <nav v-if="links.length > 3">
        <ul class="pagination pagination-sm justify-content-end mb-0">
            <li v-for="link in links" class="page-item" :class="{'active': link.active, 'disabled': link.url === null}">
                <Link v-html="link.label" 
                    :href="link.url ?? ''" 
                    :disabled="link.url === null"  
                    class="page-link">
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        Link
    },
    props: {
        links: Array
    }
}
</script>

<style scoped>
.page-item.active .page-link {
    background-color: #8592A3;
}
</style>
