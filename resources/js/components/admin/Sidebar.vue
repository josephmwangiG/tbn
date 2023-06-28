<template>
    <div class="sidebar sidebar-style-2">
        <div class="scroll-wrapper sidebar-wrapper" style="position: relative;">
            <div class="sidebar-wrapper" style="height: auto; margin-bottom: 0px; margin-right: 0px; overflow-y: auto;">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="https://profilo.xyz/assets/admin/img/propics/5f5797dbc520b.png" alt="..."
                                class="avatar-img rounded">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Johny
                                    <span class="user-level">Admin</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <router-link :to="{ name: 'profile' }">
                                            <span class="link-collapse">Edit Profile</span>
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{ name: 'change-password' }">
                                            <span class="link-collapse">Change Password</span>
                                        </router-link>
                                    </li>
                                    <li>
                                        <a @click="logout" href="#">
                                            <span class="link-collapse">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">

                        <li class="nav-item" :class="route.name == 'dashboard' ? 'active' : ''">
                            <router-link :to="{ name: 'dashboard' }">
                                <i class="ri-home-2-line"></i>
                                <p>Dashboard</p>
                            </router-link>
                        </li>
                        <li class="nav-item" :class="route.name == 'training-events' ? 'active' : ''">
                            <router-link :to="{ name: 'training-events' }">
                                <i class="ri-calendar-event-line"></i>
                                <p>Training Events</p>
                            </router-link>
                        </li>

                        <li class="nav-item" :class="route.name == 'coaching-events' ? 'active' : ''">
                            <router-link :to="{ name: 'coaching-events' }">
                                <i class="ri-graduation-cap-fill"></i>
                                <p>Coaching Events</p>
                            </router-link>
                        </li>

                        <li class="nav-item" :class="route.name == 'alumni' ? 'active' : ''">
                            <router-link :to="{ name: 'alumni' }">
                                <i class="ri-stack-fill"></i>
                                <p>Alumni</p>
                            </router-link>
                        </li>
                        <li class="nav-item" :class="route.name == 'businesses' ? 'active' : ''">
                            <router-link :to="{ name: 'businesses' }">
                                <i class="ri-stack-fill"></i>
                                <p>Businesses</p>
                            </router-link>
                        </li>
                        <li class="nav-item" :class="route.name == 'admin-coaches' ? 'active' : ''">
                            <router-link :to="{ name: 'admin-coaches' }">
                                <i class="ri-group-line"></i>
                                <p>Coaches</p>
                            </router-link>
                        </li>


                        <li class="nav-item" :class="route.name == 'reports' ? 'active' : ''">
                            <router-link :to="{ name: 'reports' }">
                                <i class="ri-folder-chart-line"></i>
                                <p>Reports</p>
                            </router-link>
                        </li>

                        <li class="nav-item" :class="route.fullPath.startsWith('/admin/settings') ? 'active' : ''">
                            <a data-toggle="collapse" href="#settings">
                                <i class="ri-settings-4-line"></i>
                                <p>Settings</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="settings">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <router-link :to="{ name: 'settings' }">
                                            <span class="sub-item">Settings</span>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item" :class="route.fullPath.startsWith('/admin/users') ? 'active' : ''">
                            <a data-toggle="collapse" href="#roles">
                                <i class="ri-equalizer-line"></i>
                                <p>Roles & Users</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="roles">
                                <ul class="nav nav-collapse">
                                    <li :class="route.name == 'users-roles' ? 'active' : ''">
                                        <router-link :to="{ name: 'users-roles' }">
                                            <span class="sub-item">Roles</span>
                                        </router-link>
                                    </li>
                                    <li :class="route.name == 'users' ? 'active' : ''">
                                        <router-link :to="{ name: 'users' }">
                                            <span class="sub-item">Users</span>
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</template>
<script setup>
import { useRoute } from "vue-router"
const route = useRoute()
</script>
<style lang="">
    
</style>