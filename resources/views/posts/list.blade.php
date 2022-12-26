@extends('layouts.app')
@section('title', 'MinHotel')
@section('content')
    <main class="container-fluid" id="cateNewsMix">
        <article class="background-Solitude px-0">
            <nav aria-label="breadcrumb" class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item size-14 px-1">
                        <a href="{{route('home')}}">Trang chủ</a>
                    </li>
                    <li aria-current="page" class="breadcrumb-item active size-14">{{$category['name']}}</li>
                </ol>
            </nav>
        </article>
        <div class="secMainContent">
            <div class="container">
                <div class="text_cent">
                    <div class="titleBlock_1">
                        <p class="titleText">{{$category['name']}}</p>
                    </div>
                </div>
                <div class="row rowFix">
                    @foreach($posts as $post)
                        @include('components.post-item',['post'=> $post])
                    @endforeach
                </div>
            </div>
            <div class="justify-content-center d-flex col-12">
                {{$posts->links()}}
                <style>
                    .page-item.active .page-link {
                        z-index: 3;
                        color: #fff;
                        background-color: var(--theme-color-1)!important;
                        border-color: var(--theme-color-1)!important;;
                    }
                </style>
                <!-- $(".page-link").click(function(){ -->

                <!-- $.get(link).done(function(data){ -->
                <!-- $('#MainerHomeGP').html(data.css("#MainerHomeGP")) -->


            </div>
        </div>
       @include('components.gallery')
    </main>
@endsection
