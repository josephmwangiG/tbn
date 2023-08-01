<template>
  <div>
    <Header />

    <router-view></router-view>

    <Footer />
  </div>
</template>
<script setup>
import "./../../static/main.js";
import { useRouter } from "vue-router";
import { onMounted } from "vue";
import { useAuthStore } from "@/store/auth.js";
import { ElNotification } from "element-plus";

import { useRoute } from "vue-router";
import axios from "axios";

const token = localStorage.getItem("token");

const store = useAuthStore();
const router = useRouter();

onMounted(async () => {
  if (router.currentRoute.value.fullPath == "/") {
    router.push({ name: "home" });
  }
});
</script>
<style lang="">
</style>