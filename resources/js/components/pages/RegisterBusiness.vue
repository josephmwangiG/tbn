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
        <section class="contacts-section pt-80 pb-80">
            <div class="container">
                <h3>Fill the form below to join Transformational Business Network</h3>
                <div class="row mt-5">
                    <div class="form_group col-lg-6 mt-2">
                        <span>Business/Company Name</span>
                        <el-input size="large" placeholder="Enter business name" type="text" name="text"></el-input>
                    </div>
                    <div class="form_group col-lg-6 mt-2">
                        <span>Email Address*</span>
                        <el-input size="large" placeholder="Enter email address" type="email" name="email"></el-input>
                    </div>

                    <div class="form_group col-lg-6 mt-2">
                        <span>Phone Number</span>
                        <el-input size="large" type="text" placeholder="Enter phone number" name="text"></el-input>
                    </div>
                    <div class="form_group col-lg-6 mt-2">
                        <span>Address/Location</span>
                        <el-input size="large" type="text" placeholder="Address details" name="text"></el-input>
                    </div>

                    <div class="col-12  my-5">
                        <h5>Additional Business/Company Details.</h5>
                        <hr>
                    </div>


                    <div class="col-lg-6 ">
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Full Name" name="name" required="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_group mb-5">
                            <input type="email" class="form_control" placeholder="Email Address" name="email" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_group mb-5">
                            <input type="text" class="form_control" placeholder="Subject" name="subject" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_group mb-5">
                            <textarea class="form_control" placeholder="Message" name="message" required=""></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">

                            <div data-sitekey="6LcFs1QcAAAAABZSgS5BUvl4ED9svNyo9uQtmnwQ" class="g-recaptcha">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcFs1QcAAAAABZSgS5BUvl4ED9svNyo9uQtmnwQ&amp;co=aHR0cHM6Ly9wcm9maWxvLnh5ejo0NDM.&amp;hl=en&amp;v=sNQO7xVld1CuA2hfFHvkpVL-&amp;size=normal&amp;cb=y14kte4unbs6"
                                            width="304" height="78" role="presentation" name="a-lu3dpfuocg3d"
                                            frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                    </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form_group">
                            <button @click="addBusiness" class="main-btn">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </div>
</template>
<script setup>
import { ref } from "vue"
import {useBusinessStore} from "@/store/business.js"

const store = useBusinessStore()

let form = ref({
    business_name: "",
    email: "",
    address: "",
    number_of_employees: "",
    specialization: "",
    phone_number: "",
    owners: "",
    description: "",
    annual_revenue: "",
    years_of_operation: "",
})


const addBusiness = async () => {
    let reponse = await store.getBusinesses()
}

</script>