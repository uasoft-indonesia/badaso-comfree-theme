@extends('comfree-theme::layout.index')
@section('title')
@endsection
@section('mainContent')
    <div class="container mx-auto w-full max-w-[1150px]">
        <div class="grid grid-cols-2 mt-10 mx-4">
            <div class="w-full ">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                        class="w-10/12 h-96 rounded-lg" alt="Shoes" />
                </figure>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="">
                    <span class="font-bold text-lg">Do What You Love</span>
                </div>
                <div>
                    <span class="text-md">Rp 500.000</span>
                </div>
                <div>
                    <span class="text-sm text-gray-400">Kaos dengan desain menarik dan nyaman digunakan. Dibuat khusus untuk
                        Anda yang ingin tampil menarik dengan kesan simple dan modern</span>
                </div>
                <div>
                    <button class="btn btn-wide bg-green-400 text-white rounded hover:text-black">Beli Sekarang</button>
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
                            <td class="text-gray-500 font-bold">Berat</td>
                            <td>Quality Control Specialist</td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td class="text-gray-500 font-bold">SKU</td>
                            <td>Desktop Support Technician</td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td class="text-gray-500 font-bold">Kategori</td>
                            <td>Tax Accountant</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <span class="text-gray-400 text-sm">Ugmonk merupakan brand yang fokus pada kualitas dan desain yang menarik, memberikan Anda identitas unik dari lainnya.</span>
            </div>
        </div>

    </div>
@endsection
