<template>
  <div v-if="store.trainingEvents != null">
    <section class="breadcrumbs-section bg_cover lazy entered loaded"
      data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded" style="
        background-image: url('https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg');
      ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="breadcrumbs-content text-center">
              <h1>View Event</h1>
              <ul class="breadcrumbs-link">
                <li><a href="/">Home</a></li>
                <li class="active">View Event</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====== End Saas-banner section ======-->

    <!--====== Start saas-features section ======-->
    <section class="saas-features mt-5">
      <div class="container">
        <div class="d-flex justify-content-between">
          <div class="section-title-one section-title-two my-auto">
            <span class="span">Event Details</span>
          </div>
          <button class="main-btn p-2 my-auto">Register Here</button>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="blog-details-items">
              <div class="blog-details-content">
                <h3 class="title">On the other hand, we denounce with righteous indignation</h3>
                <div class="summernote-content">
                  <p>
                    <span style="font-family:'Open Sans', Arial, sans-serif;text-align:justify;">On the other hand, we
                      denounce with righteous indignation and dislike men who are so beguiled and demoralized by the
                      charms
                      of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that
                      are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of
                      will,
                      which is the same as saying through shrinking from toil and pain. These cases are perfectly simple
                      and
                      easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing
                      prevents our being able to do what we like best, every pleasure is to be welcomed and every pain
                      avoided. But in certain circumstances and owing to the claims of duty or the obligations of business
                      it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man
                      therefore always holds in these matters to this principle of selection: he rejects pleasures to
                      secure
                      other greater pleasures, or else he endures pains to avoid worse pains</span><br>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>
<script setup>
import { onMounted, computed } from "vue";

import { useTrainingEventStore } from "@/store/event.js";

const store = useTrainingEventStore();

const coaches = computed(() => {
  return store.coaches.filter((item) => {
    if (item.status == "Active") {
      return item;
    }
  });
});
onMounted(async () => {
  await store.getTrainingEvents();
});
</script>
<style lang="">
</style>