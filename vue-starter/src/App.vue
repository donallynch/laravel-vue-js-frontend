<template>
    <div>
        <Navbar/>
        <Spinner :start="loading.val" />
        <div class="container">
            <router-view/>
        </div>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from './components/Navbar'
    import Footer from './components/Footer'
    import Spinner from '@/components/Spinner.vue'
    import M from 'materialize-css';

    export default {
      name: 'App',
      components: {
        Navbar,
        Footer,
        Spinner
      },
      data: () => ({
        loading: {
            val: false
        }
      }),
      provide(){
        return {
            loading: this.loading
        }
      },
      /* Component states */
      created() {

      },
      mounted () {
          M.AutoInit()
      },
      updated() {

      },
      destroyed() {

      }
    }
</script>

<style scoped></style>
