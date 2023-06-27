<template>
  <!-- Modal -->
  <div class="modal fade" id="coachingModal" tabindex="-1" role="dialog" aria-labelledby="coachingModalTitle"
    style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Coaching Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body row">
            <div class="form-group col-lg-4 mt-2">
              <span>Event Name</span>
              <el-input style="border:black" v-model="form.name" size="large" type="text"
                placeholder="Event Name"></el-input>
              <span class="text-danger" v-if="errors.name">{{ errors.name[0] }}</span>
            </div>
            <div class="form-group col-lg-4 mt-2">
              <span>Start Date</span>
              <el-input style="border:black" v-model="form.start_date" size="large" type="date"
                placeholder="Start Date"></el-input>
              <span class="text-danger" v-if="errors.start_date">{{ errors.start_date[0] }}</span>
            </div>
            <div class="form-group col-lg-4 mt-2">
              <span>End Date</span>
              <el-input style="border:black" v-model="form.end_date" size="large" type="date"
                placeholder="End Date"></el-input>
              <span class="text-danger" v-if="errors.end_date">{{ errors.end_date[0] }}</span>
            </div>
            <div class="form-group col-lg-6 mt-2">
              <span>Event Location/Address</span>
              <el-input style="border:black" v-model="form.location" size="large" type="text"
                placeholder="Event Location/Address"></el-input>
              <span class="text-danger" v-if="errors.location">{{ errors.location[0] }}</span>
            </div>
            <div class="form-group col-lg-6 mt-2">
              <span>Registration Deadline</span>
              <el-input style="border:black" v-model="form.registration_deadline" size="large" type="date"
                placeholder="Registration Deadline"></el-input>
              <span class="text-danger" v-if="errors.registration_deadline">{{ errors.registration_deadline[0]
              }}</span>
            </div>
            <div class="form-group col-lg-12 mt-2">
              <span>Event Description</span>
              <el-input type="textarea" style="border:black" v-model="form.description" size="large"
                placeholder="Event Description"></el-input>
              <span class="text-danger" v-if="errors.description">{{ errors.description[0]
              }}</span>
            </div>

          </div>
        </div>
        <div class="modal-footer text-center">
          <button id="closeCoachingBtn" data-dismiss="modal" type="button" class="submitBtn btn btn-primary">
            Cancel
          </button>
          <button @click="submitEvent" type="button" class="submitBtn btn btn-primary">
            {{ action }} Event
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref } from "vue"
import { ElNotification } from 'element-plus'
import { useCoachingStore } from "@/store/coaching.js"

const store = useCoachingStore()

const props = defineProps({
  form: Object,
  action: String,
})

const emits = defineEmits(['newItem'])

const errors = ref({})

const submitEvent = async () => {
  if (props.action == 'Add') {
    let response = await store.addCoaching(props.form)

    if (response == true) {
      ElNotification({
        title: 'Success',
        type: 'success',
        message: 'Coaching Event Added',
        duration: 2000,
      })

      document.getElementById("closeCoachingBtn").click()
      emits('newItem')
    }
    else {
      errors.value = response.data.errors
    }
  } else {

    let response = await store.updateCoaching(props.form)
    if (response == true) {
      ElNotification({
        title: 'Success',
        type: 'success',
        message: 'Coaching Event Updated',
        duration: 2000,
      })

      document.getElementById("closeCoachingBtn").click()
    } else {
      errors.value = response.data.errors
    }
  }
}


</script>
<style lang="">
</style>