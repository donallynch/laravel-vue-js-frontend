<template>
    <div class="item row">
        <div class="col-12">
            <h3>Beers</h3>
        </div>
        <div class="col-12" v-for="(item, index) in data"
            v-bind:item="item"
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
                        Glass: {{ item.glass.name }}
                      </div>
                    </div>

                    <!-- STYLE NAME -->
                    <div class="style-name">
                      <div v-if="typeof item.style != 'undefined' ">
                        <div>Style: {{ item.style.shortName }}</div>
                        <div>Category: {{ item.style.category.name }}</div>
                        <div v-if="typeof item.style.category.description != 'undefined' ">{{ item.style.category.description }}</div>
                      </div>
                    </div>

                    <!-- IS ORGANIC -->
                    <div class="is-organic">
                      <div v-if="item.isOrganic == 'Y' ">
                        Is organic: Yes
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
    import BeersService from '../BeersService'
    const beersService = new BeersService();

    export default {
        name: "Beers",
        data(){
            return {
                data: []
            };
        },
        created(){
            beersService.getAllBeers()
                .then(res => {
                    let data = JSON.parse(res.data.payload);
                    this.data = data.data;
                    console.log('BEERS');
                    console.log(typeof this.data);
                    console.log(this.data);
                })
                .catch(err => console.log(err));
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