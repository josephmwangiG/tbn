<template>
    <div class="sidebar sidebar-style-2">
        <div class="scroll-wrapper sidebar-wrapper scrollbar scrollbar-inner" style="position: relative;">
            <div class="sidebar-wrapper scrollbar scrollbar-inner scroll-content scroll-scrollx_visible scroll-scrolly_visible"
                style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 672px;">
                <div class="sidebar-content">
                    <div class="user pt-4">
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
                                        <a href="https://profilo.xyz/admin/profile/edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://profilo.xyz/admin/changePassword">
                                            <span class="link-collapse">Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://profilo.xyz/admin/logout?language=en">
                                            <span class="link-collapse">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">

                        <li class="nav-item ">
                            <a href="https://profilo.xyz/admin/dashboard?language=en">
                                <i class="la flaticon-paint-palette"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a data-toggle="collapse" href="#packageManagement">
                                <i class="fas fa-receipt"></i>
                                <p>Training</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="packageManagement">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/package/settings?language=en">
                                            <span class="sub-item">Settings</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/coupon?language=en">
                                            <span class="sub-item">Coupons</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/package/features?language=en">
                                            <span class="sub-item">Package Features</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/packages?language=en">
                                            <span class="sub-item">Packages</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="https://profilo.xyz/admin/payment-log?language=en">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <p>Payment Log</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#customDomains">
                                <i class="fas fa-link"></i>
                                <p>Custom Domains</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="customDomains">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/domain/texts?language=en">
                                            <span class="sub-item">Request Page Texts</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/domains?language=en">
                                            <span class="sub-item">All Requests</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/domains?type=pending?language=en">
                                            <span class="sub-item">Pending Requests</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/domains?type=connected?language=en">
                                            <span class="sub-item">Connected Requests</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/domains?type=rejected?language=en">
                                            <span class="sub-item">Rejected Requests</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#subDomains">
                                <i class="fas fa-link"></i>
                                <p>Subdomains</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="subDomains">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/subdomains?language=en">
                                            <span class="sub-item">All Subdomains</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/subdomains?type=pending?language=en">
                                            <span class="sub-item">Pending Subdomains</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/subdomains?type=connected?language=en">
                                            <span class="sub-item">Connected Subdomains</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>



                        <li class="nav-item active">
                            <a href="https://profilo.xyz/admin/register/users?language=en">
                                <i class="la flaticon-users"></i>
                                <p>Registered Users</p>
                            </a>
                        </li>




                        <li class="nav-item
   ">
                            <a href="https://profilo.xyz/admin/faqs?language=en">
                                <i class="la flaticon-round"></i>
                                <p>FAQ Management</p>
                            </a>
                        </li>




                        <li class="nav-item">
                            <a data-toggle="collapse" href="#basic">
                                <i class="la flaticon-settings"></i>
                                <p>Settings</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="basic">
                                <ul class="nav nav-collapse">
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/favicon?language=en">
                                            <span class="sub-item">Favicon</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/logo?language=en">
                                            <span class="sub-item">Logo</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/basicinfo?language=en">
                                            <span class="sub-item">General Settings</span>
                                        </a>
                                    </li>

                                    <li class="submenu">
                                        <a data-toggle="collapse" href="#emailset" aria-expanded="false">
                                            <span class="sub-item">Email Settings</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse " id="emailset">
                                            <ul class="nav nav-collapse subnav">
                                                <li class="">
                                                    <a href="https://profilo.xyz/admin/mail-from-admin?language=en">
                                                        <span class="sub-item">Mail from Admin</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://profilo.xyz/admin/mail-to-admin?language=en">
                                                        <span class="sub-item">Mail to Admin</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="https://profilo.xyz/admin/mail_templates?language=en">
                                                        <span class="sub-item">Mail Templates</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/preloader?language=en">
                                            <span class="sub-item">Preloader</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/breadcrumb?language=en">
                                            <span class="sub-item">Breadcrumb</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://profilo.xyz/admin/social?language=en">
                                            <span class="sub-item">Social Links</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://profilo.xyz/admin/script?language=en">
                                            <span class="sub-item">Plugins</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="https://profilo.xyz/admin/maintainance?language=en">
                                            <span class="sub-item">Maintainance Mode</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/cookie-alert?language=en">
                                            <span class="sub-item">Cookie Alert</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://profilo.xyz/admin/seo?language=en">
                                            <span class="sub-item">SEO Information</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>





                        <li class="nav-item
  ">
                            <a href="https://profilo.xyz/admin/roles?language=en">
                                <i class="la flaticon-multimedia-2"></i>
                                <p>Role Management</p>
                            </a>
                        </li>




                        <li class="nav-item
   ">
                            <a href="https://profilo.xyz/admin/users?language=en">
                                <i class="la flaticon-user-5"></i>
                                <p>Admins Management</p>
                            </a>
                        </li>


                        <li class="nav-item
    ">
                            <a href="https://profilo.xyz/admin/sitemap?language=en">
                                <i class="fa fa-sitemap"></i>
                                <p>Sitemap</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="scroll-element scroll-y scroll-scrollx_visible scroll-scrolly_visible">
                <div class="scroll-element_outer">
                    <div class="scroll-element_size"></div>
                    <div class="scroll-element_track"></div>
                    <div class="scroll-bar ui-draggable ui-draggable-handle" style="height: 322px; top: 0px;"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {

}
</script>
<style lang="">
    
</style>