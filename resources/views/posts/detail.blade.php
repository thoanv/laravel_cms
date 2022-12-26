@extends('layouts.app')
@section('title', 'MinHotel')
@section('content')
    <main class="container-fluid" id="detailNewsMix">
        <article class="background-Solitude">
            <nav aria-label="breadcrumb" class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item size-14 px-1">
                        <a href="{{route('home')}}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item size-14">
                        <a href="{{route('slug',['category_slug' => $category['slug']])}}">{{$category['name']}}</a>
                    </li>
                    <li aria-current="page" class="breadcrumb-item active size-14">
                        <a>{{$post['name']}}&nbsp;</a>
                    </li>
                </ol>
            </nav>
        </article>
        <article class="mt-3 container secMainContent">
            <aside class="wrapBlock">
                <h1 class="size-3vw titlePost">
                    <b>{{$post['name']}}&nbsp;</b>
                </h1>
                <table>
                    <tbody>
                    <tr>
                        <td>Ngày đăng:  {{date('d-m-Y', strtotime($post['created_at']))}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <div class="text-justify getTableOfContentBlock">
                    {!! $post['content'] !!}
                </div>
            </aside>
        </article>
        <article class="container py-5 highlightPostBlock">
            <div class="text_cent">
                <div class="titleBlock_1">
                    <p class="titleText">TIN TỨC</p>
                </div>
            </div>
            <div class="owl-carousel owl-theme specialBlock_3 owl-loaded">
                @foreach($relates as $relate)
                    <div class="item">
                        @include('components.post-item',['post'=> $relate])
                    </div>
                @endforeach
            </div>
        </article>
    </main>
@endsection
