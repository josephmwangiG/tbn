<template>
    <!-- Modal -->
    <div class="modal fade" id="trainingEventModal" tabindex="-1" role="dialog" aria-labelledby="trainingEventModalTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="https://profilo.xyz/admin/register/user/store" method="POST" id="ajaxForm"
                        onsubmit="return false">
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>
                        <div class="form-group col-lg-4 mt-2">
                            <span>Address/Location</span>
                            <el-input style="border:black" v-model="form.address" size="large" type="text"
                                placeholder="Address details"></el-input>
                            <span class="text-danger" v-if="errors.address">{{ errors.address[0] }}</span>
                        </div>

                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button id="" data-form="ajaxForm" type="button" class="submitBtn btn btn-primary">Add
                        User</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from "vue"
const props = defineProps({
    form: Object
})

const errors = ref({})
</script>
<style lang="">
    
</style>