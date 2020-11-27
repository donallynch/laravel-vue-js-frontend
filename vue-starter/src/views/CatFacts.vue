<template>
    <div class="row">
        <div class="col-12" v-for="(item, index) in data"
            v-bind:item="item"
            :index="index"
            :key="item.id"
        >
            <div class="card">
                <div class="card-content">
                    <p class="card-title">{{ item.text }}</p>
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