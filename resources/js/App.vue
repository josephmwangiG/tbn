<template>
  <router-view> </router-view>
</template>
<script setup>
import { useAuthStore } from "@/store/auth.js";

const store = useAuthStore();

if (localStorage.getItem("token")) {
  store.getUser();
}
</script>