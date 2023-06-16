<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="coachingModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="coachingModalTitle"
    style="display: none"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer text-center">
          <button
            id="closeCoachingBtn"
            data-dismiss="modal"
            type="button"
            class="submitBtn btn btn-primary"
          >
            Cancel
          </button>
          <button
            @click="submitForm"
            type="button"
            class="submitBtn btn btn-primary"
          >
            Add User
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref } from "vue";
// import { ElNotiffication } from "element-plus";
const props = defineProps({
  form: Object,
});

const errors = ref({});
</script>
<style lang="">
</style>