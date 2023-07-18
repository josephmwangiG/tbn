<template>
  <section class="breadcrumbs-section bg_cover lazy entered loaded"
    data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded" style="
      background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
    ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="breadcrumbs-content text-center">
            <h1>Book Coach</h1>
            <ul class="breadcrumbs-link">
              <li><a href="/">Home</a></li>
              <li class="active">Book Coach</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contacts-section mt-5" v-if="store.user != null">
    <div class="container">
      <div class="d-flex justify-content-between">
        <h3>Book Coach</h3>

        <router-link :to="{ name: 'view-coach-profile' }" class="main-btn">
          <i class="ri-user-line"></i> Profile</router-link>
      </div>
      <div class="update-profile mt-2">
        <form @submit.prevent="editCoachProfile">
          <div class="row">
            <div class="form-group col-lg-6">
              <span>How you would like the coach to assist you?</span>
              <el-input style="border: black" v-model="form.reason" size="large" type="text"
                placeholder="Reason for booking"></el-input>
              <span class="text-danger" v-if="errors.reason">{{
                errors.reason[0]
              }}</span>
            </div>
            <div class="form-group col-lg-6">
              <span>Expected Start Date</span>
              <el-date-picker class="w-100" style="border: black" v-model="form.start_date" size="large" type="date"
                placeholder="Start date"></el-date-picker>
              <span class="text-danger" v-if="errors.start_date">{{
                errors.start_date[0]
              }}</span>
            </div>
            <div class="form-group col-lg-6">
              <span>Duration/Number of Sessions</span>
              <el-input class="w-100" style="border: black" v-model="form.duration" size="large" type="text"
                placeholder="I.e One time, One Month e.t.c"></el-input>
              <span class="text-danger" v-if="errors.duration">{{
                errors.duration[0]
              }}</span>
            </div>

            <div class="form-group col-lg-6">
              <span>Meeting Preference</span>
              <el-select filterable class="w-100" v-model="form.meeting_preference" size="large" type="text"
                placeholder="Meeting Preference">
                <el-option value="Virtual Meeating">Virtual Meeating</el-option>
                <el-option value="Physical Meeting">Physical Meeting</el-option>
              </el-select>
              <span class="text-danger" v-if="errors.meeting_preference">{{
                errors.meeting_preference[0]
              }}</span>
            </div>

            <div class="col-lg-12 form-group">
              <span>Your message (optional)</span>
              <el-input style="border: black" v-model="form.message" type="textarea" placeholder="Message" />
            </div>

            <div class="form-group col-lg-12">
              <button type="submit" class="main-btn">Book</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";
import { useAuthStore } from "@/store/auth.js";
import { ElNotification } from "element-plus";

const token = localStorage.getItem("token");
const store = useAuthStore();
let errors = ref({});
const activeName = ref("profile");
const addingEducation = ref(false);
const addingWork = ref(false);

let form = ref({
  coach_id: "",
  business_id: "",
  reason: "",
  message: "",
  start_date: "",
  duration: "",
  meeting_preference: "",
});

const editCoachProfile = async () => {
  let response = await store.editCoachProfile(form.value);

  if (response == true) {
    router.push({ name: "account-created" });
    // ElMessageBox.alert('Your account was created', 'Account Created', {
    //   confirmButtonText: 'OK',
    //   callback: (action) => {
    //     router.push({})
    //   }
    // })
  } else {
    errors.value = response.data.errors;
  }
};
</script>

<style></style>