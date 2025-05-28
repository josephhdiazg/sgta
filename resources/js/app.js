import '../css/app.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { createApp, h } from 'vue';
import { ZiggyVue } from 'ziggy-js';
//import { initializeTheme } from './composables/useAppearance';
import { initFlowbite } from 'flowbite';

router.on('navigate', () => initFlowbite());

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: true,
});

// This will initialize Flowbite for the Inertia app on page load...
initFlowbite();

// This will set light / dark mode on page load...
//initializeTheme();
