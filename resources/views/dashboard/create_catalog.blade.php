@extends('components.layout')

<x-slot:title>
    {{ $title }}
</x-slot:title>

@section('dashboard-jongveksi')
    <h1 class="text-[11px] flex flex-wrap ">{{ Breadcrumbs::render('create.catalog') }}</h1>

    <div class="w-full relative  rounded-md px-[40px] pt-10  mt-10">
        <div class="container  items-center  ">
           
         <form action="{{ route('catalog.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf

                <div>
                    <label for="inputName" class="block mb-2.5  text-sm font-medium text-heading">Name Produk</label>
                    <input type="text" id="inputName" name="name_produk"
                        class="outline-white  border-body border border-default-medium text-heading text-sm  block w-full px-2.5 py-2 mb-3 shadow-sm rounded-md placeholder:name"
                        placeholder="" required />
                </div>
                <div>
                    <label for="inputName" class="block mb-2.5  text-sm font-medium text-heading">Name Produk</label>
                    <input type="text" id="inputName" name="sub_judul"
                        class="outline-white  border-body border border-default-medium text-heading text-sm  block w-full px-2.5 py-2 mb-3 shadow-sm rounded-md placeholder:name"
                        placeholder="" required />
                </div>
                <div>
                    <label for="inputPrice" class="block mb-2.5   text-sm font-medium text-heading">Price</label>
                    <input type="text" id="inputPrice" name="price"
                        class="outline-white border border-body  border-default-medium text-heading text-sm  block w-full px-3 py-2.5 mb-3 shadow-sm  rounded-md placeholder:text-body"
                        placeholder="" required />
                </div>
                <div>
                    <label for="inputDescription" class="block mb-2.5  text-sm font-medium text-heading">Description
                        Input</label>
                    <textarea type="text" id="inputDescription" name="description"
                        class="outline-white border border-body border-default-medium text-heading text-base  block w-full px-4 py-3.5 shadow-sm rounded-md placeholder:text-body"
                        placeholder="" required> </textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mt-3" for="file_input">Upload file</label>
                    <input name="image"
                        class="block w-full text-sm text-black border py-2 px-4 border-body rounded-lg cursor-pointer bg-white focus:outline-none"
                        id="file_input" type="file">
                        </div>
                        <button type="submit" class="bg-red-jongveksi hover:bg-black-jonveksi rounded-sm text-white mt-6 py-2 px-10" >Create Data</button>
            </form>
        
    </div>
    </div>
@endsection
