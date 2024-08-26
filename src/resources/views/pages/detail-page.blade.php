@extends('comfree-theme::layout.index')
@section('title')
@endsection
@section('mainContent')
    <div x-data="fetchData()" x-init="fetchProductDetail()">
        <div class="container mx-auto w-full max-w-[1150px]">

            <div class="flex flex-col lg:flex-row gap-6 mt-10 mx-4">
                <div class="flex">
                    <figure><img :src="products.image" class="w-full h-96 rounded-lg" alt="Shoes" />
                    </figure>
                </div>
                <div class="flex flex-col space-y-4">
                    <div class="">
                        <span class="font-bold text-lg" x-text="products.name">Do What You Love</span>
                    </div>
                    <div>
                        <span class="text-md"  x-money.id-ID.IDR.decimal="products.price"></span>
                    </div>
                    <div>
                        <span class="text-sm text-gray-400" x-html="products.desc"></span>
                    </div>

                    <div x-data="{ count: 1 }">
                        <div class="flex flex-nowrap">
                            <button class="w-8 h-8 flex items-center justify-center border rounded-l-md focus:outline-none"
                                x-on:click="count = count > 0 ? count-1 : count"> <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                </svg></button>

                            <input type="text" class="bg-white border-t border-b w-12 h-8 text-center focus:outline-none"
                                x-model="count">
                            <button class="w-8 h-8 flex items-center justify-center border rounded-r-md focus:outline-none"
                                x-on:click="count++"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg></button>
                        </div>

                    </div>

                    <div>
                        <button class="btn btn-wide bg-green-400 text-white rounded hover:text-black">Beli
                            Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-200 mt-10 mb-5"></div>
        <div class="container mx-auto w-full max-w-[1150px]">
            <div class="flex flex-col space-y-2 mx-4">
                <div class="flex justify-center">
                    <span class="font-bold">Deskripsi</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="table">
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <td class="text-gray-500 font-bold">Stok</td>
                                <td x-text="products.quantity">Quality Control Specialist</td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td class="text-gray-500 font-bold">SKU</td>
                                <td x-text="products.sku">Desktop Support Technician</td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td class="text-gray-500 font-bold">Kategori</td>
                                <td x-text="products.category">Tax Accountant</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div>
                    <span class="text-gray-400 text-sm" x-html="products.desc"></span>
                </div>
            </div>

        </div>
    </div>
@endsection
