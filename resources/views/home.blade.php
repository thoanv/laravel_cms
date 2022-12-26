@extends('layouts.app')
@section('title', $aboutUs['company'])
@section('content')
    <main id='homeMinHotel'>
        <div class='specialBlock_1'>
            <h1 style='display: none'>{{$aboutUs['company']}}</h1>
            <div class='owl-carousel owl-theme slide'>
                @foreach($slides as $slide)
                <div class='wrapBox'>
                    <div class='imgBanner'>
                        <picture>
                            <source media='(min-width:768px)' srcset='{{$slide['image']}}'>
                            <img alt='khách sạn tình yêu' src='{{$slide['image']}}'>
                            </source>
                        </picture>
                    </div>
                    <div class='textPart'>
                        <p class='text_1'>{{$slide['title']}}</p>
                        <p class='text_2'>{!! $slide['description'] !!}</p>
                        <div class='btnFindMore marTop_30'>
                            <a class='btnType_1 callContactLocate' data-target='#popupContact_1' data-toggle='modal'
                               styleContact='chatZalo'>Liên hệ</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <article class='container px-0 py-3 mt-md-3 mb-2'>
            <section class='row mx-0 flex-md-row-reverse justify-content-center secti-img-text'
                     style='flex-direction: column-reverse;'>
                <aside class='col-md-7 mb-2'>
                    <img alt='khách sạn tình yêu' class='col-12 px-0 pr-md-5' src='uploads/img/mixhotel-gt-.webp'>
                </aside>
                <aside class='col-md-5 d-flex align-items-center py-3'>
                    <div class='pt-md-3 px-md-5 background-white-smoke-md pb-md-3'>
                        <p class='mb-0 size-2vw'>
                            <b style='font-size: 25px; color: #000'>ĐỪNG ĐỂ TÌNH YÊU CỦA BẠN</b>
                        </p>
                        <p class='underline-theme-1 size-2vw mb-md-4 mb-4'>
                            <b>
                                <i style='font-size: 22px;'>CHỈ CÓ MỘT MÀU!</i>
                            </b>
                        </p>
                        <p class='mb-1 size-1vw text-justify mb-md-4' style='font-size: 20px;'>
                            Ở Min Hotel, chúng tôi giúp bạn vẽ bức tranh tình
                            yêu của chính mình bằng những sắc màu
                            tươi mới, để mỗi phút giây bên nhau đều như "Phút yêu đầu"
                        </p>
{{--                        <a href='#' style='font-size: 20px;'>Xem thêm &gt;&gt;</a>--}}
                    </div>
                </aside>
            </section>
        </article>
        @include('components.experience')
        @foreach($categories as $cate)
        <div class='specialBlock_5'>
            <div class='container'>
                <div class='titleBlock_1'>
                    <a href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <h2 class='titleText'>{{$cate['name']}} </h2>
                    </a>
                </div>
                <div class='owl-carousel owl-theme owlSpecialBlock_5'>
                    @foreach($cate['rooms'] as $room)
                    <div class='smallBlock'>
                        <div class='specialBlock_6'>
                            <a class='imgPart figure2' href='{{route('slug',['category_slug'=> $cate['slug'], 'slug' => $room['slug']])}}'>
                                <img alt='{{$room['name']}}' loading='lazy'
                                     src='{{$room['avatar']}}'>
                            </a>
                            <div class='textPart'>
                                <div class='part_1' style="display: inline-block">
                                    <div>
                                        <a class='aTagTitle' href='{{route('slug',['category_slug'=> $cate['slug'], 'slug' => $room['slug']])}}'>
                                            <h4 class='titleNews mt-0'>{{$room['name']}} </h4>
                                        </a>
                                    </div>

                                    <div class='text'>
                                        <i class='iTagText'>Giá từ:</i>
                                        <a class='iTagText_2'>{{$room['price_h']}}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class='btnViewMore'>
                    <a class='btnType_3 figure2' href='{{route('slug',['category_slug' => $cate['slug']])}}'>
                        <p class='text'>Xem thêm</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        @include('components.gallery')
        <article class='container py-5 highlightPostBlock'>
            <div class='text_cent'>
                <div class='titleBlock_1'>
                    <p class='titleText'>TIN TỨC & SỰ KIỆN</p>
                </div>
            </div>
            <div class='owl-carousel owl-theme specialBlock_3'>
                @foreach($posts as $post)
                @include('components.post-item',['post' => $post])
                @endforeach
            </div>
        </article>
        <div class='specialBlock_2'>
            <div class='wrapAllMaps'>
                <div class='smallPart'>
                    <div class='mapPart'>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.5499468464823!2d105.80076605214919!3d21.004843907828462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad4066d89afb%3A0x2e1e293d9a5664d8!2sMin%20Hotel!5e0!3m2!1svi!2s!4v1655431491435!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
