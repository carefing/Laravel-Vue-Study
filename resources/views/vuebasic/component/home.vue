<template>
    <div>
        <h3>home</h3>
        <p>{{ msg }}</p>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                msg: this.$t('vuebasic.home')
            }
        }
    }
</script>