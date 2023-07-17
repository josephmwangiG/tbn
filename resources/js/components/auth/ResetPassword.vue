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
            <h1>Reset Password</h1>
            <ul class="breadcrumbs-link">
              <li><a href="/">Home</a></li>
              <li class="active">Reset Password</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="user-form-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="user-form">
            <div class="title">
              <h3>Reset your password</h3>
            </div>
            <form @submit.prevent="login">
              <div class="form_group">
                <span>Email Address*</span>
                <el-input size="large" v-model="form.email" type="email" />
              </div>

              <div class="form_group d-sm-flex justify-content-between">
                <div>
                  <router-link :to="{ name: 'login' }"
                    >Go back to Login</router-link
                  >
                </div>
                <div>
                  <span
                    >Don't have an account?
                    <router-link
                      class="btn-link"
                      :to="{ name: 'business-join' }"
                      >Click Here</router-link
                    >
                    to Signup</span
                  >
                </div>
              </div>
              <div class="form_group">
                <button class="main-btn">LOG IN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
import { ref } from "vue";
const form = ref({ email: "", password: "" });
</script>
<style lang="">
</style>