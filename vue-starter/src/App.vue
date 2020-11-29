<template>
    <div>
        <Navbar/>
        <div class="container">
            <router-view/>
        </div>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from './components/Navbar'
    import Footer from './components/Footer'

    import '../../node_modules/materialize-css/dist/css/materialize.min.css'
    import '../../node_modules/materialize-css/dist/js/materialize.min.js'

    export default {
      name: 'App',
      components: {
        Navbar,
        Footer
      }
    }
</script>

<style scoped></style>
