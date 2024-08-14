<input type="checkbox" class="modal-toggle" />
<div class="modal" role="dialog" id="modal_close">
    <div class="modal-box">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" x-on:click="modalActionClose()">✕</button>
        <div class="flex justify-center" x-data="fetchData()" x-init="fetchConfiguration()">
            <div class="w-44">
                <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                        class="w-full h-full object-cover" alt=""></a>
            </div>
        </div>

        <div class="flex justify-center mt-4">
            <span class="text-base text-center">Are you sure?</span>
        </div>
        <div class="flex justify-between w-full max-w-xs ml-[70px] mr-[70px] justify-between  mt-4">
            <div>
                <button class="btn btn-error btn-sm rounded w-full max-w-xs text-white"
                    x-on:click="logout()">Yes</button>
            </div>
            <div>
                <button class="btn btn-warning btn-sm rounded w-full max-w-xs text-white"
                    x-on:click="modalActionClose()">Cancel</button>
            </div>
        </div>
    </div>

</div>
