<template>
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header">

            <a href="https://profilo.xyz" class="logo" target="_blank">
                <img src="https://profilo.xyz/assets/front/img/60f55a8eea308.png" alt="navbar brand" class="navbar-brand"
                    width="120">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="collapse" aria-expanded="false" aria-label="Toggle navigation" style="">
                <span class="navbar-toggler-icon">
                    <i class="ri-menu-3-line"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="ri-menu-3-line"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar" style="z-index:1000000; width:30px">
                    <i class="ri-menu-3-line"></i>
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
                            <div class="scroll-wrapper dropdown-user-scroll scrollbar-outer" style="position: relative;">
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
</template>
<script>
export default {

}
</script>
<style scoped>
div.main-header {
    height: 70px;
}


.navbar-toggler {
    display: none !important;
}

.nav-toggle {
    display: none !important;
}

@media (max-width: 991px) {
    .navbar-toggler {
        display: block !important;
    }
}
</style>