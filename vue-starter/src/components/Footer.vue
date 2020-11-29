<template>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">COMPANY-NAME</h5>
            <p class="grey-text text-lighten-4">{{ $t('company-tag-line') }}</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">{{ $t('links') }}</h5>
            <ul>
              <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}`">{{ $t('home') }}</router-link></li>
              <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/about`">{{ $t('about-us') }}</router-link></li>
              <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/contact-us`">{{ $t('contact-us') }}</router-link></li>
              <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/feedback`">{{ $t('feedback') }}</router-link></li>
              <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/covid-19`">{{ $t('covid-19') }}</router-link></li>
              <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/terms`">{{ $t('terms') }}</router-link></li>
              <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/cookie-policy`">{{ $t('cookie-policy') }}</router-link></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
            {{ $t('copyright-text') }}
            <a class="grey-text text-lighten-4 right" href="#!">{{ $t('language') }}</a>
        </div>
      </div>
    </footer>
</template>