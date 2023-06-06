<template>
    <section class="breadcrumbs-section bg_cover lazy entered loaded"
        data-bg="https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg" data-ll-status="loaded"
        style="background-image: url(&quot;https://profilo.xyz/assets/front/img/60ea8dcf724d7.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumbs-content text-center">
                        <h1> Login
                        </h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="https://profilo.xyz">Home</a></li>
                            <li class="active"> Login
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="user-form-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="user-form">
                        <div class="title">
                            <h3>login</h3>
                        </div>
                        <form action="https://profilo.xyz/login" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="Fw9UF108cFC6Lqh72jT9hCj7wAoChBGBVS2Laopv">
                            <div class="form_group">
                                <span>Email Address*</span>
                                <input type="email" name="email" class="form_control" value="romario@gmail.com">
                            </div>
                            <div class="form_group">
                                <span>Password *</span>
                                <input type="password" name="password" class="form_control" value="12345678">
                            </div>

                            <div class="form_group d-sm-flex justify-content-between">
                                <div>
                                    <a href="https://profilo.xyz/password/reset">Lost your password?</a>
                                </div>
                                <div>
                                    <span>Don't have an account? <a class="btn-link"
                                            href="https://profilo.xyz/pricing">Click Here</a> to Signup</span>
                                </div>
                            </div>
                            <div class="form_group">
                                <button class="main-btn">LOG IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {

}
</script>
<style lang="">
    
</style>