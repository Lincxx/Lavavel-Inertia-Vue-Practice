import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import { ZiggyVue } from '../../vendor/tightenco/ziggy'
import Layout from './Layouts/Layout.vue'

createInertiaApp({
  title: title =>  `My App ${title}` ,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    // add in default layout page
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      // register global components
      .component('Head', Head)
      .component('Link', Link)
      .mount(el)
  },
  progress: {
    // The color of the progress bar...
    color: '#fff',

    // Whether to include the default NProgress styles...
    includeCSS: true,

    // Whether the NProgress spinner will be shown...
    showSpinner: true,
  },
})