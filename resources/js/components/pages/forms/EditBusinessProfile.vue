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

        <router-link :to="{ name: 'profile' }" class="main-btn">
          <i class="ri-user-line"></i> Profile</router-link
        >
      </div>
      <div class="update-profile mt-2">
        <el-tabs
          v-model="activeName"
          class="demo-tabs"
          @tab-click="handleClick"
        >
          <el-tab-pane label="Profile Details" name="profile">
            <div class="d-flex justify-content-between my-3">
              <h5>Profile Details</h5>
            </div>
            <form @submit.prevent="updateBusinessProfile">
              <div class="row">
                <div class="form-group col-lg-4 mt-2">
                  <span>Business/Company Name</span>
                  <el-input
                    style="border: black"
                    v-model="form.business_name"
                    size="large"
                    placeholder="Business/Company Name"
                    type="text"
                    required="required"
                  ></el-input>
                  <span class="text-danger" v-if="errors.business_name">{{
                    errors.business_name[0]
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

                <div class="col-12 my-2">
                  <h5>Additional Business/Company Details.</h5>
                  <hr />
                </div>

                <div class="form-group col-lg-12">
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

                <div class="form-group col-lg-4">
                  <span>Number of Employees</span>
                  <el-input
                    type="number"
                    style="border: black"
                    v-model="form.number_of_employees"
                    size="large"
                    placeholder="Number of Employees"
                  />
                  <span class="text-danger" v-if="errors.number_of_employees">{{
                    errors.number_of_employees[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Years of Operation</span>
                  <el-input
                    type="number"
                    style="border: black"
                    v-model="form.years_of_operation"
                    size="large"
                    placeholder="Years of Operation"
                  />
                  <span class="text-danger" v-if="errors.years_of_operation">{{
                    errors.years_of_operation[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-4">
                  <span>Approximate Annual Revenue</span>
                  <el-input
                    :formatter="removeletter"
                    :parser="(value) => value.replace(/\$\s?|(,*)/g, '')"
                    style="border: black"
                    v-model="form.annual_revenue"
                    size="large"
                    placeholder="Approximate Annual Revenue"
                  />
                  <span class="text-danger" v-if="errors.annual_revenue">{{
                    errors.annual_revenue[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-12">
                  <button type="submit" :disabled="loading" class="main-btn">
                    {{ loading ? "Processing..." : "Update Profile" }}
                  </button>
                </div>
              </div>
            </form>
          </el-tab-pane>
          <el-tab-pane label="Owners" name="owners">
            <div class="d-flex justify-content-between mt-3">
              <h5>Business Owners</h5>

              <button
                class="btn btn-outline-dark"
                type="button"
                @click="addingOwner = !addingOwner"
              >
                <i class="ri-add-line"></i> Add New
              </button>
            </div>
            <form @submit.prevent="addBusinessOwner" v-if="addingOwner">
              <div class="row mt-2">
                <div class="form-group col-lg-4">
                  <span>Full Names</span>
                  <el-input
                    style="border: black"
                    v-model="ownerForm.name"
                    type="text"
                    size="large"
                    placeholder="Full Names"
                    required=""
                  />
                  <span class="text-danger" v-if="errors.name">{{
                    errors.name[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-3">
                  <span>Owner Email</span>
                  <el-input
                    style="border: black"
                    v-model="ownerForm.email"
                    size="large"
                    type="email"
                    placeholder="Owner Email"
                  />
                  <span class="text-danger" v-if="errors.email">{{
                    errors.email[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-3">
                  <span>Phone Number</span>
                  <el-input
                    style="border: black"
                    v-model="ownerForm.phone_number"
                    size="large"
                    placeholder="Phone Number"
                  />
                  <span class="text-danger" v-if="errors.phone_number">{{
                    errors.phone_number[0]
                  }}</span>
                </div>

                <div class="form-group col-lg-2 text-right">
                  <button
                    type="submit"
                    class="main-btn mt-4"
                    :disabled="loading"
                  >
                    {{ loading ? "Processing..." : "Save" }}
                  </button>
                </div>
              </div>
            </form>
            <div class="owners mt-3">
              <div
                class="row"
                v-if="
                  businessStore.business != null &&
                  businessStore.business.owners.length > 0
                "
              >
                <table class="table">
                  <thead class="bg-light">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr
                      v-for="(item, index) in businessStore.business.owners"
                      :key="index"
                    >
                      <td>{{ item.name }}</td>
                      <td>{{ item.email }}</td>
                      <td>{{ item.phone_number }}</td>
                      <td>Action</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row mt-2" v-else>
                <p class="text-center my-5 col-12">
                  <strong>No owners records</strong>
                </p>
              </div>
            </div>
          </el-tab-pane>
          <el-tab-pane label="Description" name="description">
            <form @submit.prevent="updateBusinessProfile">
              <div class="row mt-2">
                <div class="col-lg-12 form-group">
                  <span>Description</span>
                  <el-input
                    style="border: black"
                    v-model="form.description"
                    type="textarea"
                    placeholder="Business Description"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <button type="submit" class="main-btn" :disabled="loading">
                    {{ loading ? "Processing..." : "Save" }}
                  </button>
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
import { onMounted, ref, computed } from "vue";
import { useRouter } from "vue-router";
import { useAuthStore } from "@/store/auth.js";
import { useBusinessStore } from "@/store/business.js";
import { ElNotification } from "element-plus";

const token = localStorage.getItem("token");
const store = useAuthStore();
const businessStore = useBusinessStore();
let errors = ref({});
const activeName = ref("profile");
let addingOwner = ref(false);
let loading = ref(false);

const revenue = ref("");

let form = ref({});

let ownerForm = ref({});

const addBusinessOwner = async () => {
  loading.value = true;
  let response = await businessStore.addBusinessOwner(ownerForm.value);

  if (response == true) {
    ElNotification({
      title: "Success",
      type: "success",
      message: "Record added",
      duration: 2000,
    });
    addingOwner.value = false;
    ownerForm.value = {};
  } else {
    errors.value = response.data.errors;
  }

  loading.value = false;
};

const updateBusinessProfile = async () => {
  loading.value = true;
  let response = await businessStore.updateBusinessProfile(form.value);

  if (response == true) {
    ElNotification({
      title: "Success",
      type: "success",
      message: "Profile details updated.",
      duration: 2000,
    });
  } else {
    errors.value = response.data.errors;
  }

  loading.value = false;
};

onMounted(async () => {
  if (store.user != null) {
    await businessStore.getBusiness(store.user.user.business_profile.id);
  } else {
    await store.getUser();
    businessStore.business = store.user.user.business_profile;
  }

  form.value = {
    id: businessStore.business.id,
    business_name: businessStore.business.business_name,
    address: businessStore.business.address,
    number_of_employees: businessStore.business.number_of_employees,
    specialization: businessStore.business.specialization,
    website: businessStore.business.website,
    phone_number: businessStore.business.phone_number,
    description: businessStore.business.description,
    annual_revenue: businessStore.business.annual_revenue,
    years_of_operation: businessStore.business.years_of_operation,
  };

  ownerForm.value = {
    id: "",
    business_id: businessStore.business.id,
    email: "",
    name: "",
    phone_number: "",
  };
});
</script>

<style></style>