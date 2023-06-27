<template>
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Coaching Events</h4>
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
            <a class="bg-white" href="#">Coaching Events</a>
          </li>
        </ul>
      </div>
      <div class="card" v-if="store.coachings != null">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-6">
              <div class="card-title">Coaching Events</div>
            </div>
            <div class="col-lg-6 mt-2 mt-lg-0">
              <button class="btn btn-danger float-lg-right float-none btn-sm ml-2 mt-1"
                data-href="https://profilo.xyz/admin/register/user/bulk-delete">
                <i class="flaticon-interface-5"></i> Delete
              </button>
              <button class="btn btn-primary float-lg-right float-none btn-sm ml-2 mt-1" @click="createItem"
                data-toggle="modal" data-target="#coachingModal">
                <i class="fas fa-plus"></i> Add Event
              </button>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped mt-3" id="coachingTable">
              <thead>
                <tr>
                  <th scope="col" class="pt-2">
                    <input type="checkbox" class="" style="width:16px">
                  </th>
                  <th scope="col">Event Name</th>
                  <th scope="col">Location</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">End Date</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Attendees</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(item, index) in store.coachings">
                  <td>
                    <input type="checkbox" class="bulk-check" style="width:16px">
                  </td>
                  <td>{{ item.name }}</td>
                  <td>{{ item.location }}</td>
                  <td>{{ item.start_date }}</td>
                  <td>{{ item.end_date }}</td>
                  <td>{{ item.duration }}</td>
                  <td>{{ '10' }}</td>

                  <td>
                    <div class="dropdown">
                      <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <button class="editbtn dropdown-item" @click="editItem(item)" data-toggle="modal"
                          data-target="#coachingModal">Edit</button>
                        <button class="editbtn dropdown-item" data-toggle="modal"
                          data-target="#deleteItem">Delete</button>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <ConfirmDelete :message="'Event'" @confirmOption="deleteItem" />
      <Coaching :form="form" :key="formKey" :action="action" @newItem="newItem" />
    </div>
  </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import Coaching from "./forms/Coaching.vue";
import DataTable from "datatables.net-vue3";
import DataTablesCore from "datatables.net";
import { useCoachingStore } from "@/store/coaching.js";
import ConfirmDelete from "../shared/ConfirmDelete.vue";

const store = useCoachingStore();
const form = ref({});
const action = ref("");
const formKey = ref(0);
const itemID = ref(0)

const createItem = () => {
  action.value = "Add";
  formKey.value += 1;
  form.value = {
    name: "",
    start_date: "",
    end_date: "",
    location: "",
    description: "",
    registration_deadline: "",
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
    let response = await store.deleteCoaching(
      itemID.value
    );

    if (response.status == true) {
      ElNotification({
        title: "Success",
        type: "success",
        message: "Event Deleted",
        duration: 2000,
      });

      $("#trainingEventTable").DataTable()
    }
  }
};

const newItem = () => {
  $("#coachingTable").DataTable()
}

onMounted(async () => {
  let response = await store.getCoachings();
  $("#coachingTable").DataTable();
});
</script>
<style scoped>
.main-header {
  height: 80px !important;
}
</style>    