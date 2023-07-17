<template>
  <div v-if="store.trainingEvents != null">
    <section
      class="breadcrumbs-section bg_cover lazy entered loaded"
      data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg"
      data-ll-status="loaded"
      style="
        background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
      "
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="breadcrumbs-content text-center">
              <h1>Training Events</h1>
              <ul class="breadcrumbs-link">
                <li><a href="/">Home</a></li>
                <li class="active">Training Events</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== End Saas-banner section ======-->

    <!--====== Start saas-features section ======-->
    <section class="saas-features mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title-one section-title-two">
              <span class="span">Upcoming Events</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-lg-4 col-md-6 col-sm-12"
            v-for="(item, index) in store.trainingEvents"
          >
            <div class="features-item mb-40">
              <img
                class="lazy entered loaded"
                src="https://profilo.xyz/assets/front/img/user/1677050633author-6.jpg"
              />
              <h4>{{ item.name }}</h4>
              <p>{{ item.description.substring(0, 200) }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== End saas-features section ======-->

    <!--====== Start saas-featured-users section ======-->
    <section class="saas-featured-users py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title-one section-title-two mb-5">
              <span class="span">Featured Coaches</span>
              <h2>Take a look at the featured coaches</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-lg-4 col-md-6 col-sm-12"
            v-for="item in coaches"
            :key="item.id"
          >
            <div class="user-item mb-5">
              <div class="title">
                <img
                  class="lazy entered loaded"
                  src="https://profilo.xyz/assets/front/img/user/1677050633author-6.jpg"
                />
                <h5>{{ item.name }}</h5>
                <strong>{{ item.specialization }}</strong>
                <span>{{ item.current_employment }}</span>
              </div>
              <div class="user-button">
                <ul>
                  <li>
                    <router-link :to="{ name: 'profile' }" class="main-btn"
                      ><i class="fas fa-eye"></i>Profile</router-link
                    >
                  </li>
                  <li>
                    <a
                      href="https://profilo.xyz/user/follow/80"
                      class="main-btn"
                      ><i class="fal fa-user-plus"></i>Book
                    </a>
                  </li>
                </ul>
              </div>
              <div class="social-box">
                <ul class="social-link">
                  <li>
                    <a
                      href="http://example.com/"
                      class="facebook"
                      target="_blank"
                      ><i class="fab fa-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="http://example.com/"
                      class="facebook"
                      target="_blank"
                      ><i class="fab fa-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="http://example.com/"
                      class="facebook"
                      target="_blank"
                      ><i class="fab fa-google-plus-g"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      href="http://example.com/"
                      class="facebook"
                      target="_blank"
                      ><i class="fab fa-linkedin"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script setup>
import { onMounted, computed } from "vue";

import { useTrainingEventStore } from "@/store/event.js";

const store = useTrainingEventStore();

const coaches = computed(() => {
  return store.coaches.filter((item) => {
    if (item.status == "Active") {
      return item;
    }
  });
});
onMounted(async () => {
  await store.getTrainingEvents();
});
</script>
<style lang="">
</style>