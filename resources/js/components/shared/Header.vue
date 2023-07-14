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
                <router-link :to="{ name: 'training' }">Training</router-link>
              </li>
              <li class="menu-item menu-item-has-children">
                <router-link to="#">More</router-link>
                <ul class="sub-menu">
                  <li>
                    <router-link :to="{ name: 'about' }">About Us</router-link>
                  </li>
                  <li>
                    <router-link :to="{ name: 'home' }"
                      >Terms &amp; Conditions</router-link
                    >
                  </li>
                </ul>
                <span class="dd-trigger"
                  ><i class="fas fa-angle-down"></i
                ></span>
              </li>
              <li class="menu-item">
                <router-link :to="{ name: 'contacts' }">Contact</router-link>
              </li>
              <li class="menu-item d-xl-none d-block" v-if="store.user == null">
                <router-link :to="{ name: 'login' }">Login</router-link>
              </li>
              <li class="menu-item d-xl-none d-block" v-else>
                <router-link :to="{ name: 'login' }">Profile</router-link>
              </li>
            </ul>
          </nav>
        </div>

        <div class="nav-push-item-container">
          <!-- nav push item -->
          <div
            class="nav-push-item d-none d-xl-block"
            style="display: none"
            v-if="store.user == null"
          >
            <div class="navbar-btn">
              <router-link :to="{ name: 'login' }" class="main-btn"
                ><i class="fal fa-sign-in-alt"></i>Login</router-link
              >
            </div>
          </div>
          <div
            class="nav-push-item d-none d-xl-block"
            style="display: none"
            v-else
          >
            <div class="navbar-btn">
              <router-link :to="{ name: 'login' }" class="main-btn"
                ><i class="fal fa-sign-in-alt"></i>Profile</router-link
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

const store = useAuthStore();
</script>
