<template >
    <div class="wrapper">
        <TopNavbar />
        <Sidebar />
        <div class="main-panel">
            <router-view></router-view>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="d-block mx-auto">
                        Copyright © 2023. All rights reserved by Profilex.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<script setup>
import Sidebar from "./Sidebar.vue"
import TopNavbar from "./TopNavbar.vue"

</script>
<style scoped></style>