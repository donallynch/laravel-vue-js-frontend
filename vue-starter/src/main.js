import Vue from 'vue'
import App from './App.vue'
import i18n from './i18n'

import router from './router';

Vue.config.productionTip = false

/* Route guards (Middleware) */
router.beforeEach((to, from, next) => {
      let language = to.params.lang;
      if (!language) {
            language = 'en';
      }

      i18n.locale = language;
      next();
});

new Vue({
      i18n,
      router,
      render: h => h(App),
}).$mount('#app')

