@extends('layouts.app')
@section('title', $category['name'])
@section('canonical', route('slug',['category_slug'=> $category['slug']]))
@section('content')
    <main class="container-fluid" id="cateNewsMix">
        <article class="background-Solitude px-0">
            <nav aria-label="breadcrumb" class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item size-14 px-1">
                        <a href="{{route('home')}}">Trang chủ</a>
                    </li>
                    <li aria-current="page" class="breadcrumb-item active size-14">
                        <a>{{$category['name']}} </a>
                    </li>
                </ol>
            </nav>
        </article>
        <article class="container odd-row-reverse">
            @foreach($rooms as $k_room => $room)
                @if($k_room % 2 == 0)
                    <section class="row p-md-5 py-4">
                        <div class="col-md-7">
                            <figure>
                                <a href="{{route('slug',['category_slug' => $category['slug'], 'slug'=> $room['slug']])}}">
                                    <img alt="So Close" class="img-full-width" src="{{$room['avatar']}}"
                                         alt="{{$room['name']}}">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-5">
                            <p class="size-2vw">
                                <a href="{{route('slug',['category_slug' => $category['slug'], 'slug'=> $room['slug']])}}">
                                    <b>{{$room['name']}}</b>
                                </a>
                            </p>
                            <div class="description">
                                {!! $room['description'] !!}
                            </div>
                            <blockquote class="border-dashed-y pt-3">
                                <ul class="size-1vw paddingLeft_25">
                                    <li>
                                        <b>Phòng cho gia đình:</b>
                                        <i></i>
                                    </li>
                                    <li>
                                        <b>Điều hòa nhiệt độ:</b>
                                        <i></i>
                                    </li>
                                </ul>
                            </blockquote>
                            <p>
                                giá ngày:
                                <b>{{$room['price_h']}}</b>
                            </p>
                            <p>
                                giá qua đêm:
                                <b class="color-theme-2">{{$room['price_d']}}</b>
                            </p>
                            <a href="{{route('slug',['category_slug' => $category['slug'], 'slug'=> $room['slug']])}}"
                               rel="nofollow">
                                <button class="button-rectangle-small">ĐẶT PHÒNG</button>
                            </a>
                        </div>
                    </section>
                @else
                    <section class="row p-md-5 py-4">
                        <div class="col-md-7">
                            <figure>
                                <a href="{{route('slug',['category_slug' => $category['slug'], 'slug'=> $room['slug']])}}">
                                    <img alt="Wild n Free" class="img-full-width" src="{{$room['avatar']}}"
                                         alt="{{$room['name']}}">
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-5">
                            <p class="size-2vw">
                                <a href="{{route('slug',['category_slug' => $category['slug'], 'slug'=> $room['slug']])}}">
                                    <b>{{$room['name']}}</b>
                                </a>
                            </p>
                            <div class="description">
                                {!! $room['description'] !!}
                            </div>
                            <blockquote class="border-dashed-y pt-3">
                                <ul class="size-1vw paddingLeft_25">
                                    <li>
                                        <b>Phòng cho gia đình:</b>
                                        <i></i>
                                    </li>
                                    <li>
                                        <b>Điều hòa nhiệt độ:</b>
                                        <i></i>
                                    </li>
                                </ul>
                            </blockquote>
                            <p>
                                giá ngày:
                                <b>{{$room['price_h']}}</b>
                            </p>
                            <p>
                                giá qua đêm:
                                <b class="color-theme-2">{{$room['price_d']}}</b>
                            </p>
                            <a href="{{route('slug',['category_slug' => $category['slug'], 'slug'=> $room['slug']])}}"
                               rel="nofollow">
                                <button class="button-rectangle-small">ĐẶT PHÒNG</button>
                            </a>
                        </div>
                    </section>
                @endif
            @endforeach
        </article>
        @if($category['description'])
        <article class="mt-4 mb-5 px-0 d-flex justify-content-center">
            <section class="container px-md-5 text-justify background-white-smoke py-3 border-lightGray">
                <header class="text-center text-md-left">
                    <p class="title-section underline-theme-color-2-sort-center-mobi-left-desktop size-4vw">
                        <b>{{$category['name']}} </b>
                    </p>
                </header>
                <div class="size-1vw data_contents">
                    {!! $category['description'] !!}
                </div>
            </section>
        </article>
        @endif
        @include('components.gallery')
    </main>
@endsection
