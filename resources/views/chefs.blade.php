@extends('layouts.app')

@section('title')
    Chefs
@endsection

@section('content')

    <body class="bg-[#F2E8CF]">
        <div class="text-lg text-red-600 text-center italic font-bold pt-6">
            OUR CHEFS
        </div>

        <div class="text-2xl text-black text-center font-black">
            We offer the best<br>
            ingredients for you
        </div>


        <div class="flex mt-15">
            <div class="w-1/3">
                <div class="relative bg-white border border-gray-600 p-1 text-center">
                    <div>
                        <img src="img/chefs-01.jpg" class="w-full" alt="">
                    </div>

                    <div class="text-lg text-black p-2">
                        Randy Walker
                    </div>

                    <div class="text-sm p-2">
                        Barmen
                    </div>
                </div>
            </div>

            <div class="w-1/3 mx-3">
                <div class="relative bg-white border border-gray-600 p-1 text-center">
                    <div>
                        <img src="img/chefs-02.jpg" class="w-full" alt="">
                    </div>

                    <div class="text-lg text-black p-2">
                        David Martin
                    </div>

                    <div class="text-sm p-2">
                        Pizza Chef
                    </div>
                </div>
            </div>

            <div class="w-1/3">
                <div class="relative bg-white border border-gray-600 p-1 text-center">
                    <div>
                        <img src="img/chefs-03.jpg" class="w-full" alt="">
                    </div>

                    <div class="text-lg text-black p-2">
                        Peter Parkson
                    </div>

                    <div class="text-sm p-2">
                        Ingridients Chef
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
