import Vue from 'vue'
import App from './App.vue'
import i18n from './i18n'
import router from './router';
import 'materialize-css/dist/css/materialize.min.css';

Vue.config.productionTip = false;

let validLangs = {
      'en': 1, 'fr': 1, 'de': 1, 'es': 1
};

/**
 * Route guards (Middleware)
 *    Force English
 */
router.beforeEach((to, from, next) => {
      let language = to.params.lang;
      if (typeof validLangs[language] == 'undefined') {
            language = 'en';
      }
      i18n.locale = language;
      next();
});

new Vue({
      i18n,
      router,
      render: h => h(App),
}).$mount('#app');

