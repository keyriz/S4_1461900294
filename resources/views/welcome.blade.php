@extends('layout')

@section('title', 'User')

@section('content')

<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen flex items-center justify-center overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="grid mt-8 gap-10 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                <div class="flex flex-col">
                    <a href="{{ route('dokter-294.index') }}">
                        <div class="bg-white shadow-xl rounded-xl p-10">
                            <span class="text-2xl text-center">Dokter</span>
                        </div>
                    </a>
                </div>
                <div class="flex flex-col">
                    <a href="{{ route('kamar-294.index') }}">
                        <div class="bg-white shadow-xl rounded-xl p-10">
                            <span class="text-2xl text-center">Kamar</span>
                        </div>
                    </a>
                </div>
                <div class="flex flex-col">
                    <a href="{{ route('pasien-294.index') }}">
                        <div class="bg-white shadow-xl rounded-xl p-10">
                            <span class="text-2xl text-center">Pasien</span>
                        </div>
                    </a>
                </div>
                <div class="flex flex-col ">
                    <a href="{{ route('user-294.index') }}">
                        <div class="bg-white shadow-xl rounded-xl p-10">
                            <span class="text-2xl text-center">User</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
