<template>
    <div class="mt10">
        <h5 class="white-text">{{ $t('language') }}</h5>
        <ul>
          <li><router-link class="grey-text text-lighten-3" :to="{ name: $route.name, params: { lang: 'en' }}">{{ $t('english') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="{ name: $route.name, params: { lang: 'es' }}">{{ $t('spanish') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="{ name: $route.name, params: { lang: 'fr' }}">{{ $t('french') }}</router-link></li>
          <li><router-link class="grey-text text-lighten-3" :to="{ name: $route.name, params: { lang: 'de' }}">{{ $t('german') }}</router-link></li>
        </ul>
    </div>
</template>