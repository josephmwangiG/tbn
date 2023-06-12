<template>
    <div class="wrapper">


        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header">

                <a href="https://profilo.xyz" class="logo" target="_blank">
                    <img src="https://profilo.xyz/assets/front/img/60f55a8eea308.png" alt="navbar brand"
                        class="navbar-brand" width="120">
                </a>
                <button class="bg-dark navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation" style="">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg">

                <div class="container-fluid">

                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                        <form action="https://profilo.xyz/admin/change-theme" class="mr-4 form-inline" id="adminThemeForm">
                            <div class="form-group">
                                <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="theme" value="light" class="selectgroup-input" checked=""
                                            onchange="document.getElementById('adminThemeForm').submit();">
                                        <span class="selectgroup-button selectgroup-button-icon"><i
                                                class="fa fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="theme" value="dark" class="selectgroup-input"
                                            onchange="document.getElementById('adminThemeForm').submit();">
                                        <span class="selectgroup-button selectgroup-button-icon"><i
                                                class="fa fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                        </form>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="https://profilo.xyz/assets/admin/img/propics/5f5797dbc520b.png" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="scroll-wrapper dropdown-user-scroll scrollbar-outer"
                                    style="position: relative;">
                                    <div class="dropdown-user-scroll scrollbar-outer scroll-content"
                                        style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="https://profilo.xyz/assets/admin/img/propics/5f5797dbc520b.png"
                                                        alt="..." class="avatar-img rounded">
                                                </div>
                                                <div class="u-text">
                                                    <h4>Johny</h4>
                                                    <p class="text-muted">admin@gmail.com</p><a
                                                        href="https://profilo.xyz/admin/profile/edit"
                                                        class="btn btn-xs btn-secondary btn-sm">Edit Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="https://profilo.xyz/admin/profile/edit">Edit
                                                Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="https://profilo.xyz/admin/changePassword">Change
                                                Password</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="https://profilo.xyz/admin/logout">Logout</a>
                                        </li>
                                    </div>
                                    <div class="scroll-element scroll-x">
                                        <div class="scroll-element_outer">
                                            <div class="scroll-element_size"></div>
                                            <div class="scroll-element_track"></div>
                                            <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                        </div>
                                    </div>
                                    <div class="scroll-element scroll-y">
                                        <div class="scroll-element_outer">
                                            <div class="scroll-element_size"></div>
                                            <div class="scroll-element_track"></div>
                                            <div class="scroll-bar ui-draggable ui-draggable-handle"></div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>




        <div class="sidebar sidebar-style-2">
            <div class="scroll-wrapper sidebar-wrapper scrollbar scrollbar-inner" style="position: relative;">
                <div class="sidebar-wrapper scrollbar scrollbar-inner scroll-content scroll-scrollx_visible scroll-scrolly_visible"
                    style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 672px;">
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

                            <div class="row mb-2">
                                <div class="col-12">
                                    <form action="">
                                        <div class="form-group py-0">
                                            <input name="term" type="text" class="form-control sidebar-search ltr" value=""
                                                placeholder="Search Menu Here...">
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <li class="nav-item ">
                                <a href="https://profilo.xyz/admin/dashboard?language=en">
                                    <i class="la flaticon-paint-palette"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>


                            <li class="nav-item
            ">
                                <a data-toggle="collapse" href="#packageManagement">
                                    <i class="fas fa-receipt"></i>
                                    <p>Package Management</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
                " id="packageManagement">
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

                            <li class="nav-item
                ">
                                <a href="https://profilo.xyz/admin/payment-log?language=en">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                    <p>Payment Log</p>
                                </a>
                            </li>

                            <li class="nav-item
                ">
                                <a data-toggle="collapse" href="#customDomains">
                                    <i class="fas fa-link"></i>
                                    <p>Custom Domains</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
                    " id="customDomains">
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

                            <li class="nav-item
                ">
                                <a data-toggle="collapse" href="#subDomains">
                                    <i class="fas fa-link"></i>
                                    <p>Subdomains</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
                    " id="subDomains">
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



                            <li class="nav-item
  active
 ">
                                <a href="https://profilo.xyz/admin/register/users?language=en">
                                    <i class="la flaticon-users"></i>
                                    <p>Registered Users</p>
                                </a>
                            </li>



                            <li class="nav-item
    ">
                                <a href="https://profilo.xyz/admin/menu-builder?language=en">
                                    <i class="fas fa-bars"></i>
                                    <p>Menu Builder</p>
                                </a>
                            </li>



                            <li class="nav-item
  ">
                                <a data-toggle="collapse" href="#home">
                                    <i class="la flaticon-home"></i>
                                    <p>Home Page</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
    " id="home">
                                    <ul class="nav nav-collapse">

                                        <li class="">
                                            <a href="https://profilo.xyz/admin/herosection/imgtext?language=en">
                                                <span class="sub-item">Hero Section</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="https://profilo.xyz/admin/introsection?language=en">
                                                <span class="sub-item">Intro Section</span>
                                            </a>
                                        </li>

                                        <li class="
        ">
                                            <a href="https://profilo.xyz/admin/features?language=en">
                                                <span class="sub-item">Features</span>
                                            </a>
                                        </li>

                                        <li class="
        ">
                                            <a href="https://profilo.xyz/admin/process?language=en">
                                                <span class="sub-item">Work Process</span>
                                            </a>
                                        </li>

                                        <li class="
        ">
                                            <a href="https://profilo.xyz/admin/testimonials?language=en">
                                                <span class="sub-item">Testimonials</span>
                                            </a>
                                        </li>
                                        <li class="
        ">
                                            <a href="https://profilo.xyz/admin/partners?language=en">
                                                <span class="sub-item">Partners</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/home-page-text-section?language=en">
                                                <span class="sub-item">Section Titles</span>
                                            </a>
                                        </li>
                                        <li class="
                        ">
                                            <a href="https://profilo.xyz/admin/sections?language=en">
                                                <span class="sub-item">Section Hide / Show</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item
  ">
                                <a data-toggle="collapse" href="#footer">
                                    <i class="fas fa-shoe-prints"></i>
                                    <p>Footer</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
    " id="footer">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/footers?language=en">
                                                <span class="sub-item">Image &amp; Text</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/ulinks?language=en">
                                                <span class="sub-item">Useful Links</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>




                            <li class="nav-item
  ">
                                <a data-toggle="collapse" href="#pages">
                                    <i class="la flaticon-file"></i>
                                    <p>Pages</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
    " id="pages">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/page/create?language=en">
                                                <span class="sub-item">Create Page</span>
                                            </a>
                                        </li>
                                        <li class="
        ">
                                            <a href="https://profilo.xyz/admin/pages?language=en">
                                                <span class="sub-item">Pages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item
  ">
                                <a data-toggle="collapse" href="#blog">
                                    <i class="fas fa-blog"></i>
                                    <p>Blogs</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
    " id="blog">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/bcategorys?language=en">
                                                <span class="sub-item">Category</span>
                                            </a>
                                        </li>
                                        <li class="
        ">
                                            <a href="https://profilo.xyz/admin/blogs?language=en">
                                                <span class="sub-item">Blogs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item
   ">
                                <a href="https://profilo.xyz/admin/faqs?language=en">
                                    <i class="la flaticon-round"></i>
                                    <p>FAQ Management</p>
                                </a>
                            </li>



                            <li class="nav-item
  ">
                                <a href="https://profilo.xyz/admin/contact?language=en">
                                    <i class="la flaticon-whatsapp"></i>
                                    <p>Contact Page</p>
                                </a>
                            </li>



                            <li class="nav-item
            ">
                                <a data-toggle="collapse" href="#announcementPopup">
                                    <i class="fas fa-bullhorn"></i>
                                    <p>Announcement Popup</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
                " id="announcementPopup">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/popup/types?language=en">
                                                <span class="sub-item">Add Popup</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/popups?language=en">
                                                <span class="sub-item">Popups</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item
          ">
                                <a data-toggle="collapse" href="#pushNotification">
                                    <i class="far fa-bell"></i>
                                    <p>Push Notification</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
            " id="pushNotification">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/pushnotification/settings?language=en">
                                                <span class="sub-item">Settings</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/pushnotification/send?language=en">
                                                <span class="sub-item">Send Notification</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item
  ">
                                <a data-toggle="collapse" href="#subscribers">
                                    <i class="la flaticon-envelope"></i>
                                    <p>Subscribers</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
    " id="subscribers">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/subscribers?language=en">
                                                <span class="sub-item">Subscribers</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/mailsubscriber?language=en">
                                                <span class="sub-item">Mail to Subscribers</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item
  ">
                                <a data-toggle="collapse" href="#gateways">
                                    <i class="la flaticon-paypal"></i>
                                    <p>Payment Gateways</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
    " id="gateways">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/gateways?language=en">
                                                <span class="sub-item">Online Gateways</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/offline/gateways?language=en">
                                                <span class="sub-item">Offline Gateways</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>




                            <li class="nav-item
  ">
                                <a data-toggle="collapse" href="#basic">
                                    <i class="la flaticon-settings"></i>
                                    <p>Settings</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse
    " id="basic">
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

                                        <li class="submenu
                        ">
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
                                                    <li class="
                                    ">
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



                            <li class="nav-item   ">
                                <a href="https://profilo.xyz/admin/languages?language=en">
                                    <i class="la flaticon-chat-8"></i>
                                    <p>Language Management</p>
                                </a>
                            </li>

                            <li class="nav-item   ">
                                <a data-toggle="collapse" href="#ulangs">
                                    <i class="la flaticon-chat-8"></i>
                                    <p>Tenant Default Language</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse  " id="ulangs">
                                    <ul class="nav nav-collapse">
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/user-language/settings?language=en">
                                                <span class="sub-item">Settings</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://profilo.xyz/admin/user-language/keywords?language=en">
                                                <span class="sub-item">Keywords</span>
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



                            <li class="nav-item">
                                <a href="https://profilo.xyz/admin/cache-clear?language=en">
                                    <i class="la flaticon-close"></i>
                                    <p>Clear Cache</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="scroll-element scroll-x scroll-scrollx_visible scroll-scrolly_visible">
                    <div class="scroll-element_outer">
                        <div class="scroll-element_size"></div>
                        <div class="scroll-element_track"></div>
                        <div class="scroll-bar ui-draggable ui-draggable-handle" style="width: 224px; left: 0px;"></div>
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



        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">
                            Registered Users
                        </h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="https://profilo.xyz/admin/dashboard?language=en">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Registered Users</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card-title">
                                                Registered Users
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2 mt-lg-0">
                                            <button
                                                class="btn btn-danger float-lg-right float-none btn-sm ml-2 mt-1 d-none bulk-delete"
                                                data-href="https://profilo.xyz/admin/register/user/bulk-delete"><i
                                                    class="flaticon-interface-5"></i>
                                                Delete</button>
                                            <button class="btn btn-primary float-lg-right float-none btn-sm ml-2 mt-1"
                                                data-toggle="modal" data-target="#addUserModal"><i class="fas fa-plus"></i>
                                                Add User</button>
                                            <form action="https://profilo.xyz/admin/register/users?language=en"
                                                class="float-lg-right float-none">
                                                <input type="text" name="term" class="form-control min-w-250" value=""
                                                    placeholder="Search by Username / Email">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <div class="modal fade" id="templateModal80" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm80" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="80">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image80" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm80" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal80" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm80" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="80">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/63f5c177aeb20.png"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="8"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm80">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal79" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm79" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="79">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image79" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm79" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal79" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm79" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="79">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/63f5c16eb6176.png"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="7"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm79">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal74" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm74" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="74">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image74" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm74" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal74" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm74" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="74">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/63f5c162a9e2c.png"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="6"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm74">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal70" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm70" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="70">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image70" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm70" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal70" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm70" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="70">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/61e29a17e156d.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="3"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm70">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal69" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm69" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="69">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image69" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm69" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal69" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm69" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="69">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/61e2b6e97bace.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="1"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm69">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal68" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm68" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="68">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image68" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm68" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal68" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm68" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="68">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/61e29a3868723.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="2"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm68">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal67" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm67" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="67">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image67" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm67" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal67" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm67" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="67">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/61e29a4363cb1.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="5"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm67">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal66" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm66" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="66">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image66" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm66" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal66" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm66" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="66">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews/61e2b72def454.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="4"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm66">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal65" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm65" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="65">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image65" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm65" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal65" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm65" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="65">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="0"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm65">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateModal64" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Preview
                                                                    Image</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template"
                                                                    id="templateForm64" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="64">
                                                                <input type="hidden" name="template" value="">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/admin/img/noimage.jpg"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p id="errpreview_image64" class="mb-0 text-danger em">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value=""
                                                                        placeholder="Enter Serial Number">
                                                                    <p id="errserial_number" class="mb-0 text-danger em">
                                                                    </p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button form="templateForm64" type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="templateImgModal64" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit
                                                                    Preview Template</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <form
                                                                    action="https://profilo.xyz/admin/register/users/template/update"
                                                                    id="editTemplateForm64" method="POST"
                                                                    enctype="multipart/form-data"></form>
                                                                <input type="hidden" name="_token"
                                                                    value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7"> <input
                                                                    type="hidden" name="user_id" value="64">
                                                                <div class="form-group">
                                                                    <label for="">Preview Image **</label>
                                                                    <div class="col-md-12 showImage mb-3">
                                                                        <img src="https://profilo.xyz/assets/front/img/template-previews"
                                                                            alt="..." class="img-thumbnail">
                                                                    </div>
                                                                    <input type="file" name="preview_image" class="image">
                                                                    <p class="eerrpreview_image mb-0 text-danger em"></p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Serial Number **</label>
                                                                    <input type="number" class="form-control ltr"
                                                                        name="serial_number" value="0"
                                                                        placeholder="Enter Serial Number">
                                                                    <p class="eerrserial_number mb-0 text-danger em"></p>
                                                                    <p class="text-warning"><small>The higher the serial
                                                                            number is, the later the template will be
                                                                            shown.</small></p>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary update-btn"
                                                                    data-form_id="editTemplateForm64">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">
                                                                <input type="checkbox" class="bulk-check" data-val="all">
                                                            </th>
                                                            <th scope="col">Username</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Featured</th>
                                                            <th scope="col">Preview Template</th>
                                                            <th scope="col">Email Status</th>
                                                            <th scope="col">Account</th>
                                                            <td scope="col">Action</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="80">
                                                            </td>
                                                            <td>Russell</td>
                                                            <td>pefen68317@iucake.com</td>

                                                            <td>
                                                                <form id="userFrom80" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom80').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="80">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="80"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal80">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm80" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm80').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="80">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm80" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm80').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="80">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/80">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/80/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="pefen68317@iucake.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="80">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="80">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="79">
                                                            </td>
                                                            <td>ronaldcortez</td>
                                                            <td>pefen68316@iucake.com</td>

                                                            <td>
                                                                <form id="userFrom79" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom79').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="79">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="79"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal79">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm79" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm79').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="79">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm79" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm79').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="79">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/79">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/79/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="pefen68316@iucake.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="79">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="79">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="74">
                                                            </td>
                                                            <td>albertlucas</td>
                                                            <td>jotej28287@ezgiant.com</td>

                                                            <td>
                                                                <form id="userFrom74" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom74').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="74">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="74"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal74">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm74" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm74').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="74">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm74" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm74').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="74">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/74">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/74/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="jotej28287@ezgiant.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="74">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="74">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="70">
                                                            </td>
                                                            <td>chiesa</td>
                                                            <td>chiesa@example.com</td>

                                                            <td>
                                                                <form id="userFrom70" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom70').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="70">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="70"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal70">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm70" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm70').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="70">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm70" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm70').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="70">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/70">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/70/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="chiesa@example.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="70">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="70">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="69">
                                                            </td>
                                                            <td>veratti</td>
                                                            <td>veratti@gmail.com</td>

                                                            <td>
                                                                <form id="userFrom69" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom69').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="69">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="69"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal69">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm69" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm69').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="69">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm69" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm69').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="69">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/69">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/69/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="veratti@gmail.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="69">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="69">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="68">
                                                            </td>
                                                            <td>Berrardi</td>
                                                            <td>berrardi@gmail.com</td>

                                                            <td>
                                                                <form id="userFrom68" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom68').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="68">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="68"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal68">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm68" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm68').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="68">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm68" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm68').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="68">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/68">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/68/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="berrardi@gmail.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="68">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="68">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="67">
                                                            </td>
                                                            <td>Rakitic</td>
                                                            <td>rakitic@gmail.com</td>

                                                            <td>
                                                                <form id="userFrom67" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-success" name="featured"
                                                                        onchange="document.getElementById('userFrom67').submit();">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="67">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="67"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal67">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm67" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm67').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="67">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm67" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm67').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="67">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/67">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/67/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="rakitic@gmail.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="67">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="67">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="66">
                                                            </td>
                                                            <td>Rabiot</td>
                                                            <td>rabiot@gmail.com</td>

                                                            <td>
                                                                <form id="userFrom66" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom66').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="66">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="66"
                                                                        class="template-select form-control form-control-sm bg-success"
                                                                        name="preview_template">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                                <button type="button" class="btn btn-primary btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#templateImgModal66">Edit</button>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm66" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm66').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="66">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm66" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm66').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="66">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/66">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/66/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="rabiot@gmail.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="66">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="66">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="65">
                                                            </td>
                                                            <td>Olmo</td>
                                                            <td>olmo@gmail.com</td>

                                                            <td>
                                                                <form id="userFrom65" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-danger" name="featured"
                                                                        onchange="document.getElementById('userFrom65').submit();">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="65">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="65"
                                                                        class="template-select form-control form-control-sm bg-danger"
                                                                        name="preview_template">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm65" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm65').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="65">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm65" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm65').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="65">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/65">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/65/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="olmo@gmail.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="65">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="65">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="bulk-check" data-val="64">
                                                            </td>
                                                            <td>Insigne</td>
                                                            <td>insigne@gmail.com</td>

                                                            <td>
                                                                <form id="userFrom64" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/featured"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control bg-success" name="featured"
                                                                        onchange="document.getElementById('userFrom64').submit();">
                                                                        <option value="1" selected="">
                                                                            Yes</option>
                                                                        <option value="0">
                                                                            No</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="64">
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-inline-block">
                                                                    <select data-user_id="64"
                                                                        class="template-select form-control form-control-sm bg-danger"
                                                                        name="preview_template">
                                                                        <option value="1">
                                                                            Yes</option>
                                                                        <option value="0" selected="">
                                                                            No</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <td>
                                                                <form id="emailForm64" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/email"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="email_verified"
                                                                        onchange="document.getElementById('emailForm64').submit();">
                                                                        <option value="1" selected="">
                                                                            Verified</option>
                                                                        <option value="0">
                                                                            Unverified</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="64">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form id="statusForm64" class="d-inline-block"
                                                                    action="https://profilo.xyz/admin/register/users/ban"
                                                                    method="post">
                                                                    <input type="hidden" name="_token"
                                                                        value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                    <select class="form-control form-control-sm bg-success"
                                                                        name="status"
                                                                        onchange="document.getElementById('statusForm64').submit();">
                                                                        <option value="1" selected="">
                                                                            Active</option>
                                                                        <option value="0">
                                                                            Deactive</option>
                                                                    </select>
                                                                    <input type="hidden" name="user_id" value="64">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-info btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/details/64">Details</a>
                                                                        <a class="dropdown-item"
                                                                            href="https://profilo.xyz/admin/register/user/64/changePassword">Change
                                                                            Password</a>
                                                                        <button class="editbtn dropdown-item"
                                                                            data-toggle="modal" data-target="#mailModal"
                                                                            data-email="insigne@gmail.com">Mail</button>
                                                                        <form class="deleteform d-block"
                                                                            action="https://profilo.xyz/admin/register/user/delete"
                                                                            method="post">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="64">
                                                                            <button type="submit"
                                                                                class="deletebtn dropdown-item">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <form class="d-block"
                                                                            action="https://profilo.xyz/admin/register/user/secret-login"
                                                                            method="post" target="_blank">
                                                                            <input type="hidden" name="_token"
                                                                                value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                                                            <input type="hidden" name="user_id" value="64">
                                                                            <button class="dropdown-item"
                                                                                role="button">Secret Login</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="d-inline-block mx-auto">
                                            <nav>
                                                <ul class="pagination">

                                                    <li class="page-item disabled" aria-disabled="true"
                                                        aria-label="« Previous">
                                                        <span class="page-link" aria-hidden="true">‹</span>
                                                    </li>





                                                    <li class="page-item active" aria-current="page"><span
                                                            class="page-link">1</span></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="https://profilo.xyz/admin/register/users?page=2">2</a>
                                                    </li>


                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            href="https://profilo.xyz/admin/register/users?page=2"
                                                            rel="next" aria-label="Next »">›</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Modal -->
                    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog"
                        aria-labelledby="addUserModalTitle" style="display: none;" aria-hidden="true">
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
                                        <input type="hidden" name="_token" value="gj1qsrCpVYUBGJV3yrkWAsWkqZQJemnLHknf9RB7">
                                        <div class="form-group">
                                            <label for="">Username *</label>
                                            <input class="form-control" type="text" name="username">
                                            <p id="errusername" class="text-danger mb-0 em"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email *</label>
                                            <input class="form-control" type="email" name="email">
                                            <p id="erremail" class="text-danger mb-0 em"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password *</label>
                                            <input class="form-control" type="password" name="password">
                                            <p id="errpassword" class="text-danger mb-0 em"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirm Password *</label>
                                            <input class="form-control" type="password" name="password_confirmation">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Package / Plan *</label>
                                            <select name="package_id" class="form-control">
                                                <option value="10">Begninner (monthly)
                                                </option>
                                                <option value="11">Begninner (yearly)
                                                </option>
                                                <option value="13">Freelancer (monthly)
                                                </option>
                                                <option value="14">Freelancer (yearly)
                                                </option>
                                                <option value="15">Entrepreneur (monthly)
                                                </option>
                                                <option value="16">Entrepreneur (yearly)
                                                </option>
                                                <option value="31">Free (lifetime)
                                                </option>
                                                <option value="32">Golden (lifetime)
                                                </option>
                                                <option value="33">Plutinum (lifetime)
                                                </option>
                                            </select>
                                            <p id="errpackage_id" class="text-danger mb-0 em"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Payment Gateway *</label>
                                            <select name="payment_gateway" class="form-control">
                                                <option value="Flutterwave">Flutterwave</option>
                                                <option value="Razorpay">Razorpay</option>
                                                <option value="Paytm">Paytm</option>
                                                <option value="Paystack">Paystack</option>
                                                <option value="Instamojo">Instamojo</option>
                                                <option value="Stripe">Stripe</option>
                                                <option value="Paypal">Paypal</option>
                                                <option value="Mollie Payment">Mollie Payment</option>
                                                <option value="Mercado Pago">Mercado Pago</option>
                                                <option value="Authorize.net">Authorize.net</option>
                                                <option value="JPMorgan Chase &amp; Co.">JPMorgan Chase &amp; Co.</option>
                                                <option value="Bank of America Corp.">Bank of America Corp.</option>
                                            </select>
                                            <p id="errpayment_gateway" class="text-danger mb-0 em"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Publicly Hidden *</label>
                                            <select name="online_status" class="form-control">
                                                <option value="1">No</option>
                                                <option value="0">Yes</option>
                                            </select>
                                            <p id="erronline_status" class="text-danger mb-0 em"></p>
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
                </div>
            </div>
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
<script>
export default {

}
</script>
<style scoped>
.main-header {
    height: 80px !important;
}
</style>    