@extends('components.layout')

<x-slot:title>
    {{ $title }}
</x-slot:title>

@section('dashboard-jongveksi')
    <h1 class="text-[11px] flex text-left  mb-20 ">{{ Breadcrumbs::render('catalog') }}</h1>


    <div class="relative overflow-x-auto bg-white rounded-md shadow-xs rounded-base mb-10 ">
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
        <table class="w-full  text-left rtl:text-right text-black">
            <thead class="   border-2 border-black border-default-medium border-body">
                <tr class="text-[11px]">
                    <th scope="col" class="px-6 py-3 font-medium">
                        No
                    </th>
                    <th scope="col" class="px-1 py-3 mt-3 font-medium">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        <div class="flex items-center">
                            Name Produk
                            <a href="#">
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        <div class="flex items-center">
                            Sub Judul
                            <a href="#">
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium">
                        <div class="flex items-center">
                            Price
                            <a href="#">
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3  font-medium">
                        <div class="flex items-center">
                            Description
                            <a href="#">
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3  font-medium">
                        <div class="flex items-center justify-center">
                            Action
                            <a href="#">
                                
                            </a>
                        </div>
                    </th>
                    


                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr class="bg-neutral-primary-soft border-b border-default border-body text-[10px] text-black">
                        <td class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ ++$i }}
                        </td>
                        <td class="px-6 py-4 ">
                            <img src="{{ asset('img/' . $product->image) }}" class="w-30 h-30 object-cover">
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->name_produk }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->sub_judul }}
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ $product->price }}
                        </td>
                        <td class="px-2   ">
                            {{ $product->description }}
                        </td>
                        <td class="px-10 py-4 mt-11 flex items-center  gap-4">

                            {{-- <a href="{{ route('produk.detail', $product->id)}}"
                                class="font-medium text-fg-brand hover:underline">Show</a> --}}
                        <form action="{{ route('catalog.destroy', $product->id) }}" method="POST">
                            <a href="{{ route('catalog.edit', $product->id) }}"
                                class="font-medium text-fg-brand hover:underline">Edit</a>

                           
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:underline rounded-[1px] py-2  ">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">There are no data.</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
      
    </div >
  {!! $products->withQueryString()->links('pagination::tailwind') !!}

@endsection
