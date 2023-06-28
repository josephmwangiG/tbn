<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="addBusinessModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="addBusinessModalTitle"
    style="display: none"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            {{ action }} Business
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body row">
          <div class="form-group col-lg-4">
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
          <div class="form-group col-lg-4">
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
          <div class="form-group col-lg-4 collapse">
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

          <div class="form-group col-lg-4">
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
          <div class="form-group col-lg-4">
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
          <div class="form-group col-lg-4">
            <span>Specialization</span>
            <el-input
              class="w-100"
              v-model="form.specialization"
              size="large"
              type="text"
              placeholder="Address details"
            >
            </el-input>
            <span class="text-danger" v-if="errors.specialization">{{
              errors.specialization[0]
            }}</span>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
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
          </div>

          <div class="col-12">
            <h5>Additional Business/Company Details.</h5>
            <hr />
          </div>

          <div class="col-lg-4">
            <span>Number of Employees</span>
            <div class="form-group">
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
          </div>
          <div class="col-lg-4">
            <div class="form-group">
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
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <span>Approximate Annual Revenue</span>
              <el-input
                :formatter="removeletter"
                :parser="(value) => value.replace(/\$\s?|(,*)/g, '')"
                style="border: black"
                v-model="revenue"
                size="large"
                placeholder="Approximate Annual Revenue"
              />
              <span class="text-danger" v-if="errors.annual_revenue">{{
                errors.annual_revenue[0]
              }}</span>
            </div>
          </div>

          <div class="col-12">
            <div class="d-flex justify-content-between my-3">
              <h5>Business Owners</h5>
              <i
                @click="addOwner"
                style="font-size: 30px"
                class="ri-add-circle-line"
              ></i>
            </div>
            <div class="row" v-for="(item, index) in form.owners" :key="index">
              <div class="col-lg-4">
                <span>Full Names</span>
                <div class="form-group">
                  <el-input
                    style="border: black"
                    v-model="item.name"
                    type="text"
                    size="large"
                    placeholder="Full Names"
                    required=""
                  />
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <span>Owner Email</span>
                  <el-input
                    style="border: black"
                    v-model="item.email"
                    size="large"
                    type="email"
                    placeholder="Owner Email"
                  />
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <span>Phone Number</span>
                  <el-input
                    style="border: black"
                    v-model="item.phone_number"
                    size="large"
                    placeholder="Phone Number"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="form-group">
              <span>Description</span>
              <el-input
                style="border: black"
                v-model="form.description"
                type="textarea"
                placeholder="Business Description"
              />
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <button
            id="closeBusinessBtn"
            data-dismiss="modal"
            type="button"
            class="submitBtn btn btn-sm btn-dark"
          >
            Cancel
          </button>
          <button
            id=""
            @click="submitForm"
            data-form="ajaxForm"
            type="button"
            class="submitBtn btn btn-primary"
          >
            {{ action }} Business
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import { ElNotification } from "element-plus";
import { useBusinessStore } from "@/store/business.js";

const store = useBusinessStore();

const props = defineProps({
  form: Object,
  action: String,
});

const removeletter = (input) => {
  input = input.replace(/[^0-9]/g, "");
  props.form.annual_revenue = input;
  return `${input}`.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};

const addOwner = async () => {
  props.form.owners.push({
    name: "",
    email: "",
    phone_number: "",
  });
};

const emits = defineEmits(["newItem"]);

const errors = ref({});
const revenue = ref("");

const submitForm = async () => {
  if (props.action == "Add") {
    let response = await store.addBusinesses(props.form);

    if (response == true) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "Business Added",
        duration: 2000,
      });

      document.getElementById("closeBusinessBtn").click();
      emits("newItem");
    } else {
      errors.value = response.data.errors;
    }
  } else {
    let response = await store.updateBusinesses(props.form);
    if (response == true) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "Business Updated",
        duration: 2000,
      });

      document.getElementById("closeCoachingBtn").click();
    } else {
      errors.value = response.data.errors;
    }
  }
};
</script>
<style lang="">
</style>