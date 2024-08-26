  <div class="container mx-auto w-full max-w-[1150px]">
      <div class="mt-8 lg:mt-10 mb-8 px-4">

          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
              @foreach ($item_product as $key => $item)
                  <div class="flex w-full bg-white static shadow rounded-lg">
                      <div class="flex flex-col w-full h-full relative">

                          <figure>
                              @if (strpos($item->product_image, 'https') !== false || strpos($item->product_image, 'http') !== false)
                                  <img src="{{ $item->product_image }}"
                                      class="w-full h-[180px] lg:h-[220px] rounded-t-lg object-cover" alt="" />
                              @else
                                  <img src="{{ Storage::url($item->product_image) }}"
                                      class="w-full h-[180px] lg:h-[220px] rounded-t-lg object-cover" alt="" />
                              @endif

                          </figure>
                          <div class="bg-base-100 pt-[10px] px-4 pb-[30px] cursor-pointer">

                              <a href="{{ route('badaso.comfree-theme.detail', '') }}/{{ $item->slug }}">
                                  <div class="flex justify-center">
                                      <span class="font-bold text-sm text-center">{{ $item->name }}</span>
                                  </div>
                              </a>
                              @foreach ($item->product_details as $product_detail)
                                  <div class="flex justify-center">
                                      <span class="text-sm text-center text-gray-400">Rp
                                          {{ number_format($product_detail->price, 0, ' ', '.') }}</span>
                                  </div>
                              @endforeach
                          </div>
                          <div class="hidden lg:flex">
                              <div class="absolute top-48 w-full">
                                  <div
                                      class="flex justify-center bg-sky-500 hover:-translate-y-1 w-full rounded-none text-white items-center text-sm h-8">
                                      Beli sekarang
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              @endforeach
          </div>

      </div>

  </div>
