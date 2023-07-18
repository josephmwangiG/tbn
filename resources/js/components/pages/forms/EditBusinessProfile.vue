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
            <form @submit.prevent="editCoachProfile">
              <div class="row">
                <div class="form-group col-lg-4 mt-2">
                  <span>Business/Company Name</span>
                  <el-input style="border: black" v-model="form.business_name" size="large"
                    placeholder="Business/Company Name" type="text" required="required"></el-input>
                  <span class="text-danger" v-if="errors.business_name">{{
                    errors.business_name[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4 mt-2">
                  <span>Phone Number</span>
                  <el-input style="border: black" v-model="form.phone_number" size="large" type="text"
                    placeholder="Phone Number" required="required"></el-input>
                  <span class="text-danger" v-if="errors.phone_number">{{
                    errors.phone_number[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-4 mt-2">
                  <span>Address/Location</span>
                  <el-input style="border: black" v-model="form.address" size="large" type="text"
                    placeholder="Address details"></el-input>
                  <span class="text-danger" v-if="errors.address">{{
                    errors.address[0]
                  }}</span>
                </div>
                <div class="form-group col-lg-4 mt-2">
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
                  <h5>Additional Business/Company Details.</h5>
                  <hr />
                </div>


                <div class="form-group col-lg-12">
                  <span>Website</span>
                  <el-input style="border: black" v-model="form.website" type="text" size="large" placeholder="Website" />
                  <span class="text-danger" v-if="errors.website">{{
                    errors.website[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Number of Employees</span>
                  <el-input type="number" style="border: black" v-model="form.number_of_employees" size="large"
                    placeholder="Number of Employees" />
                  <span class="text-danger" v-if="errors.number_of_employees">{{
                    errors.number_of_employees[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Years of Operation</span>
                  <el-input type="number" style="border: black" v-model="form.years_of_operation" size="large"
                    placeholder="Years of Operation" />
                  <span class="text-danger" v-if="errors.years_of_operation">{{
                    errors.years_of_operation[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Approximate Annual Revenue</span>
                  <el-input :formatter="removeletter" :parser="(value) => value.replace(/\$\s?|(,*)/g, '')"
                    style="border: black" v-model="revenue" size="large" placeholder="Approximate Annual Revenue" />
                  <span class="text-danger" v-if="errors.annual_revenue">{{
                    errors.annual_revenue[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-12">
                  <button type="submit" class="main-btn">Save</button>
                </div>
              </div>
            </form>
          </el-tab-pane>
          <el-tab-pane label="Owners" name="owners">
            <div class="d-flex justify-content-between mt-3">
              <h5>Business Owners</h5>

              <a :to="{ name: 'coach-profile' }" class="btn btn-outline-dark">
                <i class="ri-add-line"></i> Add New</a>
            </div>
            <form @submit.prevent="addCoachEducation">
              <div class="row mt-2">
                <div class="form-group col-lg-4">
                  <span>Full Names</span>
                  <el-input style="border: black" v-model="ownerForm.name" type="text" size="large" placeholder="Full Names"
                    required="" />
                </div>


                <div class="form-group col-lg-4">
                  <span>Owner Email</span>
                  <el-input style="border: black" v-model="ownerForm.email" size="large" type="email"
                    placeholder="Owner Email" />
                </div>


                <div class="form-group col-lg-4">
                  <span>Phone Number</span>
                  <el-input style="border: black" v-model="ownerForm.phone_number" size="large" placeholder="Phone Number" />
                </div>

                <div class="form-group col-lg-12">
                  <button type="submit" class="main-btn">Save</button>
                </div>
              </div>
            </form>
          </el-tab-pane>
          <el-tab-pane label="Description" name="description">
            <form @submit.prevent="editDescription">
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
import { ref } from "vue";
import { useAuthStore } from "@/store/auth.js";
import { ElNotification } from "element-plus";

const token = localStorage.getItem("token");
const store = useAuthStore();
let errors = ref({});
const activeName = ref("profile");
const addingOwner = ref(false);

let form = ref({
  id: "",
  business_name: "",
  email: "",
  password: "",
  address: "",
  number_of_employees: "",
  specialization: "",
  website: "",
  phone_number: "",
  description: "",
  annual_revenue: "",
  years_of_operation: "",
});

let ownerForm = ref({
  id: "",
  institution: "",
  program: "",
  start_date: "",
  completion_date: "",
  description: "",
  currently_enrolled: "",
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