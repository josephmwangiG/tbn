<template>
  <section class="breadcrumbs-section bg_cover lazy entered loaded"
    data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded" style="
      background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
    ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="breadcrumbs-content text-center">
            <h1>Edit Profile</h1>
            <ul class="breadcrumbs-link">
              <li><a href="/">Home</a></li>
              <li class="active">Edit Profile</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contacts-section mt-5" v-if="store.user != null">
    <div class="container">
      <div class="d-flex justify-content-between">
        <h3>Edit Profile</h3>

        <router-link :to="{ name: 'coach-profile' }" class="main-btn">
          <i class="ri-user-line"></i> Profile</router-link>
      </div>
      <div class="update-profile mt-2">
        <el-tabs v-model="activeName" class="demo-tabs" @tab-click="handleClick">
          <el-tab-pane label="Profile Details" name="profile">
            <div class="d-flex justify-content-between my-3">
              <h5>Profile Details</h5>
            </div>
            <form @submit.prevent="updateCoachProfile">

              <div class="row">
                <div class="form-group col-lg-3">
                  <span>Full Names</span>
                  <el-input style="border: black" v-model="form.name" size="large" placeholder="Full Names" type="text"
                    required="required"></el-input>
                  <span class="text-danger" v-if="errors.name">{{
                    errors.name[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-3">
                  <span>Phone Number</span>
                  <el-input style="border: black" v-model="form.phone_number" size="large" type="text"
                    placeholder="Phone Number" required="required"></el-input>
                  <span class="text-danger" v-if="errors.phone_number">{{
                    errors.phone_number[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-3">
                  <span>Address/Location</span>
                  <el-input style="border: black" v-model="form.address" size="large" type="text"
                    placeholder="Address details"></el-input>
                  <span class="text-danger" v-if="errors.address">{{
                    errors.address[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-3">
                  <span>Specialization</span>
                  <el-select filterable class="w-100" v-model="form.specialization" size="large" type="text"
                    placeholder="Address details">
                    <el-option value="Marketing">Marketing</el-option>
                  </el-select>
                  <span class="text-danger" v-if="errors.specialization">{{
                    errors.specialization[0]
                  }}</span>
                </div>

                <div class="col-12 my-2">
                  <h5>Additional Details.</h5>
                  <hr />
                </div>

                <div class="form-group col-lg-4">
                  <span>Years of Experience</span>
                  <el-input type="number" style="border: black" v-model="form.years_of_experience" size="large"
                    placeholder="Years of Experience" />
                  <span class="text-danger" v-if="errors.years_of_experience">{{
                    errors.years_of_experience[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-4">
                  <span>Highest Level of Education</span>
                  <el-select filterable class="w-100" v-model="form.highest_level_of_education" size="large" type="text"
                    placeholder="Highest Level of Education">
                    <el-option value="Marketing">Marketing</el-option>
                  </el-select>

                  <span class="text-danger" v-if="errors.highest_level_of_education">{{
                    errors.highest_level_of_education[0] }}</span>
                </div>
                <div class="form-group col-lg-4">
                  <span>Website</span>
                  <el-input style="border: black" v-model="form.website" type="text" size="large" placeholder="Website" />
                  <span class="text-danger" v-if="errors.website">{{
                    errors.website[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-6">
                  <span>Current Employment</span>
                  <el-input style="border: black" v-model="form.current_employment" type="text" size="large"
                    placeholder="Current Employment" />

                  <span class="text-danger" v-if="errors.current_employment">{{
                    errors.current_employment[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-6">
                  <span>Current Employer</span>
                  <el-input style="border: black" v-model="form.current_employer" type="text" size="large"
                    placeholder="Current Employer" />
                  <span class="text-danger" v-if="errors.current_employer">{{
                    errors.current_employer[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-12">
                  <button type="submit" class="main-btn">Update Profile</button>
                </div>
              </div>
            </form>
          </el-tab-pane>
          <el-tab-pane label="Education" name="second">
            <div class="d-flex justify-content-between mt-3">
              <h5>Education Details</h5>

              <a :to="{ name: 'coach-profile' }" class="btn btn-outline-dark">
                <i class="ri-add-line"></i> Add New</a>
            </div>
            <form @submit.prevent="addCoachEducation">
              <div class="row mt-2">
                <div class="form-group col-lg-4">
                  <span>Institution</span>
                  <el-input style="border: black" v-model="educationForm.institution" size="large"
                    placeholder="Institution" type="text" required="required"></el-input>
                  <span class="text-danger" v-if="errors.institution">{{
                    errors.institution[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Course/Program</span>
                  <el-input style="border: black" v-model="educationForm.program" size="large" type="text"
                    placeholder="Course/Program" required="required"></el-input>
                  <span class="text-danger" v-if="errors.program">{{
                    errors.program[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Certificate</span>
                  <el-select filterable class="w-100" v-model="educationForm.certificate" size="large" type="text"
                    placeholder="Certificate">
                    <el-option value="PhD">PhD</el-option>
                    <el-option value="Doctorate">Doctorate</el-option>
                    <el-option value="Bachelors">Bachelors</el-option>
                    <el-option value="Diploma">Diploma</el-option>
                    <el-option value="Certificate">Certificate</el-option>
                  </el-select>
                  <span class="text-danger" v-if="errors.certificate">{{
                    errors.certificate[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Start Date</span>
                  <el-input type="date" style="border: black" v-model="educationForm.start_date" size="large"
                    placeholder="Start Date" />
                  <span class="text-danger" v-if="errors.start_date">{{
                    errors.years_of_experience[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-4">
                  <span>Completion Date</span>
                  <el-input style="border: black" v-model="educationForm.completion_date" type="date" size="large"
                    placeholder="Completion Date" />
                  <span class="text-danger" v-if="errors.completion_date">{{
                    errors.completion_date[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-4">
                  <span> Are you currently enrolled here? </span>
                  <br />
                  <el-checkbox style="border: black" v-model="educationForm.currently_enrolled" type="textarea"
                    label="Yes" size="large"></el-checkbox>

                  <span class="text-danger" v-if="errors.currently_enrolled">{{
                    errors.currently_enrolled[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-12">
                  <span>Description</span>
                  <el-input style="border: black" v-model="educationForm.description" type="textarea" size="large"
                    placeholder="Description" />

                  <span class="text-danger" v-if="errors.description">{{
                    errors.description[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-12">
                  <button type="submit" class="main-btn">Save</button>
                </div>
              </div>
            </form>
          </el-tab-pane>
          <el-tab-pane label="Experience" name="third">
            <div class="d-flex justify-content-between mt-3">
              <h5>Work Experience</h5>

              <a :to="{ name: 'coach-profile' }" class="btn btn-outline-dark">
                <i class="ri-add-line"></i> Add New</a>
            </div>
            <form @submit.prevent="addCoachExperience">
              <div class="row mt-2">
                <div class="form-group col-lg-4">
                  <span>Employer</span>
                  <el-input style="border: black" v-model="workForm.employer" size="large" placeholder="Employer"
                    type="text" required="required"></el-input>
                  <span class="text-danger" v-if="errors.employer">{{
                    errors.employer[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Job Title</span>
                  <el-input style="border: black" v-model="workForm.job_title" size="large" type="text"
                    placeholder="Job Title" required="required"></el-input>
                  <span class="text-danger" v-if="errors.job_title">{{
                    errors.job_title[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Start Date</span>
                  <el-input type="date" style="border: black" v-model="workForm.start_date" size="large"
                    placeholder="Start Date" />
                  <span class="text-danger" v-if="errors.start_date">{{
                    errors.years_of_experience[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-4">
                  <span>End Date</span>
                  <el-input style="border: black" v-model="workForm.end_date" type="date" size="large"
                    placeholder="End Date" />
                  <span class="text-danger" v-if="errors.end_date">{{
                    errors.end_date[0]
                  }}</span>
                </div>
                <div class="form-group col-md-4">
                  <span> Are you currently working here? </span>
                  <br />
                  <el-checkbox style="border: black" v-model="workForm.current_job" type="textarea" label="Yes"
                    size="large"></el-checkbox>

                  <span class="text-danger" v-if="errors.current_job">{{
                    errors.current_job[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-12">
                  <span>Description</span>
                  <el-input style="border: black" v-model="workForm.description" type="textarea" size="large"
                    placeholder="Description" />

                  <span class="text-danger" v-if="errors.description">{{
                    errors.description[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-12">
                  <button type="submit" class="main-btn">Save</button>
                </div>
              </div>
            </form>
          </el-tab-pane>
          <el-tab-pane label="Description" name="description">
            <form @submit.prevent="updateCoachProfile">
              <div class="row mt-2">
                <div class="col-lg-12 form-group">
                  <span>Description</span>
                  <el-input style="border: black" v-model="form.description" type="textarea"
                    placeholder="Business Description" />
                </div>

                <div class="form-group col-lg-12">
                  <button type="submit" class="main-btn">Save</button>
                </div>
              </div>
            </form>
          </el-tab-pane>
        </el-tabs>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { useAuthStore } from "@/store/auth.js";
import { useCoachStore } from "@/store/coach.js";
import { ElNotification } from "element-plus";

const token = localStorage.getItem("token");
const store = useAuthStore();
const coachStore = useCoachStore();
let errors = ref({});
const activeName = ref("profile");
const addingEducation = ref(false);
const addingWork = ref(false);

let form = ref({});

let educationForm = ref({
  id: "",
  institution: "",
  program: "",
  start_date: "",
  completion_date: "",
  description: "",
  currently_enrolled: "",
});


let workForm = ref({
  id: "",
  employer: "",
  job_title: "",
  start_date: "",
  end_date: "",
  description: "",
  current_job: "",
});

const updateCoachProfile = async () => {
  let response = await coachStore.updateCoachProfile(form.value);

  if (response == true) {
    ElNotification({
      title: "Success",
      type: "success",
      message: "Profile Updated.",
      duration: 2000,
    });
  } else {
    errors.value = response.data.errors;
  }
};


const addCoachEducation = async () => {
  let response = await coachStore.addCoachEducation(educationForm.value);

  if (response == true) {
    ElNotification({
      title: "Success",
      type: "success",
      message: "Record Added.",
      duration: 2000,
    });
  } else {
    errors.value = response.data.errors;
  }
};

const addCoachExperience = async () => {
  let response = await coachStore.addCoachExperience(workForm.value);

  if (response == true) {
    ElNotification({
      title: "Success",
      type: "success",
      message: "Record Added.",
      duration: 2000,
    });
  } else {
    errors.value = response.data.errors;
  }
};

onMounted(async () => {

  await coachStore.getCoachProfile(3);
  form.value = {
    id: coachStore.coach.id,
    name: coachStore.coach.name,
    address: coachStore.coach.address,
    specialization: coachStore.coach.specialization,
    current_employment: coachStore.coach.current_employment,
    current_employer: coachStore.coach.current_employer,
    website: coachStore.coach.website,
    phone_number: coachStore.coach.phone_number,
    description: coachStore.coach.description,
    highest_level_of_education: coachStore.coach.highest_level_of_education,
    years_of_experience: coachStore.coach.years_of_experience,
  };
});
</script>

<style></style>