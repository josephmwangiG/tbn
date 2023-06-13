<template>
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">
                    Registered Users
                </h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="https://profilo.xyz/admin/dashboard?language=en">
                            <i class="ri-home-2-line  bg-white"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="ri-arrow-right-s-line  bg-white"></i>
                    </li>
                    <li class="nav-item">
                        <a class="bg-white" href="#">Registered Users</a>
                    </li>
                </ul>
            </div>
            <div class="row" v-if="store.businesses != null">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-title">
                                        Registered Users
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-2 mt-lg-0">
                                    <button class="btn btn-danger float-lg-right float-none btn-sm ml-2 mt-1"
                                        data-href="https://profilo.xyz/admin/register/user/bulk-delete"><i
                                            class="flaticon-interface-5"></i>
                                        Delete</button>
                                    <button class="btn btn-primary float-lg-right float-none btn-sm ml-2 mt-1"
                                        data-toggle="modal" data-target="#addUserModal"><i class="fas fa-plus"></i>
                                        Add User</button>
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
                                                    <th scope="col" class="pt-2">
                                                        <input type="checkbox" class="" style="width:16px">
                                                    </th>
                                                    <th scope="col">Business Name</th>
                                                    <th scope="col">Specialization</th>
                                                    <th scope="col">Employees</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <td scope="col">Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item, index) in store.businesses">
                                                    <td>
                                                        <input type="checkbox" class="bulk-check" style="width:16px">
                                                    </td>
                                                    <td>{{ item.business_name }}</td>
                                                    <td>{{ item.specialization }}</td>
                                                    <td>{{ item.number_of_employees }}</td>
                                                    <td>{{ item.email }}</td>
                                                    <td>{{ item.phone_number }}</td>


                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-info btn-sm dropdown-toggle"
                                                                type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <button class="editbtn dropdown-item" data-toggle="modal"
                                                                    data-target="#mailModal"
                                                                    data-email="pefen68317@iucake.com">View</button>
                                                                <button class="editbtn dropdown-item" data-toggle="modal"
                                                                    data-target="#mailModal"
                                                                    data-email="pefen68317@iucake.com">Approve
                                                                </button>
                                                                <button class="editbtn dropdown-item" data-toggle="modal"
                                                                    data-target="#mailModal"
                                                                    data-email="pefen68317@iucake.com">Edit</button>
                                                                <button class="editbtn dropdown-item" data-toggle="modal"
                                                                    data-target="#mailModal"
                                                                    data-email="pefen68317@iucake.com">Delete</button>
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

            <AddBusiness />
        </div>
    </div>
</template>
<script setup>
import { onMounted } from "vue"
import AddBusiness from "./forms/AddBusiness.vue"
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import { useBusinessStore } from "@/store/business.js"

const store = useBusinessStore()

onMounted(async () => {
    let response = await store.getBusinesses()
    $("#businessTable").DataTable()
})
</script>
<style scoped>
.main-header {
    height: 80px !important;
}
</style>    