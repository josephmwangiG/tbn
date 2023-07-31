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
            <h1>Login</h1>
            <ul class="breadcrumbs-link">
              <li><a href="/">Home</a></li>
              <li class="active">Login</li>
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
              <h3>Login to your account</h3>
            </div>
            <div class="alert alert-danger" v-if="incorrectCredential">
              <span>{{ message }}</span>
            </div>
            <form @submit.prevent="login">
              <div class="form_group">
                <span>Email Address*</span>
                <el-input
                  size="large"
                  required
                  v-model="form.email"
                  type="email"
                />
                <span class="text-danger" v-if="errors.email">{{
                  errors.email[0]
                }}</span>
              </div>
              <div class="form_group">
                <span>Password *</span>
                <el-input
                  size="large"
                  v-model="form.password"
                  required
                  type="password"
                />
                <span class="text-danger" v-if="errors.password">{{
                  errors.password[0]
                }}</span>
              </div>

              <div class="form_group d-sm-flex justify-content-between">
                <div>
                  <router-link :to="{ name: 'reset-password' }"
                    >Lost your password?</router-link
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
                <button :disabled="loading" class="main-btn">
                  {{ loading ? "Processing..." : "LOG IN" }}
                </button>
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
const loading = ref(false);
const message = ref("");

const login = async () => {
  loading.value = true;
  let response = await store.login(form.value);
  if (response.status == true) {
    if (response.message != null) {
      incorrectCredential.value = true;
      message.value = response.message;
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
    if (
      router.options.history.state.back == "/" ||
      router.options.history.state.back == null
    ) {
      router.push({ name: "home" });
    } else {
      router.push(router.options.history.state.back);
    }
  } else {
    errors.value = response.data.errors;
  }

  loading.value = false;
};
</script>
<style lang="">
</style>