<template>
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
            <h1>Profile</h1>
            <ul class="breadcrumbs-link">
              <li><a href="/">Home</a></li>
              <li class="active">Profile</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="profile" v-if="businessStore.business != null">
    <!--====== About Section Start ======-->
    <section class="about-section mt-5" id="about">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 col-sm-9">
            <div class="block-img text-center pr-0 pr-lg-5 md-gap-50">
              <img
                data-src="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a0ff1573.png"
                class="animate-float-bob-y lazy entered loaded"
                alt="About Image"
                data-ll-status="loaded"
                src="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a0ff1573.png"
              />
            </div>
          </div>
          <div class="col-lg-6 col-md-10">
            <div class="about-content">
              <div class="common-heading mb-30">
                <span class="tagline">{{
                  businessStore.business.business_name
                }}</span>
                <h2 class="title">About Your Business</h2>
              </div>
              <p class="mb-30">
                {{ businessStore.business.description }}
              </p>
              <router-link
                :to="{ name: 'edit-business-profile' }"
                class="template-btn"
              >
                Edit Profile</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== End Text Block ======-->

    <!--====== Service Section Start ======-->
    <section class="service-section section-gap bg-offwhite-color" id="service">
      <div class="container">
        <div class="common-heading text-center mb-20">
          <span class="tagline">Service</span>
          <h2 class="title">Services I Provide</h2>
        </div>

        <div class="row service-boxes justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="service-box-one mt-30">
              <a
                class="service-thumb"
                href="https://profilo.xyz/Rabiot/service/ecommerce-website/64"
              >
                <img
                  data-src="https://profilo.xyz/assets/front/img/user/services/1627283854.jpg"
                  class="lazy entered loaded"
                  alt=""
                  data-ll-status="loaded"
                  src="https://profilo.xyz/assets/front/img/user/services/1627283854.jpg"
                />
              </a>
              <h4 class="title">
                <a
                  href="https://profilo.xyz/Rabiot/service/ecommerce-website/64"
                  >Ecommerce Website</a
                >
              </h4>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suff
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="service-box-one mt-30">
              <a
                class="service-thumb"
                href="https://profilo.xyz/Rabiot/service/logo-design/65"
              >
                <img
                  data-src="https://profilo.xyz/assets/front/img/user/services/1627283873.jpg"
                  class="lazy entered loaded"
                  alt=""
                  data-ll-status="loaded"
                  src="https://profilo.xyz/assets/front/img/user/services/1627283873.jpg"
                />
              </a>
              <h4 class="title">
                <a href="https://profilo.xyz/Rabiot/service/logo-design/65"
                  >Logo Design</a
                >
              </h4>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suff
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="service-box-one mt-30">
              <a
                class="service-thumb"
                href="https://profilo.xyz/Rabiot/service/html-templates/66"
              >
                <img
                  data-src="https://profilo.xyz/assets/front/img/user/services/1627283902.jpg"
                  class="lazy entered loaded"
                  alt=""
                  data-ll-status="loaded"
                  src="https://profilo.xyz/assets/front/img/user/services/1627283902.jpg"
                />
              </a>
              <h4 class="title">
                <a href="https://profilo.xyz/Rabiot/service/html-templates/66"
                  >HTML Templates</a
                >
              </h4>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suff
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== Service Section End ======-->

    <!--====== Counter Section Start ======-->
    <section
      class="counter-section lazy entered loaded"
      data-bg="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a94d25ab.jpg"
      data-ll-status="loaded"
      style="
        background-image: url('https://profilo.xyz/assets/front/img/user/home_settings/60fe5a94d25ab.jpg');
      "
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-box mb-40">
              <div class="counter-wrap">
                <span class="count">12</span>
                <span class="suffix">+</span>
              </div>
              <h6 class="title">Years of Experience</h6>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-box mb-40">
              <div class="counter-wrap">
                <span class="count">250</span>
                <span class="suffix">+</span>
              </div>
              <h6 class="title">Satisfied Customes</h6>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-box mb-40">
              <div class="counter-wrap">
                <span class="count">800</span>
                <span class="suffix">+</span>
              </div>
              <h6 class="title">Projects Completed</h6>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="counter-box mb-40">
              <div class="counter-wrap">
                <span class="count">70</span>
                <span class="suffix">+</span>
              </div>
              <h6 class="title">Countries</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script setup>
import { useRoute, useRouter } from "vue-router";
import { onMounted } from "vue";
import { useBusinessStore } from "@/store/business.js";
import { useAuthStore } from "@/store/auth.js";

const store = useAuthStore();

const route = useRoute();
const router = useRouter();
const businessStore = useBusinessStore();

const token = localStorage.getItem("token");

onMounted(async () => {
  if (route.name == "view-coach-profile") {
    await businessStore.viewCoachProfile(route.params.id);
  } else {
    if (localStorage.getItem("token")) {
      let response = await businessStore.getBusinessProfile(
        store.user.user.business_profile.id
      );
      if (response !== true) {
        router.push({ name: "login" });
      }
    } else {
      router.push({ name: "login" });
    }
  }
});
</script>
<style lang="">
</style>