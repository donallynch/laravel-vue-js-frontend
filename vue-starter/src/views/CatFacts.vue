<template>
    <div class="row">
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
                        {{ item.type.charAt(0).toUpperCase() + item.type.slice(1) }} fact
                      </div>
                    </div>

                    <!-- FACT -->
                    <p class="card-title">{{ item.text }}</p>

                    <!-- UPVOTES -->
                    <p v-if="item.upvotes > 0" class="upvotes">{{ item.upvotes }} upvotes</p>
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
        data(){
            return {
                data: []
            };
        },
        created(){
            catFactsService.getAllCatFacts()
                .then(res => {
                    this.data = res.data.all;
                    console.log('CAT FACTS');
                    console.log(this.data);
                })
                .catch(err => console.log(err));
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