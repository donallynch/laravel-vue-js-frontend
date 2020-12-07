<template>
    <div>
        <h3 v-html="$t('about-us')"></h3>
        <p v-html="$t('find-us-text')"></p>
        <img src="../assets/img/find-us-map.png">
        <p v-html="$t('work-with-us-text')"></p>
        <img src="../assets/img/join-us.png" alt="Join us" />
        <img src="../assets/img/tea-and-coffee.jpg" alt="Tea and coffee" />
        <img src="../assets/img/face-masks.jpg" alt="Face masks" />
        <p v-html="$t('we-deliver-text')"></p>
        <p v-html="$t('opening-hours-text')"></p>
        <p v-html="$t('get-in-touch-text')"></p>
        <p v-html="$t('the-team-text')"></p>
    </div>
</template>