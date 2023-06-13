<template>
  <div>
    <section class="breadcrumbs-section bg_cover lazy entered loaded"
      data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded" style="
        background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
      ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="breadcrumbs-content text-center">
              <h1>Account Created</h1>
              <ul class="breadcrumbs-link">
                <li><a href="https://profilo.xyz">Home</a></li>
                <li class="active">Account Created</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts-section mt-5">
      <div class="container  text-center">
        <h3>
          Thank you for signing up!
        </h3>
        <div class="row my-5">
          <div class="col-lg-6 offset-lg-3">
            <p>
              <br>
              Please note that your account will be reviewed and approved before you can fully access our platform.
              <br>
              <br>
              You will receive a notification via email once your account has been approved.
              If you have any questions or need assistance, please feel free to contact us. We are
              here to help you.
              <br>
              <br>
            </p>
            <div class="form-group">
              <router-link :to="{ name: 'home' }"><button type="submit" class="main-btn">Go Back to
                  Home</button></router-link>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";
import { useCoachStore } from "@/store/coach.js";
import { ElMessage, ElMessageBox } from 'element-plus'

const store = useCoachStore();
const router = useRouter();

let revenue = ref("");
let errors = ref({});
let accountCreated = ref(false);

let form = ref({
  name: "",
  email: "",
  address: "",
  password: "",
  specialization: "",
  current_employment: "",
  current_employer: "",
  website: "",
  phone_number: "",
  description: "",
  highest_level_of_education: "",
  years_of_experience: "",
});

const addCoach = async () => {
  let response = await store.addCoach(form.value);


  if (response == true) {
    router.push({ name: "account-created" })
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