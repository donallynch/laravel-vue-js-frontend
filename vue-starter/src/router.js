/* CONFIGURE ROUTER */
import Vue from 'vue';
import Router from 'vue-router';

/* VIEWS / PAGES */
import About from './views/About.vue';
import Home from './views/Home.vue';
import CatFacts from './views/CatFacts.vue';
import Beers from './views/Beers.vue';

/* USR ROUTER */
Vue.use(Router);

/* CONFIGURE ROUTES */
export default new Router({
    mode: 'history',
    routes: [
        {path: '/', component: Home},
        {path: '/about', component: About},
        {path: '/cat-facts', component: CatFacts},
        {path: '/beers', component: Beers}
    ]
});