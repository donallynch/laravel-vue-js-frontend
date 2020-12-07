<template>
    <div class="loading" v-if="start">
        Loading...
    </div>
</template>

<script>
    export default {
      props: ["start"]
    }
</script>

<style scoped>
.loading {
    color: #666666;
    font-style: italic;
}
</style>