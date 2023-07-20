<template>
  <router-view> </router-view>
</template>
<script setup>
import { useAuthStore } from "@/store/auth.js";
import { onMounted } from "vue";

const store = useAuthStore();

onMounted(async () => {
  if (localStorage.getItem("token")) {
    let response = await store.getUser();
    if (response != true) {
      localStorage.clear();
    }
  }
});
</script>