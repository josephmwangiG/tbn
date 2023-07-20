<template>
  <!--====== Start Header ======-->
  <header class="header-area header-area-v1">
    <div class="header-navigation">
      <div
        class="nav-container d-flex align-items-center justify-content-between breakpoint-on"
      >
        <!-- site logo -->
        <div class="brand_logo">
          <router-link :to="{ name: 'home' }"
            ><img
              style="height: 80px"
              src="https://i0.wp.com/tbnetworkafrica.org/wp-content/uploads/2022/11/logo@2x.png?w=445&ssl=1"
              class="img-fluid"
              alt=""
          /></router-link>
        </div>
        <div class="nav-menu">
          <!-- Navbar Close Icon -->
          <div class="navbar-close">
            <div class="cross-wrap">
              <span class="top"></span><span class="bottom"></span>
            </div>
          </div>
          <div class="mobile-logo">
            <router-link to="#"
              ><img
                style="height: 80px"
                src="https://i0.wp.com/tbnetworkafrica.org/wp-content/uploads/2022/11/logo@2x.png?w=445&ssl=1"
                class="img-fluid"
                alt=""
            /></router-link>
          </div>
          <!-- nav-menu -->
          <nav class="main-menu">
            <ul>
              <li class="menu-item">
                <router-link :to="{ name: 'home' }">Home</router-link>
              </li>
              <li class="menu-item">
                <router-link :to="{ name: 'coaches' }">Coaches</router-link>
              </li>
              <li class="menu-item">
                <router-link :to="{ name: 'about' }">About Us</router-link>
              </li>
              <li class="menu-item">
                <router-link :to="{ name: 'training' }"
                  >Training Events</router-link
                >
              </li>
              <li class="menu-item">
                <router-link to="#"
                  >More <i class="ri-arrow-down-s-line"></i
                ></router-link>
                <ul class="sub-menu">
                  <li v-if="token == null">
                    <router-link :to="{ name: 'coach-join' }"
                      >Join as a Coach</router-link
                    >
                  </li>
                </ul>
                <span class="dd-trigger"
                  ><i class="ri-arrow-down-s-line"></i
                ></span>
              </li>
              <li class="menu-item">
                <router-link :to="{ name: 'contacts' }">Contact</router-link>
              </li>
              <li class="menu-item d-xl-none d-block" v-if="store.user == null">
                <router-link :to="{ name: 'login' }">Login</router-link>
              </li>
              <li class="menu-item d-xl-none d-block" v-else>
                <router-link
                  :to="{ name: 'profile' }"
                  v-if="store.user.user.user_type == 'Business'"
                  >Profile</router-link
                >
                <router-link
                  :to="{ name: 'coach-profile' }"
                  v-if="store.user.user.user_type == 'Coach'"
                  >Profile</router-link
                >
                <a href="#" @click="logout">Logout</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="nav-push-item-container">
          <!-- nav push item -->
          <div class="nav-push-item d-none d-xl-block" style="display: none">
            <div class="navbar-btn d-flex justify-content-between">
              <router-link
                :to="{ name: 'login' }"
                class="main-btn"
                v-if="store.user == null"
                ><i class="fal fa-sign-in-alt"></i>Login</router-link
              >
              <router-link
                :to="{ name: 'profile' }"
                class="main-btn"
                v-if="
                  store.user != null && store.user.user.user_type == 'Business'
                "
              >
                <i class="ri-user-line"></i> Profile</router-link
              >
              <router-link
                :to="{ name: 'coach-profile' }"
                class="main-btn"
                v-if="
                  store.user != null && store.user.user.user_type == 'Coach'
                "
              >
                <i class="ri-user-line"></i> Profile</router-link
              >
              <a
                href="#"
                class="main-btn bg-danger ml-2"
                @click="logout"
                v-if="store.user != null"
                ><i class="ri-power-line"></i>Logout</a
              >
            </div>
          </div>

          <!-- Navbar Toggler -->
          <div class="navbar-toggler">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
<script setup>
import { useAuthStore } from "@/store/auth.js";
import { ElNotification } from "element-plus";

import { useRoute } from "vue-router";
import axios from "axios";

const token = localStorage.getItem("token");

const store = useAuthStore();

const router = useRoute();

const logout = async () => {
  const headers = {
    headers: { Authorization: "Bearer " + localStorage.getItem("token") },
  };
  try {
    let response = await axios.post("logout", null, headers);
    if (response.status == 200) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "You have logged out.",
        duration: 2000,
      });
      localStorage.clear();
      location.href = "/";
    }
  } catch (e) {}
};
</script>
<style>
.dd-trigger .fas.fa-angle-down {
  display: none !important;
}
</style>
