@extends('components.layout')

<x-slot:title>
    {{ $title }}
</x-slot:title>

@section('dashboard-jongveksi')
    <h1 class="text-[11px] flex text-left  mb-20 ">{{ Breadcrumbs::render('slider.index') }}</h1>
@endsection