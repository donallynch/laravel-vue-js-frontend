<template>
    <div class="row">
        <div class="col-12">
            <h3>{{ $t('beers') }}</h3>
        </div>
        <div class="item col-12" v-for="(item, index) in data"
            v-bind:item="item.id"
            :index="index"
            :key="item.id"
        >
            <div class="card">
                <div class="card-content">

                    <!-- BEER NAME -->
                    <p class="title card-title">{{ item.nameDisplay }}</p>

                    <!-- LABEL / IMAGE -->
                    <div class="label">
                      <div v-if="typeof item.labels != 'undefined' ">
                        <img :src="item.labels.icon">
                      </div>
                    </div>

                    <!-- GLASS NAME -->
                    <div class="glass">
                      <div v-if="typeof item.glass != 'undefined' ">
                        {{ $t('glass', {'value': item.glass.name}) }}
                      </div>
                    </div>

                    <!-- STYLE NAME -->
                    <div class="style-name">
                      <div v-if="typeof item.style != 'undefined' ">
                        <div>{{ $t('style', {'value': item.style.shortName}) }}</div>
                        <div>{{ $t('category', {'value': item.style.category.name}) }}</div>
                        <div v-if="typeof item.style.category.description != 'undefined' ">{{ item.style.category.description }}</div>
                      </div>
                    </div>

                    <!-- IS ORGANIC -->
                    <div class="is-organic">
                      <div v-if="item.isOrganic == 'Y' ">
                        {{ $t('is-organic-yes') }}
                      </div>
                    </div>

                    <!-- DESCRIPTION -->
                    <span class="desc">{{ item.description }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import M from 'materialize-css';
    import BeersService from '../BeersService'
    const beersService = new BeersService();

    export default {
        name: "Beers",
        inject: ["loading"],
        data(){
            return {
                data: []
            };
        },
        methods: {
            getBeer(param) {
                console.log('did something param: ' + param);
                //this.$refs.name.style.display = "none";
                console.log(this.$refs);
            }
        },
        /* Component states */
        created(){
            /* Show loader */
            this.loading.val = true;

            beersService.getAllBeers()
                .then(res => {
                    let data = JSON.parse(res.data.payload);
                    this.data = data.data;
                    console.log('BEERS');
                    console.log(typeof this.data);
                    console.log(this.data);

                    /* Hide loader */
                    this.loading.val = false;
                })
                .catch(err => console.log(err));
        },
        mounted() {

        },
        updated() {
            /* Sync dropdowns */
            console.log('>>> SYNC DROPDOWNS');
            var elems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(elems, {});
            console.log('SYNC DONE');
        },
        destroyed() {

        }
    }
</script>

<style scoped>
.item .title {
    color: #666666;
}

.item .desc {
    color: #999999;
}
</style>