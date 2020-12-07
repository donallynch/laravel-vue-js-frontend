<template>
    <div>
        <h5 class="white-text">{{ $t('links') }}</h5>
        <ul>
          <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}`">{{ $t('home') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/about`">{{ $t('about-us') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/contact-us`">{{ $t('contact-us') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/covid-19`">{{ $t('covid-19') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/terms`">{{ $t('terms') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="`/${$i18n.locale}/cookie-policy`">{{ $t('cookie-policy') }}</router-link></li>
        </ul>
    </div>
</template>