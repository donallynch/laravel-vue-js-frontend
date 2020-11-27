<template>
    <div class="row">
        <div class="col-12" v-for="(post, index) in data"
            v-bind:item="post"
            :index="index"
            :key="post.id"
        >
            <div class="card">
                <div class="card-content">
                    <p class="card-title">{{ post.text }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CatFactsService from '../CatFactsService'
    const catFactsService = new CatFactsService();

    export default {
        name: "Home",
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