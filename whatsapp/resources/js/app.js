import './bootstrap';
import { createApp } from 'vue';
import ChatComponent from './components/ChatComponent.vue';

const app = createApp({});

app.component('chat-component', ChatComponent);

app.mount('#app');

import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});
