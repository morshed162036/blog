@extends('layouts.app')

@section('content')
    <div clas="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do You want to become a developer?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2021/02/04/18/37/flash-drive-5982253_960_720.jpg" width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Laborum libero, pariatur placeat recusandae enim veniam ratione ipsum officiis facilis delectus reiciendis id quidem nulla voluptatibus corporis laboriosam similique officia consequuntur?
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor nulla vero corrupti! Natus corrupti delectus velit ducimus unde consequuntur vero, odio, ab, voluptatem laborum quasi repudiandae eligendi qui minus enim?
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More</a>
        </div>
        
    </div>
@endsection