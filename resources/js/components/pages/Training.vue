<template>
  <div v-if="store.trainingEvents != null">
    <section class="breadcrumbs-section bg_cover lazy entered loaded"
      data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded" style="
        background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
      ">
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
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 col-sm-12" v-for="(item, index) in store.trainingEvents">
            <div class=" mb-5 border p-3 rounded">
             
              <h4 class="my-1">{{ item.name }}</h4>
              <span>
                <small> <i class="ri-time-fill"></i> <strong>{{ item.start_date }}</strong> | {{ item.location }}</small>
              </span>

              <p class="my-2">{{ item.description.substring(0, 130) }}</p>
              <router-link :to="{ name: 'view-training', params: { id: item.id } }" class="btn btn-outline-dark"> More
                Details</router-link>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--====== Start saas-featured-users section ======-->
    <section class="saas-featured-users pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title-one section-title-two mb-5">
              <span class="span">Take a look at the featured coaches</span>
            </div>
          </div>
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
                    <router-link :to="{ name: 'profile' }" class="main-btn"><i
                        class="fas fa-eye"></i>Profile</router-link>
                  </li>
                  <li>
                    <a href="https://profilo.xyz/user/follow/80" class="main-btn"><i class="fal fa-user-plus"></i>Book
                    </a>
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