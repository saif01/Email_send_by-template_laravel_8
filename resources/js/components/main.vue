<template>
    <div>

        <div>
            <router-link :to="{name:'home'}" >Home</router-link>
            <router-link :to="{name:'test'}" >Test</router-link>
        </div>
    
        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>
            
    </div>
</template>


<script>
  
    export default {


        created() {
            this.$Progress.start();
            console.log('Main component loaded')
            this.$Progress.finish();
        },

    }

</script>

