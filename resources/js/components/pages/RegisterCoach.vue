<template>
  <div>
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
              <h1>Join Us</h1>
              <ul class="breadcrumbs-link">
                <li><a href="/">Home</a></li>
                <li class="active">Join Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts-section mt-5">
      <div class="container">
        <h3>
          Fill the form below to join Transformational Business Network as a
          Coach
        </h3>
        <form @submit.prevent="addCoach">
          <div class="row mt-5">
            <div class="form-group col-lg-4 mt-2">
              <span>Full Names</span>
              <el-input
                style="border: black"
                v-model="form.name"
                size="large"
                placeholder="Full Names"
                type="text"
                required="required"
              ></el-input>
              <span class="text-danger" v-if="errors.name">{{
                errors.name[0]
              }}</span>
            </div>
            <div class="form-group col-lg-4 mt-2">
              <span>Email Address*</span>
              <el-input
                style="border: black"
                v-model="form.email"
                size="large"
                placeholder="Email Address"
                type="email"
                required="required"
              ></el-input>
              <span class="text-danger" v-if="errors.email">{{
                errors.email[0]
              }}</span>
            </div>
            <div class="form-group col-lg-4 mt-2">
              <span>Password*</span>
              <el-input
                style="border: black"
                v-model="form.password"
                size="large"
                placeholder="Password"
                type="password"
                required="required"
              ></el-input>
              <span class="text-danger" v-if="errors.password">{{
                errors.password[0]
              }}</span>
            </div>

            <div class="form-group col-lg-4 mt-2">
              <span>Phone Number</span>
              <el-input
                style="border: black"
                v-model="form.phone_number"
                size="large"
                type="text"
                placeholder="Phone Number"
                required="required"
              ></el-input>
              <span class="text-danger" v-if="errors.phone_number">{{
                errors.phone_number[0]
              }}</span>
            </div>
            <div class="form-group col-lg-4 mt-2">
              <span>Address/Location</span>
              <el-input
                style="border: black"
                v-model="form.address"
                size="large"
                type="text"
                placeholder="Address details"
              ></el-input>
              <span class="text-danger" v-if="errors.address">{{
                errors.address[0]
              }}</span>
            </div>
            <div class="form-group col-lg-4 mt-2">
              <span>Specialization</span>
              <el-select
                filterable
                class="w-100"
                v-model="form.specialization"
                size="large"
                type="text"
                placeholder="Address details"
              >
                <el-option value="Marketing">Marketing</el-option>
              </el-select>
              <span class="text-danger" v-if="errors.specialization">{{
                errors.specialization[0]
              }}</span>
            </div>

            <div class="col-12 my-5">
              <h5>Additional Details.</h5>
              <hr />
            </div>

            <div class="form-group col-lg-4">
              <span>Years of Experience</span>
              <el-input
                type="number"
                style="border: black"
                v-model="form.years_of_experience"
                size="large"
                placeholder="Years of Experience"
              />
              <span class="text-danger" v-if="errors.years_of_experience">{{
                errors.years_of_experience[0]
              }}</span>
            </div>
            <div class="form-group col-lg-4">
              <span>Highest Level of Education</span>
              <el-select
                filterable
                class="w-100"
                v-model="form.highest_level_of_education"
                size="large"
                type="text"
                placeholder="Highest Level of Education"
              >
                <el-option value="Marketing">Marketing</el-option>
              </el-select>

              <span
                class="text-danger"
                v-if="errors.highest_level_of_education"
                >{{ errors.highest_level_of_education[0] }}</span
              >
            </div>
            <div class="form-group col-lg-4">
              <span>Website</span>
              <el-input
                style="border: black"
                v-model="form.website"
                type="text"
                size="large"
                placeholder="Website"
              />
              <span class="text-danger" v-if="errors.website">{{
                errors.website[0]
              }}</span>
            </div>
            <div class="form-group col-lg-6">
              <span>Current Employment</span>
              <el-input
                style="border: black"
                v-model="form.current_employment"
                type="text"
                size="large"
                placeholder="Current Employment"
              />

              <span class="text-danger" v-if="errors.current_employment">{{
                errors.current_employment[0]
              }}</span>
            </div>
            <div class="form-group col-lg-6">
              <span>Current Employer</span>
              <el-input
                style="border: black"
                v-model="form.current_employer"
                type="text"
                size="large"
                placeholder="Current Employer"
              />
              <span class="text-danger" v-if="errors.current_employer">{{
                errors.current_employer[0]
              }}</span>
            </div>

            <div class="form-group col-lg-12">
              <span>Description</span>
              <el-input
                style="border: black"
                v-model="form.description"
                type="textarea"
                placeholder="Business Description"
              />
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="main-btn">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</template>
<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";
import { useCoachStore } from "@/store/coach.js";
import { ElMessage, ElMessageBox } from "element-plus";

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