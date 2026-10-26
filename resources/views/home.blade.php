@extends('layouts.app')


@section('title')
    Home
@endsection

@section('content')

    <body class="bg-[#F2E8CF]">



        <div class="text-2xl py-12">Our Orders! <span>{{ $users->count() }}</span></div>

        <div class="grid grid-cols-2 gap-4 text-2xl">
            @foreach ($users as $user)
                <div class="shadow-xl p-6 m-6 rounded-2xl bg-red-800 hover:bg-red-700 inset-shadow-sm inset-shadow-red-500">
                    <div>
                        <b>Id:</b> {{ $user->id }}
                    </div>

                    <div>
                        <b>Name:</b> {{ $user->name }}
                    </div>

                    <div>
                        <b>Surname:</b> {{ $user->surname }}
                    </div>

                    <div>
                        <b>Table No:</b> {{ $user->table_no }}
                    </div>

                    <div>
                        <b>Orders</b> {{ $user->order }}
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
</body>
