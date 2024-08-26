  <div class="bg-black mt-10">
      <footer class="text-gray-500" x-data="fetchData()"  x-init="fetchComfreeContent()">
          <div class="container mx-auto w-full max-w-[1150px]">
              <div class="flex flex-col lg:flex-row py-8 justify-between gap-4 mx-4">
                  <div class="flex flex-col w-full lg:w-1/2 space-y-2">
                      <h4 class="footer-title font-bold text-white text-base" x-html="footer.title1">Comfree Theme</h4>
                      <div class="w-full lg:w-3/4">
                          <span class="text-sm" x-text="footer.description1">Comfree Theme merupakan tema toko online
                              yang dibuat khusus untuk
                              Commerce Module</span>
                      </div>
                      <div class="flex flex-row items-center gap-6">
                          <div class="w-4 h-4">
                              <a href="#">
                                  <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none"
                                      stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                  </svg>
                              </a>
                          </div>
                          <div class="w-4 h-4">
                              <a href="#">
                                  <svg class="h-6 w-6 text-gray-500" width="24" height="24" viewBox="0 0 24 24"
                                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" />
                                      <rect x="4" y="4" width="16" height="16" rx="4" />
                                      <circle cx="12" cy="12" r="3" />
                                      <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                                  </svg>
                              </a>
                          </div>
                          <div class="w-4 h-4">
                              <a href="#">
                                  <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none"
                                      stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path
                                          d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />
                                      <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" />
                                  </svg>
                              </a>
                          </div>
                          <div class="w-4 h-4">
                              <a href="#">
                                  <svg class="h-6 w-6 text-gray-500" width="24" height="24" viewBox="0 0 24 24"
                                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" />
                                      <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                      <path
                                          d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                      <circle cx="11" cy="16" r="1" />
                                      <polyline points="12 16 12 11 14 12" />
                                  </svg>
                              </a>
                          </div>
                      </div>

                  </div>
                  <div class="flex flex-col lg:flex-row w-full lg:w-1/2 justify-between gap-2">
                      <div class="flex flex-col w-1/2 space-y-2">
                          <h4 class="footer-title font-bold text-white text-base" x-html="footer.title2">Link Penting
                          </h4>
                          <template x-for="item in footer.links">
                              <a class="link link-hover text-sm" x-text="item.name.data.text">Konfirmasi Pembayaran</a>
                          </template>
                      </div>
                      <div class="flex flex-col w-1/2 space-y-2">
                          <h4 class="footer-title font-bold text-white text-base" x-html="footer.title3">Market Place
                          </h4>
                          <div class="flex flex-row gap-2">
                              <template x-for="item in footer.application">
                                  <div class="h-12 w-12">
                                      <a :href="item.name.data.url">
                                          <img :src="item.icon.data"
                                              class="rounded-md" alt="">
                                      </a>
                                  </div>
                              </template>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="border-t border-slate-700"></div>
          <div class="container mx-auto w-full max-w-[1150px]">
              <div class="flex py-4 mx-4">
                  <span class="text-sm" x-html="footer.copyright">@Copyright Uasoft 2024. All Rights Reserved</span>
              </div>
          </div>
      </footer>

  </div>
