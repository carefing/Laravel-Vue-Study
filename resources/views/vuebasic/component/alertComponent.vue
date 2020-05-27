<template>
    <div :class="classtype" role="alert">
        <b>{{ bold }}</b>{{ msg }}
    </div>
</template>

<script>
    export default {
        props: ['classtype', 'bold', 'msg'],
        mounted: function() {
            console.log('Component mounted.')
        }
    }
</script>