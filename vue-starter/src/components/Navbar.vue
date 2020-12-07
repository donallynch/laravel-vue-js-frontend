<template>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <router-link to="/" class="brand-logo">Logo</router-link>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <router-link :to="`/${$i18n.locale}`">{{ $t('home') }}</router-link>
                    </li>
                    <li>
                        <router-link :to="`/${$i18n.locale}/cat-facts`">{{ $t('cat-facts') }}</router-link>
                    </li>
                    <li>
                        <router-link :to="`/${$i18n.locale}/beers`">{{ $t('beers') }}</router-link>
                    </li>
                </ul>
          </div>
        </div>
    </nav>
</template>