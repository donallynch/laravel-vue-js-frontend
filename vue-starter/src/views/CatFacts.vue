<template>
    <div class="row">
        <div class="col-12">
            <h3>{{ $t('cat-facts') }}</h3>
        </div>
        <div class="col-12" v-for="(item, index) in data"
            v-bind:item="item"
            :index="index"
            :key="item.id"
        >
            <div class="item card">
                <div class="card-content">

                    <!-- TYPE -->
                    <div class="type">
                      <div v-if="typeof item.type != 'undefined' ">
                        {{ $t('cat-fact') }}
                      </div>
                    </div>

                    <!-- FACT -->
                    <p class="card-title">{{ item.text }}</p>

                    <!-- UPVOTES -->
                    <p v-if="item.upvotes > 0" class="upvotes">{{ $t('x-upvotes', {'count': item.upvotes}) }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CatFactsService from '../CatFactsService'
    const catFactsService = new CatFactsService();

    export default {
        name: "CatFacts",
        inject: ["loading"],
        data(){
            return {
                data: []
            };
        },
        /* Component states */
        created(){

        /* Hide loader */
        this.loading.val = true;

        catFactsService.getAllCatFacts()
            .then(res => {
                this.data = res.data.all;
                console.log('CAT FACTS');
                console.log(this.data);

                /* Hide loader */
                this.loading.val = false;
            })
            .catch(err => console.log(err));
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
.item .type {
    color: #666666;
}
.item .upvotes {
    color: #999999;
}
</style>