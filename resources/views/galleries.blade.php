@extends('layouts.app')
@section('title', 'Liên hệ')
@section('content')
    <article class="container-fluid background-Solitude px-0">
        <nav aria-label="breadcrumb" class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item size-14 px-1">
                    <a href="{{route('home')}}">Trang chủ</a>
                </li>
                <li aria-current="page" class="breadcrumb-item active size-14">
                    <a>{{$category['name']}}</a>
                </li>
            </ol>
        </nav>
    </article>
    <main class="mb-md-5 pb-md-5 galerryMix">
        <article class="secMainContent">
            <div class="py-5 container">
                <div class="text_cent">
                    <div class="titleBlock_1">
                        <a href="/gallery/">
                            <p class="titleText">{{$category['name']}}</p>
                        </a>
                    </div>
                </div>
                <ul class="nav nav-pills filter-link m-b-30">
                </ul>
                <div class="row">
                    @foreach($rooms as $room)
                    <div class="col-md-4">
                        <figure class="gold-rectangle slideshow">
                            <a href="{{route('slug',['category_slug' => $room->category->slug, 'slug' => $room['slug']])}}">
                                <img alt="{{$room['name']}}" src="{{$room['avatar']}}">
                            </a>
                        </figure>
                        <p class="mt-3 text-center color-black">
                            <a href="{{route('slug',['category_slug' => $room->category->slug, 'slug' => $room['slug']])}}">{{$room['name']}}</a>
                        </p>
                    </div>
                    @endforeach
                </div>

            </div>
        </article>
    </main>
@endsection
