<template>
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Businesses List</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="https://profilo.xyz/admin/dashboard?language=en">
              <i class="ri-home-2-line bg-white"></i>
            </a>
          </li>
          <li class="separator">
            <i class="ri-arrow-right-s-line bg-white"></i>
          </li>
          <li class="nav-item">
            <a class="bg-white" href="#">Businesses List</a>
          </li>
        </ul>
      </div>
      <div class="row" v-if="store.businesses != null">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card-title">Businesses List</div>
                </div>
                <div class="col-lg-6 mt-2 mt-lg-0">
                  <!-- <button
                    class="btn btn-danger float-lg-right float-none btn-sm ml-2 mt-1"
                    data-href="https://profilo.xyz/admin/register/user/bulk-delete"
                  >
                    <i class="flaticon-interface-5"></i> Delete
                  </button> -->
                  <button
                    class="btn btn-primary float-lg-right float-none btn-sm ml-2 mt-1"
                    @click="createItem"
                    data-toggle="modal"
                    data-target="#addBusinessModal"
                  >
                    <i class="fas fa-plus"></i> Add Business
                  </button>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="table-responsive">
                    <table class="table table-striped mt-3" id="businessTable">
                      <thead>
                        <tr>
                          <!-- <th scope="col" class="pt-2">
                            <input
                              type="checkbox"
                              class=""
                              style="width: 16px"
                            />
                          </th> -->
                          <th scope="col">Business Name</th>
                          <th scope="col">Specialization</th>
                          <th scope="col">Employees</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Status</th>
                          <td scope="col">Action</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(item, index) in store.businesses">
                          <!-- <td>
                            <input
                              type="checkbox"
                              class="bulk-check"
                              style="width: 16px"
                            />
                          </td> -->
                          <td>{{ item.business_name }}</td>
                          <td>{{ item.specialization }}</td>
                          <td>{{ item.number_of_employees }}</td>
                          <td>{{ item.email }}</td>
                          <td>{{ item.phone_number }}</td>
                          <td>{{ item.status }}</td>
                          <td>
                            <div class="dropdown">
                              <button
                                class="btn btn-info btn-sm dropdown-toggle"
                                type="button"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                Actions
                              </button>
                              <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownMenuButton"
                              >
                                <button
                                  class="editbtn dropdown-item"
                                  data-toggle="modal"
                                  data-target="#addBusinessModal"
                                >
                                  Edit
                                </button>
                                <button
                                  class="editbtn dropdown-item"
                                  @click="
                                    itemID = item.id;
                                    accountAction = 'Approve';
                                  "
                                  data-toggle="modal"
                                  data-target="#approveUser"
                                  v-if="item.status == 'Pending'"
                                >
                                  Approve
                                </button>
                                <button
                                  class="editbtn dropdown-item"
                                  @click="
                                    itemID = item.id;
                                    accountAction = 'Deactivate';
                                  "
                                  data-toggle="modal"
                                  data-target="#approveUser"
                                  v-if="item.status == 'Active'"
                                >
                                  Deactivate
                                </button>
                                <button
                                  class="editbtn dropdown-item"
                                  @click="
                                    itemID = item.id;
                                    accountAction = 'Activate';
                                  "
                                  data-toggle="modal"
                                  data-target="#approveUser"
                                  v-if="item.status == 'Deactivated'"
                                >
                                  Activate
                                </button>
                                <button
                                  class="editbtn dropdown-item"
                                  data-toggle="modal"
                                  data-target="#mailModal"
                                  data-email="pefen68317@iucake.com"
                                >
                                  Edit
                                </button>
                                <button
                                  class="editbtn dropdown-item"
                                  data-toggle="modal"
                                  data-target="#mailModal"
                                  data-email="pefen68317@iucake.com"
                                >
                                  Delete
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <ApproveUser @confirmOption="confirmOption" :option="accountAction" />
      <AddBusiness
        :form="form"
        :key="formKey"
        :action="action"
        @newItem="newItem"
      />
      <ConfirmDelete :message="'Event'" @confirmOption="deleteItem" />
    </div>
  </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import AddBusiness from "./forms/AddBusiness.vue";
import ApproveUser from "./forms/ApproveUser.vue";
import DataTable from "datatables.net-vue3";
import DataTablesCore from "datatables.net";
import { useBusinessStore } from "@/store/business.js";
import { ElNotification } from "element-plus";
import ConfirmDelete from "../shared/ConfirmDelete.vue";

const store = useBusinessStore();
const itemID = ref(0);
const accountAction = ref("");

const form = ref({});
const action = ref("");
const formKey = ref(0);

const confirmOption = async (res) => {
  if (res && accountAction.value == "Approve") {
    let response = await store.approveAccount(
      itemID.value,
      accountAction.value == "Approve" ? "Active" : ""
    );
    if (response == true) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "Account Approved",
        duration: 2000,
      });
    }
  } else if ((res, accountAction.value == "Deactivate")) {
    let response = await store.approveAccount(
      itemID.value,
      accountAction.value == "Deactivate" ? "Deactivated" : ""
    );
    if (response == true) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "Account Approved",
        duration: 2000,
      });
    }
  } else if ((res, accountAction.value == "Activate")) {
    let response = await store.approveAccount(
      itemID.value,
      accountAction.value == "Activate" ? "Active" : ""
    );
    if (response == true) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "Account Approved",
        duration: 2000,
      });
    }
  }
};

const createItem = () => {
  action.value = "Add";
  formKey.value += 1;
  form.value = {
    business_name: "",
    email: "",
    password: "password",
    address: "",
    number_of_employees: "",
    specialization: "",
    website: "",
    phone_number: "",
    owners: [
      {
        name: "",
        email: "",
        phone_number: "",
      },
    ],
    description: "",
    annual_revenue: "",
    years_of_operation: "",
  };
};
const editItem = (item) => {
  action.value = "Edit";
  formKey.value += 1;
  form.value = {
    id: item.id,
    name: item.name,
    start_date: item.start_date,
    end_date: item.end_date,
    location: item.location,
    description: item.description,
    registration_deadline: item.registration_deadline,
  };
};

const deleteItem = async (option) => {
  if (option) {
    let response = await store.deleteCoaching(itemID.value);

    if (response.status == true) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "Event Deleted",
        duration: 2000,
      });

      $("#businessTable").DataTable();
    }
  }
};

const newItem = () => {
  $("#businessTable").DataTable();
};

onMounted(async () => {
  let response = await store.getBusinesses();
  $("#businessTable").DataTable();
});
</script>
<style scoped>
.main-header {
  height: 80px !important;
}
</style>    