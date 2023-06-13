<template>
    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalTitle"
        style="display: none;" aria-hidden="true">
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
</template>
<script>
export default {

}
</script>
<style lang="">
    
</style>