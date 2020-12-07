<template>
    <footer class="page-footer">
      <div class="container">
          <div class="row">
            <div class="col s12 m8">
                <h5 class="white-text">COMPANY-NAME</h5>
                <p class="grey-text text-lighten-4">{{ $t('company-tag-line') }}</p>
            </div>
            <div class="col s12 m4">
                <FooterLinks/>
                <Locale/>
            </div>
          </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
            {{ $t('copyright-text') }}
        </div>
      </div>
    </footer>
</template>

<script>
    import Locale from './Locale.vue'
    import FooterLinks from './FooterLinks.vue'
    export default {
          name: 'Footer',
          components: {
            Locale,
            FooterLinks
          },
          data: () => ({

          }),
          provide(){

          },
          /* Component states */
          created() {

          },
          mounted () {

          },
          updated() {

          },
          destroyed() {

          }
        }
</script>