@extends('components.layout')

<x-slot:title>
    {{ $title }}
</x-slot:title>

@section('dashboard-jongveksi')
    <h1 class="text-[11px] ">{{ Breadcrumbs::render('dashboard') }}</h1>
    <h1 class="text-2xl tracking-[1px] pt-2  font-bold">Selamat Datang {{ Auth::user()->name }}</h1>
@endsection
