@extends('layouts.app')
@section('title', 'MinHotel')
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
<main class="container-fluid" id="introduceMixhotel">
    <section class="container py-5 px-md-5 text-justify">
        <div class="titleBlock_2">
            <p class="titleText_1">{{$category['name']}}</p>
            <p class="titleText_2">Khách sạn Min Hotel</p>
            <div class="underLineTitle"></div>
        </div>
        <div class="description">
            {!! $category['description'] !!}
        </div>
    </section>
    @include('components.experience')
    @include('components.gallery')
</main>
@endsection
