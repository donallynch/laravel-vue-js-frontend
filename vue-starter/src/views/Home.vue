<template>
    <div>
        <h3>{{ $t('home') }}</h3>
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="../assets/img/cats.jpg" alt="$t('cat-facts')" />
                        <span class="card-title">{{ $t('cat-facts') }}</span>
                    </div>
                    <div class="card-content">
                        <p v-html="$t('cat-facts-info')"></p>
                    </div>
                    <div class="card-action">
                        <router-link :to="`/${$i18n.locale}/cat-facts`">{{ $t('check-it-out') }}</router-link>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="../assets/img/beers.jpg" alt="$t('check-it-out')" />
                        <span class="card-title">{{ $t('beers') }}</span>
                    </div>
                    <div class="card-content">
                        <p v-html="$t('beers-info')"></p>
                    </div>
                    <div class="card-action">
                        <router-link :to="`/${$i18n.locale}/beers`">{{ $t('check-it-out') }}</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import M from 'materialize-css';

    export default {
        name: "Home",
        inject: ["loading"],
        /* Component states */
        created() {
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.dropdown-trigger'),
                    instances = M.Dropdown.init(elems, {});
                console.log(instances);
            });

            /* Hide loader */
            this.loading.val = false;
        },
        mounted() {

        },
        updated() {

        },
        destroyed() {

        }
    }
</script>

<style scoped>
    .clear-both {
        clear: both;
    }
</style>
