<template>
    <div>
        <h3>about</h3>
        <p>{{ aboutMsg }}</p>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                aboutMsg: this.$t('vuebasic.about')
            }
        }
    }
</script>