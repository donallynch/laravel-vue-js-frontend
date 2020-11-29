<template>
    <div>
        <h3>{{ $t('home') }}</h3>
        <p>{{ $t('apis') }}</p>
        <ul class="left">
            <li>
                <router-link :to="`/${$i18n.locale}/cat-facts`">{{ $t('cat-facts') }}</router-link>
            </li>
            <li>
                <router-link :to="`/${$i18n.locale}/beers`">{{ $t('beers') }}</router-link>
            </li>
        </ul>
        <div class="clear-both"></div>
    </div>
</template>

<style scoped>
    .clear-both {
        clear: both;
    }
</style>