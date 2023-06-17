<template>
    <!-- Modal -->
    <div class="modal fade" id="deleteItem" tabindex="-1" role="dialog" aria-labelledby="deleteItemTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete {{ message }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <div class="modal-footer text-center">
                    <button id="" data-dismiss="modal" type="button" @click="emits('confirmOption', false)"
                        class="submitBtn btn btn-sm btn-dark">Cancel</button>
                    <button id="" data-dismiss="modal" type="button" @click="emits('confirmOption', true)"
                        class="submitBtn btn btn-sm btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
const props = defineProps({
    message: String
})
const emits = defineEmits(['confirmOption'])
</script>
<style lang="">
    
</style>