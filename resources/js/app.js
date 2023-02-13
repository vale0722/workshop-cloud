import { createApp } from 'vue/dist/vue.esm-bundler';
import LogsList from '@/LogsList.vue';
import _ from "lodash";
import axios from "axios";
import Pusher from "pusher-js";
import Echo from "laravel-echo";

window._ = _;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});

const app = createApp();
app.component('LogsList', LogsList);
app.mount("#app");
