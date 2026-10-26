@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')
<div class="w-full min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{asset('img/contactpage.jpg')}}') ">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-3 gap-6">

            <div class="text-center">
                <div class="bg-white mt-12 py-4 flex flex-col justify-center">
                    <div class="text-xl text-gray-900 font-bold">
                        FIND US
                    </div>

                    <div class="text-base">
                        121 Rock Street,21<br>
                        Avenue, New York,<br>
                        NY 92103-9000
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="bg-white mt-12 py-4 flex flex-col justify-center">
                    <div class="text-xl text-gray-900 font-bold">
                        HOURS
                    </div>

                    <div class="text-base">
                        <b>Monday - Saturday</b><br>
                        9am - 7pm <br>
                        <b>Sunday</b>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="bg-white mt-12 py-4 flex flex-col justify-center">
                    <div class="text-xl text-gray-900 font-bold">
                        CALL US
                    </div>

                    <div class="text-base">
                        <a href="tel:+1234567891" class="text-red-600">
                            1 (234) 567-891
                        </a>
                    </div>

                    <div class="text-base pt-2">
                        <a href="tel:+2345333897" class="text-red-600">
                            2 (345) 333-897
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
