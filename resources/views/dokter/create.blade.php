@extends('layout')

@section('title', 'Import Dokter')

@section('content')

<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen flex items-center justify-center font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded-lg p-10">
                <div class="flex flex-col sm:flex-row items-center">
                    <h2 class="font-semibold text-lg mr-auto">@yield('title')</h2>
                    <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>
                <div class="mt-5">
                    <form action="{{ route('dokter.store') }}" method="POST" class="form" enctype="multipart/form-data">
                        @csrf
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Unggah File Excel</label>
                        <p>*Pastikan</p>
                        <div class='flex items-center justify-center w-full'>
                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Pilih File</p>
                                </div>
                                <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="hidden" name="file_excel"/>
                            </label>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                            <a href="{{ route('dokter.index') }}" class="transition duration-300 ease-in-out mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-lg hover:shadow-lg">Batal</a>
                            <button class="transition duration-300 ease-in-out mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-lg hover:shadow-lg " type="submit">Import</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
