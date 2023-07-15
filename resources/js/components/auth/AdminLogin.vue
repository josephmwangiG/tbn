<template>
  <section class="user-form-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 mt-5">
          <div class="user-form">
            <div class="title">
              <h3>Admin</h3>
            </div>
            <div class="title">
              <h4>Login to your account</h4>
            </div>
            <div class="alert alert-danger" v-if="incorrectCredential">
              <span>Incorrect credentials</span>
            </div>
            <form @submit.prevent="login">
              <div class="form_group">
                <span>Email Address*</span>
                <el-input placeholder="Enter Email" size="large" required v-model="form.email" type="email" />
                <span class="text-danger" v-if="errors.email">{{
                  errors.email[0]
                }}</span>
              </div>
              <div class="form_group">
                <span>Password *</span>
                <el-input size="large" placeholder="Enter Your Password" v-model="form.password" required
                  type="password" />
                <span class="text-danger" v-if="errors.password">{{
                  errors.password[0]
                }}</span>
              </div>

              <div class="form_group d-sm-flex justify-content-between">
                <div>
                  <router-link :to="{ name: 'reset-password' }">Lost your password?</router-link>
                </div>
                <div>
                  <span>Don't have an account?
                    <router-link class="btn-link" :to="{ name: 'business-join' }">Click Here</router-link>
                    to Signup</span>
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
import { useAuthStore } from "@/store/auth.js";
import { ElNotification } from "element-plus";
import { useRouter } from "vue-router";

const store = useAuthStore();
const router = useRouter();

const form = ref({ email: "", password: "" });
const errors = ref({});
const incorrectCredential = ref(false);

const login = async () => {
  let response = await store.login(form.value);
  if (response.status == true) {
    if (response.message != null) {
      incorrectCredential.value = true;
      return;
    }

    ElNotification({
      title: "Success",
      type: "success",
      message: "You are now logged in.",
      duration: 2000,
    });

    incorrectCredential.value = false;
    localStorage.setItem("token", response.token);
    console.log(router.options.history.state.back)
    if (router.options.history.state.back == "/" || router.options.history.state.back == null) {
      router.push({ name: "dashboard" });
    } else {
      router.push(router.options.history.state.back);
    }
  } else {
    errors.value = response.data.errors;
  }
};
</script>
<style lang="">
</style>