<template>
    <div>

        <Header />

        <router-view></router-view>

        <Footer />

    </div>
</template>
<script setup>
import "./../../static/main.js"
import { useRouter } from "vue-router"
import { onMounted } from "vue"
const router = useRouter()

onMounted(() => {
    if (router.currentRoute.value.fullPath == "/") {
        router.push({ name: 'home' })
    }
})

</script>
<style lang="">
    
</style>