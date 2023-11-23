import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createI18n } from 'vue-i18n';
import ukMessages from './locales/uk.json';

const i18n = createI18n({
    locale: 'en',
    fallbackLocale: 'en',
    messages: {
        uk: ukMessages,
    },
    silentTranslationWarn: true
});

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(i18n);
        app.mount(el);
    },
    progress: {
        color: '#71DD37'
    }
});
