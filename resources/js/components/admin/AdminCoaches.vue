<template>
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">
                    Registered Coaches
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
                        <a class="bg-white" href="#">Registered Coaches</a>
                    </li>
                </ul>
            </div>

            <div class="card" v-if="store.coaches != null">
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
                            <button class="btn btn-primary float-lg-right float-none btn-sm ml-2 mt-1" data-toggle="modal"
                                data-target="#addUserModal"><i class="fas fa-plus"></i>
                                Add User</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mt-3" id="businessTable">
                            <thead>
                                <tr>
                                    <th scope="col" class="pt-2">
                                        <input type="checkbox" class="" style="width:16px">
                                    </th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Specialization</th>
                                    <th scope="col">Current Job</th>
                                    <th scope="col">Employer</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in store.coaches">
                                    <td>
                                        <input type="checkbox" class="bulk-check" style="width:16px">
                                    </td>
                                    <td>{{ item.name }}</td>
                                    <td>{{ item.specialization }}</td>
                                    <td>{{ item.current_employment }}</td>
                                    <td>{{ item.current_employer }}</td>
                                    <td>{{ item.user.email }}</td>
                                    <td>{{ item.phone_number }}</td>
                                    <td>{{ item.status }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-info btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Actions
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <button class="editbtn dropdown-item" data-toggle="modal"
                                                    data-target="#mailModal"
                                                    data-email="pefen68317@iucake.com">View</button>
                                                <button class="editbtn dropdown-item"
                                                    @click="itemID = item.id; accountAction = 'Approve'" data-toggle="modal"
                                                    data-target="#approveUser" v-if="item.status == 'Pending'">Approve
                                                </button>
                                                <button class="editbtn dropdown-item"
                                                    @click="itemID = item.id; accountAction = 'Deactivate'"
                                                    data-toggle="modal" data-target="#approveUser"
                                                    v-if="item.status == 'Active'">Deactivate
                                                </button>
                                                <button class="editbtn dropdown-item"
                                                    @click="itemID = item.id; accountAction = 'Activate'"
                                                    data-toggle="modal" data-target="#approveUser"
                                                    v-if="item.status == 'Deactivated'">Activate
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

            <ApproveUser @confirmOption="confirmOption" :option="accountAction" />
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from "vue"
import ApproveUser from "./forms/ApproveUser.vue"
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import { useCoachStore } from "@/store/coach.js"
import { ElNotification } from 'element-plus'

const store = useCoachStore()
const itemID = ref(0)
const accountAction = ref('')

const confirmOption = async (res) => {
    if (res && accountAction.value == 'Approve') {
        let response = await store.approveAccount(itemID.value, accountAction.value == 'Approve' ? 'Active' : '')
        if (response == true) {
            ElNotification({
                title: 'Success',
                type: 'success',
                message: 'Account Approved',
                duration: 2000,
            })
        }
    } else if (res, accountAction.value == 'Deactivate') {
        let response = await store.approveAccount(itemID.value, accountAction.value == 'Deactivate' ? 'Deactivated' : '')
        if (response == true) {
            ElNotification({
                title: 'Success',
                type: 'success',
                message: 'Account Approved',
                duration: 2000,
            })
        }
    }
    else if (res, accountAction.value == 'Activate') {
        let response = await store.approveAccount(itemID.value, accountAction.value == 'Activate' ? 'Active' : '')
        if (response == true) {
            ElNotification({
                title: 'Success',
                type: 'success',
                message: 'Account Approved',
                duration: 2000,
            })
        }
    }
}

onMounted(async () => {
    let response = await store.getCoaches()
    $("#businessTable").DataTable()
})
</script>
<style scoped>
.main-header {
    height: 80px !important;
}
</style>    