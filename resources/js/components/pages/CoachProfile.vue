<template>
  <section class="breadcrumbs-section bg_cover lazy entered loaded"
    data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded" style="
      background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
    ">
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
  <!--====== About Section Start ======-->
  <section class="about-section mt-5" id="about">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-sm-9">
          <div class="block-img text-center pr-0 pr-lg-5 md-gap-50">
            <img data-src="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a0ff1573.png"
              class="animate-float-bob-y lazy entered loaded" alt="About Image" data-ll-status="loaded"
              src="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a0ff1573.png" />
          </div>
        </div>
        <div class="col-lg-6 col-md-10">
          <div class="about-content">
            <div class="common-heading mb-30">
              <span class="tagline">Joseph Mwangi</span>
              <h2 class="title">About Me</h2>
            </div>
            <p class="mb-30">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
              est id leo luctus gravida a in ipsum. Vivamus vel molestie nisi.
              Aliquam maximus maximus velit, id scelerisque urna elementum nec.
              Aenean laoreet bibendum tellus sed tincidunt. Proin commodo
              blandit gravida. Etiam sollicitudin aliquet vehicula. Morbi ante
              libero, porttitor ut sodales non, gravida at lacus.

            </p>
            <router-link :to="{ name: 'edit-coach-profile' }" class="template-btn"
              v-if="route.name != 'view-coach-profile'">
              Edit Profile</router-link>
            <router-link :to="{ name: 'book-coach' }" class="template-btn" v-if="route.name == 'view-coach-profile'">
              Book</router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== End Text Block ======-->

  <!--====== Skill Section Start ======-->
  <section class="skill-section section-gap" id="skill">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 order-lg-last col-sm-9">
          <div class="block-img pl-0 pl-xl-5 md-gap-50">
            <img data-src="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a0ff1a9c.png"
              class="animate-float-bob-y lazy entered loaded" alt="Image" data-ll-status="loaded"
              src="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a0ff1a9c.png" />
          </div>
        </div>
        <div class="col-lg-6 order-lg-first col-md-10">
          <div class="skill-content">
            <div class="common-heading mb-30">
              <span class="tagline">Skills</span>
              <h2 class="title">Technical Skills</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                est id leo luctus gravida a in ipsum. Vivamus vel molestie nisi.
                Aliquam maximus maximus velit, id scelerisque urna elementum
                nec. Aenean laoreet bibendum tellus sed tincidunt.
              </p>
            </div>
            <div class="progress-bars">
              <div class="single-progress-bar color-1" data-percentage="80">
                <h6 class="title">HTML5</h6>
                <div class="progress-bar-wrap">
                  <div class="progress-line">
                    <div class="line" style="background-color: rgb(75, 56, 105); width: 80%"></div>
                  </div>
                  <div class="counter-wrap">
                    <span class="count">80</span>
                    <span class="suffix">%</span>
                  </div>
                </div>
              </div>
              <div class="single-progress-bar color-1" data-percentage="70">
                <h6 class="title">CSS3</h6>
                <div class="progress-bar-wrap">
                  <div class="progress-line">
                    <div class="line" style="background-color: rgb(20, 39, 155); width: 70%"></div>
                  </div>
                  <div class="counter-wrap">
                    <span class="count">70</span>
                    <span class="suffix">%</span>
                  </div>
                </div>
              </div>
              <div class="single-progress-bar color-1" data-percentage="90">
                <h6 class="title">Laravel</h6>
                <div class="progress-bar-wrap">
                  <div class="progress-line">
                    <div class="line" style="background-color: rgb(224, 36, 1); width: 90%"></div>
                  </div>
                  <div class="counter-wrap">
                    <span class="count">90</span>
                    <span class="suffix">%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== Skill Section End ======-->

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
            <a class="service-thumb" href="https://profilo.xyz/Rabiot/service/ecommerce-website/64">
              <img data-src="https://profilo.xyz/assets/front/img/user/services/1627283854.jpg"
                class="lazy entered loaded" alt="" data-ll-status="loaded"
                src="https://profilo.xyz/assets/front/img/user/services/1627283854.jpg" />
            </a>
            <h4 class="title">
              <a href="https://profilo.xyz/Rabiot/service/ecommerce-website/64">Ecommerce Website</a>
            </h4>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suff
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="service-box-one mt-30">
            <a class="service-thumb" href="https://profilo.xyz/Rabiot/service/logo-design/65">
              <img data-src="https://profilo.xyz/assets/front/img/user/services/1627283873.jpg"
                class="lazy entered loaded" alt="" data-ll-status="loaded"
                src="https://profilo.xyz/assets/front/img/user/services/1627283873.jpg" />
            </a>
            <h4 class="title">
              <a href="https://profilo.xyz/Rabiot/service/logo-design/65">Logo Design</a>
            </h4>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suff
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="service-box-one mt-30">
            <a class="service-thumb" href="https://profilo.xyz/Rabiot/service/html-templates/66">
              <img data-src="https://profilo.xyz/assets/front/img/user/services/1627283902.jpg"
                class="lazy entered loaded" alt="" data-ll-status="loaded"
                src="https://profilo.xyz/assets/front/img/user/services/1627283902.jpg" />
            </a>
            <h4 class="title">
              <a href="https://profilo.xyz/Rabiot/service/html-templates/66">HTML Templates</a>
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

  <!--====== Experience Section Start ======-->
  <section class="experience-section section-gap" id="experience">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-9">
          <div class="common-heading text-center mb-50">
            <span class="tagline">Experience</span>
            <h2 class="title">Job and Educational Experiences</h2>
          </div>
        </div>
      </div>
      <div class="experience-wrapper boxed-wrapper">
        <div class="row justify-content-between">
          <div class="col-lg-6 md-gap-80">
            <h4 class="experience-wrapper-title">
              <span><img class="lazy entered loaded"
                  data-src="https://profilo.xyz/assets/front/img/profile1/education.png" alt="" data-ll-status="loaded"
                  src="https://profilo.xyz/assets/front/img/profile1/education.png" /></span>
              Education
            </h4>
            <div class="experience-list">
              <div class="single-experience">
                <h5 class="title">Bachelor of Science</h5>
                <span class="duration"> Jan 18, 2013 - Nov 28, 2017 </span>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in some
                  form, by injected humour, or randomised
                </p>
              </div>
              <div class="single-experience">
                <h5 class="title">Higher Secondary School Certificate</h5>
                <span class="duration"> Jan 1, 2011 - Dec 14, 2012 </span>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s
                </p>
              </div>
              <div class="single-experience">
                <h5 class="title">Secondary School Certificate</h5>
                <span class="duration"> Jan 26, 2001 - Dec 28, 2010 </span>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h4 class="experience-wrapper-title">
              <span><img class="lazy entered loaded" data-src="https://profilo.xyz/assets/front/img/profile1/job.png"
                  alt="" data-ll-status="loaded" src="https://profilo.xyz/assets/front/img/profile1/job.png" /></span>
              Job
            </h4>
            <div class="experience-list">
              <div class="single-experience">
                <h5 class="title">Laravel Developer [ABC Group]</h5>
                <span class="duration"> Jul 1, 2021 - Present </span>
                <p>
                  Contrary to popular belief, Lorem Ipsum is not simply random
                  text. It has roots in a piece of classical Latin literature
                  from 45 BC, making it over 2000 years old.
                </p>
              </div>
              <div class="single-experience">
                <h5 class="title">Full-stack Developer [XYZsoft LTD]</h5>
                <span class="duration"> Feb 26, 2020 - Jun 9, 2021 </span>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in some
                  form, by injected humour, or randomised words
                </p>
              </div>
              <div class="single-experience">
                <h5 class="title">Frontend Designer [MNO Tech]</h5>
                <span class="duration"> Feb 26, 2020 - Mar 9, 2020 </span>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== Experience Section End ======-->

  <!--====== Counter Section Start ======-->
  <section class="counter-section lazy entered loaded"
    data-bg="https://profilo.xyz/assets/front/img/user/home_settings/60fe5a94d25ab.jpg" data-ll-status="loaded" style="
      background-image: url('https://profilo.xyz/assets/front/img/user/home_settings/60fe5a94d25ab.jpg');
    ">
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
</template>
<script setup>
import { useRoute } from 'vue-router'

const route = useRoute()

console.log(route.name);

</script>
<style lang="">
</style>