  <div class="sticky top-0 z-30 bg-white shadow-lg">
      <div class="container mx-auto  w-full max-w-[1150px]">
          <div class="navbar" x-data="fetchData()" x-init="fetchConfiguration()">
              <div class="flex flex-row justify-between w-full flex-nowrap">
                  <div class="flex items-center font-bold text-lg w-1/3">
                      <div class="w-full">
                          <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                                  class="w-full lg:w-2/5 h-full object-cover" alt=""></a>
                      </div>
                  </div>
                  <div class="hidden lg:flex flex-nowrap w-1/3" x-data="fetchData()" x-init="fetchComfreeContent()">
                      <ul class="menu menu-horizontal px-1">
                          <template x-for="data in navbar">
                              <li><a x-text="data.label.data.text">Katalog</a></li>
                              {{-- <li><a>Blog</a></li> --}}
                          </template>

                          <li x-data="fetchData()" x-init="fetchProductCategory()">
                              <details>
                                  <summary>Kategori</summary>
                                  <ul class="p-2">
                                      <template x-for="item in productCategories">
                                          <li><a><span x-text="item.name"></span></a></li>
                                      </template>
                                  </ul>
                              </details>
                          </li>
                      </ul>
                  </div>
                  <div class="flex justify-end items-center w-1/3" x-data="fetchAuthenticated()">
                      <div class="hidden lg:flex ">
                          <div class="dropdown dropdown-end">
                              <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                  <div class="w-6 rounded-full">
                                      <img alt="Tailwind CSS Navbar component"
                                          src="/storage/photos/1/default-user.png" />
                                  </div>
                              </div>
                              <ul tabindex="0"
                                  class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded w-52">
                                  <li>
                                      <label for="modal_login" id="login_desktop"
                                          x-on:click="modalLogin()">Masuk</label>
                                  </li>
                                  <li><label for="modal_register" id="register_desktop"
                                          x-on:click="modalRegister()">Buat Akun</label></li>
                                  <li><label for="modal_close" id="logout_desktop"
                                          x-on:click="modalLogout()">Keluar</label></li>
                                  <li><label for="modal_close">Lihat Keranjang</label></li>
                              </ul>
                          </div>
                      </div>

                      <div class="lg:hidden">
                          <div class="dropdown dropdown-end">
                              <div tabindex="0" role="button" class="btn btn-ghost">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h8m-8 6h16" />
                                  </svg>
                              </div>
                              <ul tabindex="0"
                                  class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                  <li><a>Item 1</a></li>
                                  <li><a>Item 2</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </div>
  </div>
  </div>
