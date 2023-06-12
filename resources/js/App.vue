<template>
    <router-view>

    </router-view>
</template>
<script setup>
import { useRouter } from "vue-router"
import { onMounted } from "vue"
const router = useRouter()

onMounted(() => {
    if (router.currentRoute.value.name === "") {
        console.log(router.currentRoute.value.fullPath)
        router.push({ name: 'home' })
    }
})

</script>