/* CONFIGURE ROUTER */
import Vue from 'vue';
import Router from 'vue-router';
import i18n from './i18n';

/* VIEWS / PAGES */
import About from './views/About.vue';
import ContactUs from './views/ContactUs.vue';
import Feedback from './views/Feedback.vue';
import Covid19 from './views/Covid19.vue';
import Terms from './views/Terms.vue';
import CookiePolicy from './views/CookiePolicy.vue';
import Home from './views/Home.vue';
import CatFacts from './views/CatFacts.vue';
import Beers from './views/Beers.vue';

/* USR ROUTER */
Vue.use(Router);

/* CONFIGURE ROUTES */
export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            redirect: `/${i18n.locale}`
        },
        {
            path: '/:lang',
            component: {
                render(c){return c('router-view')}
            },
            children: [
                {path: '/', name: 'home', component: Home},
                {path: 'about', name: 'about', component: About},
                {path: 'contact-us', name: 'contact-us', component: ContactUs},
                {path: 'feedback', name: 'feedback', component: Feedback},
                {path: 'covid-19', name: 'covid-19', component: Covid19},
                {path: 'terms', name: 'terms', component: Terms},
                {path: 'cookie-policy', name: 'cookie-policy', component: CookiePolicy},
                {path: 'cat-facts', name: 'cat-facts', component: CatFacts},
                {path: 'beers', name: 'beers', component: Beers}
            ]
        }
    ]
});