<template>
  <div v-if="store.coaches != null">
    <section class="breadcrumbs-section bg_cover lazy entered loaded"
      data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded" style="
        background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
      ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="breadcrumbs-content text-center">
              <h1>Coaches</h1>
              <ul class="breadcrumbs-link">
                <li><a href="/">Home</a></li>
                <li class="active">Coaches</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="saas-featured-users py-5">
      <div class="container">
        <div class="search-filter mb-5">
          <form action="https://profilo.xyz/users">
            <div class="row align-items-center">
              <div class="col-lg-4">
                <div class="search-box">
                  <input type="text" class="form_control" placeholder="Search by first name, last name, username"
                    name="search" value="" />
                </div>
              </div>
              <div class="col-lg-4">
                <div class="search-box">
                  <input type="text" class="form_control" placeholder="Search by designation" name="designation"
                    value="" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="search-box">
                  <input type="text" class="form_control" placeholder="Search by city / country" name="location"
                    value="" />
                </div>
              </div>
              <div class="col-lg-1">
                <div class="search-box">
                  <button type="submit" class="main-btn">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12" v-for="item in coaches" :key="item.id">
            <div class="user-item mb-5">
              <div class="title">
                <img class="lazy entered loaded" src="https://profilo.xyz/assets/front/img/user/1677050633author-6.jpg" />
                <h5>{{ item.name }}</h5>
                <strong>{{ item.specialization }}</strong>
                <span>{{ item.current_employment }}</span>
              </div>
              <div class="user-button">
                <ul>
                  <li>
                    <router-link :to="{ name: 'view-coach-profile', params: { 'id': item.id } }" class="main-btn"><i
                        class="fas fa-eye"></i>Profile</router-link>
                  </li>
                  <li>
                    <router-link :to="{ name: 'book-coach', params: { 'id': item.id } }" class="main-btn"><i
                        class="fas fa-eye"></i>Book</router-link>
                  </li>
                </ul>
              </div>
              <div class="social-box">
                <ul class="social-link">
                  <li>
                    <a href="http://example.com/" class="facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="http://example.com/" class="facebook" target="_blank"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="http://example.com/" class="facebook" target="_blank"><i
                        class="fab fa-google-plus-g"></i></a>
                  </li>
                  <li>
                    <a href="http://example.com/" class="facebook" target="_blank"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="saas-pagination text-center d-flex justify-content-center">
              <nav>
                <ul class="pagination">
                  <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                  </li>

                  <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="https://profilo.xyz/users?page=2">2</a>
                  </li>

                  <li class="page-item">
                    <a class="page-link" href="https://profilo.xyz/users?page=2" rel="next" aria-label="Next »">›</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script setup>
import { onMounted, computed } from "vue";

import { useCoachStore } from "@/store/coach.js";

const store = useCoachStore();

const coaches = computed(() => {
  return store.coaches.filter((item) => {
    if (item.status == "Active") {
      return item;
    }
  });
});
onMounted(async () => {
  await store.getCoaches();
});
</script>
<style lang="">
</style>