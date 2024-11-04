import './bootstrap';
import { createApp } from "vue";
import MyHome from '@/components/MyHome.vue';
import CoverLetter from '@/components/cover-letter.vue';

const app = createApp({});

app.component('my-home', MyHome)
   .component('cover-letter',CoverLetter);

app.mount("#app");
