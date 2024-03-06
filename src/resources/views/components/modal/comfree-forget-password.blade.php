<input type="checkbox" class="modal-toggle" />
<div class="modal" id="modal_forget_password" role="dialog">
    <div class="modal-box">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" x-on:click="modalActionClose()">✕</button>
        <div class="flex justify-center " x-data="fetchData()" x-init="fetchConfiguration()">
            <div class="w-44">
                <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                        class="w-full h-full object-cover" alt=""></a>
            </div>
        </div>
        <div class="flex justify-center mt-2">
            <span class="text-md text-center font-bold">Forget Password</span>
        </div>
        <form action="" x-data="fetchAuthenticated()" @submit.prevent="forgetPassword()">
            <div class="flex flex-col w-full py-4">
                <div class="flex justify-center">
                    <input type="text" placeholder="Email"
                        class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formForgetPassword.email"
                        required />
                </div>


                <div class="flex justify-center mt-3">
                    <button class="btn btn-info btn-sm rounded w-full max-w-xs text-white" type="submit">Send</button>
                </div>

            </div>
        </form>
    </div>
</div>
