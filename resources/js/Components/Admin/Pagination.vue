<template>
    <nav v-if="links.length > 3" aria-label="Page navigation">
        <ul class="pagination pagination-sm justify-content-end mb-0">
            <!-- <li class="page-item prev">
                <a class="page-link" href="#"><i class="tf-icon bx bx-chevrons-left"></i></a>
            </li> -->
            <li v-for="(link, key) in links" :key="key" class="page-item" :class="{'active': link.active, 'disabled': link.url === null}">
                <Link v-html="link.label" 
                    :href="link.url ?? ''" 
                    :disabled="link.url === null"  
                    class="page-link">
                </Link>
            </li>
            <!-- <li class="page-item next">
                <a class="page-link" href="#"><i class="tf-icon bx bx-chevrons-right"></i></a>
            </li> -->
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
