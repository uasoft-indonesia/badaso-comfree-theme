<input type="checkbox" class="modal-toggle" />
<div class="modal" id="modal_forget_password_verify" role="dialog">
    <div class="modal-box">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" x-on:click="modalActionClose()">✕</button>
        <div class="flex justify-center " x-data="fetchData()" x-init="fetchConfiguration()">
            <div class="w-44">
                <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                        class="w-full h-full object-cover" alt=""></a>
            </div>
        </div>
        <div class="flex flex-col space-y-2 mt-2">
            <div class="flex justify-center">
                <span class="text-md text-center font-bold">Verification Code</span>
            </div>
            <div class="flex justify-center">
                <span class="text-sm text-center">Verification code has been sent via email!</span>
            </div>
        </div>

        <form action="" x-data="fetchAuthenticated()" @submit.prevent="forgetPasswordVerify()">
            <div class="flex flex-col w-full py-4">
                <div class="flex justify-center">
                    <input type="number" placeholder="Verify Code"
                        class="input input-bordered input-sm w-full max-w-xs rounded"
                        x-model="formForgetPasswordVerify.token" required />
                </div>
                <input type="hidden" name="email_reset_password" value="" id="emailResetPassword">
                <input type="hidden" name="token_reset_password" value="" id="tokenResetPassword">


                <div class="flex justify-center mt-3">
                    <button class="btn btn-info btn-sm rounded w-full max-w-xs text-white" type="submit">Send</button>
                </div>

            </div>
        </form>
    </div>
</div>
