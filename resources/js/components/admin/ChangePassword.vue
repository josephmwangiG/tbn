<template>
    <div>
        <section class="breadcrumbs-section bg_cover lazy entered loaded"
            data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded"
            style="background-image: url(&quot;https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg&quot;);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-content text-center">
                            <h1>Join Us
                            </h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="https://profilo.xyz">Home</a></li>
                                <li class="active"> Join Us
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts-section mt-5">
            <div class="container">
                <h3>Fill the form below to join Transformational Business Network</h3>
                <form @submit.prevent="addBusiness">
                    <div class="row mt-5">
                        <div class="form-group col-lg-4 mt-2">
                            <span>Business/Company Name</span>
                            <el-input style="border:black" v-model="form.business_name" size="large"
                                placeholder="Business/Company Name" type="text" required="required"></el-input>
                            <span class="text-danger" v-if="errors.business_name">{{ errors.business_name[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Email Address*</span>
                            <el-input style="border:black" v-model="form.email" size="large" placeholder="Email Address"
                                type="email" required="required"></el-input>
                            <span class="text-danger" v-if="errors.email">{{ errors.email[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Password*</span>
                            <el-input style="border:black" v-model="form.password" size="large" placeholder="Password"
                                type="password" required="required"></el-input>
                            <span class="text-danger" v-if="errors.password">{{ errors.password[0] }}</span>
                        </div>

                        <div class="form-group col-lg-4 mt-2">
                            <span>Phone Number</span>
                            <el-input style="border:black" v-model="form.phone_number" size="large" type="text"
                                placeholder="Phone Number" required="required"></el-input>
                            <span class="text-danger" v-if="errors.phone_number">{{ errors.phone_number[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Specialization</span>
                            <el-select filterable class="w-100" v-model="form.specialization" size="large" type="text"
                                placeholder="Address details">
                                <el-option value="Marketing">Marketing</el-option>
                            </el-select>
                            <span class="text-danger" v-if="errors.specialization">{{ errors.specialization[0] }}</span>
                        </div>

                        <div class="col-12  my-5">
                            <h5>Additional Business/Company Details.</h5>
                            <hr>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <span>Website</span>
                                <el-input style="border:black" v-model="form.website" type="text" size="large"
                                    placeholder="Website" />
                                <span class="text-danger" v-if="errors.website">{{ errors.website[0] }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <span>Number of Employees</span>
                            <div class="form-group">
                                <el-input type="number" style="border:black" v-model="form.number_of_employees" size="large"
                                    placeholder="Number of Employees" />
                                <span class="text-danger" v-if="errors.number_of_employees">{{ errors.number_of_employees[0]
                                }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <span>Years of Operation</span>
                                <el-input type="number" style="border:black" v-model="form.years_of_operation" size="large"
                                    placeholder="Years of Operation" />
                                <span class="text-danger" v-if="errors.years_of_operation">{{ errors.years_of_operation[0]
                                }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <span>Approximate Annual Revenue</span>
                                <el-input :formatter="removeletter" :parser="(value) => value.replace(/\$\s?|(,*)/g, '')"
                                    style="border:black" v-model="revenue" size="large"
                                    placeholder="Approximate Annual Revenue" />
                                <span class="text-danger" v-if="errors.annual_revenue">{{ errors.annual_revenue[0] }}</span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex justify-content-between my-3">
                                <h5>Business Owners</h5>
                                <i @click="addOwner" style="font-size: 30px;" class="ri-add-circle-line"></i>
                            </div>
                            <div class="row" v-for="(item, index) in form.owners" :key="index">
                                <div class="col-lg-4 ">
                                    <span>Full Names</span>
                                    <div class="form-group">
                                        <el-input style="border:black" v-model="item.name" type="text" size="large"
                                            placeholder="Full Names" required="" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <span>Owner Email</span>
                                        <el-input style="border:black" v-model="item.email" size="large" type="email"
                                            placeholder="Owner Email" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <span>Phone Number</span>
                                        <el-input style="border:black" v-model="item.phone_number" size="large"
                                            placeholder="Phone Number" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <span>Description</span>
                                <el-input style="border:black" v-model="form.description" type="textarea"
                                    placeholder="Business Description" />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="main-btn">Submit</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </section>


    </div>
</template>
<script setup>
import { ref } from "vue"
import { useRouter } from "vue-router"
import { useBusinessStore } from "@/store/business.js"

const store = useBusinessStore()
const router = useRouter()

let revenue = ref('')
let errors = ref({})

let form = ref({
    business_name: "",
    email: "",
    password: "",
    address: "",
    number_of_employees: "",
    specialization: "",
    website: "",
    phone_number: "",
    owners: [{
        "name": '',
        "email": '',
        "phone_number": '',
    }],
    description: "",
    annual_revenue: "",
    years_of_operation: "",
})

const removeletter = (input) => {
    input = input.replace(/[^0-9]/g, "")
    form.value.annual_revenue = input
    return `${input}`.replace(/\B(?=(\d{3})+(?!\d))/g, ',')
}

const addOwner = async () => {
    form.value.owners.push({
        "name": '',
        "email": '',
        "phone_number": '',
    })
}

const addBusiness = async () => {
    let response = await store.addBusinesses(form.value)

    if (response == true) {
        router.push({ name: "account-created" })
    } else {
        errors.value = response.data.errors
    }
}

</script>