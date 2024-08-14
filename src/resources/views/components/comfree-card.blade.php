  <div class="container mx-auto w-full max-w-[1150px]">
      <div class="grid grid-cols-4 gap-6 mt-10 mx-4">
          @foreach ($item_product as $key => $item)
              <div
                  class="flex flex-col rounded h-86 w-60 cursor-pointer transition ease-in-out delay-150  hover:shadow-xl duration-400 border relative">
                  <div class="flex h-3/4">
                      <figure>
                          @if (strpos($item->product_image, 'https') !== false || strpos($item->product_image, 'http') !== false)
                              <img src="{{ $item->product_image }}" class="h-full w-full" alt="Shoes" />
                          @else
                              <img src="{{ Storage::url($item->product_image) }}" class="h-full w-full" alt="Shoes" />
                          @endif

                      </figure>
                  </div>
                  <div class="flex flex-col h-1/2 p-4">
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
                  <div class="absolute top-52 w-full">
                      <div
                          class="flex justify-center bg-sky-500 hover:-translate-y-1 w-full rounded-none text-white items-center text-sm h-8">
                          Beli sekarang
                      </div>
                  </div>
              </div>
          @endforeach
      </div>

  </div>
