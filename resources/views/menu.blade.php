@extends('layouts.app')

@section('title')
    Menu
@endsection


@section('content')

    <body class="bg-black/50 object-contain" style="background-image: url('/img/pizza-bg.jpg')">
        <div class="flex h-[350px] w-full items-center justify-center rounded-3xl">
            <div class="text-center text-7xl font-bold italic">
                Italy Pizza Menu
            </div>
        </div>

        <main class="mx-auto -mt-20 max-w-7xl px-4 pb-12">
            <div class="grid grid-cols-3 flex flex-wrap gap-6 p-4">
                @foreach ($menu as $item)
                    <div class="gap-6">
                        <div class="h-full rounded-3xl bg-white p-5">
                            @if ($item->image)
                                <img src="{{ asset('img/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="h-70 w-full rounded-2xl object-cover">
                            @endif

                            <div class="text-center">
                                <h2 class="mt-4 text-2xl font-bold">
                                    {{ $item->name }}
                                </h2>

                                <p class="text-base mt-2 text-gray-600">
                                    {{ $item->description }}
                                </p>

                                <p class="mt-4 text-2xl font-bold text-red-600">
                                    {{ number_format($item->price, 2) }} TMT
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </body>

    </html>
@endsection
