@extends('layouts.app')
@section('title', $room['name'])
@section('image', $room['avatar'])
@section('canonical', route('slug',['category_slug'=> $category['slug'], 'slug' => $room['slug']]))
@section('content')
    <div id="detailProductMix">
        <article class="container-fluid background-Solitude px-0">
            <nav aria-label="breadcrumb" class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item size-14 px-1">
                        <a href="/">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item size-14">
                        <a href="{{route('slug',['category_slug'=> $category['slug']])}}">{{$category['name']}} </a>
                    </li>
                    <li aria-current="page" class="breadcrumb-item size-14">
                        <a>{{$room['name']}}</a>
                    </li>
                </ol>
            </nav>
        </article>
        <div class="galleryBlock_2">
            <div class="owl-carousel owl-theme owlGallery_2 owl-loaded">
                @foreach($room->images as $image)
                    <div class="item">
                        <div class="imgPart figure2" data-fancybox="gallery_2"
                             href="{{$image['url']}}">
                            <img src="{{$image['url']}}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <article class="container px-0 mt-4 secMainContent">
            <div class="row mx-0 px-0">
                <div class="col-md-12 leftBlock">
                    <p class="size-3vw">
                        <b>{{$room['name']}}</b>
                    </p>
                    <div class="description">
                        {!! $room['description'] !!}
                    </div>
                    <hr class="hr-dashed">
                    <p class="size-2vw">
                        <b>tiện nghi</b>
                    </p>
                    <div class="row">
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u517.png">
                                    wifi
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u518.png">
                                    coffee
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u519.png">
                                    tủ lạnh
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u520.png">
                                    giải trí
                                </dt>
                            </dl>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/Icon_Dochoi.png">
                                    đồ chơi
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/Icon_Phongtam.png">
                                    phòng tắm
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u521.png">
                                    hồ bơi
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u522.png">
                                    dịch vụ
                                    phòng
                                </dt>
                            </dl>
                        </div>

                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u523.png">
                                    bãi đậu
                                    xe
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u524.png">
                                    tivi
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 col-sm-3 col-6">
                            <dl class="d-flex flex-wrap icon_service">
                                <dt class="d-inline text-nowrap mb-2">
                                    <img alt="tiện nghi" src="/uploads/img/u525.png">
                                    phục vụ
                                    bạn
                                </dt>
                            </dl>
                        </div>
                    </div>
                    <hr class="hr-dashed">
                    <p class="size-2vw">
                        <b>ĐƠN GIÁ</b>
                    </p>
                    <p>
                        giá ngày:
                        <b>{{$room['price_h']}}</b>
                    </p>
                    <p>
                        giá qua đêm:
                        <b class="color-theme-2">{{$room['price_d']}}</b>
                    </p>
                    <hr class="hr-dashed">
                    <p class="size-2vw">
                        <b>mô tả chi tiết</b>
                    </p>
                    <div class="text-justify data_contents">
                        <div class="content">
                            {!! $room['content'] !!}
                        </div>
                    </div>
                </div>
                {{--                <div class="col-md-4 rightSiderbar" id="sidebarBlock">--}}
                {{--                    <div class="wrapSticky sidebar__inner">--}}
                {{--                        <div class="specialBlock_9">--}}
                {{--                            <p class="color-theme-2 titleForm">--}}
                {{--                                <b>thông tin đặt phòng</b>--}}
                {{--                            </p>--}}
                {{--                            <form action="" class="inforOrderRoomForm">--}}
                {{--                                <label for="name">Họ tên</label>--}}
                {{--                                <input class="col-12" id="name_base3" name="name" type="text">--}}
                {{--                                <div class="noti_name_base3"></div>--}}
                {{--                                <label for="phonenumber">Số điện thoại</label>--}}
                {{--                                <input class="col-12" id="phone_base3" name="phonenumber" type="number">--}}
                {{--                                <div class="noti_phone_base3"></div>--}}
                {{--                                <div class="customer-option mb-3"></div>--}}
                {{--                                <label for="place">Địa điểm</label>--}}
                {{--                                <select class="orderAddress col-12 call_address" data="Product" id="address_base3"--}}
                {{--                                        key="ta_duty_id" name="place">--}}
                {{--                                    <option disabled="disabled" selected="selected" value="">Chọn địa điểm</option>--}}
                {{--                                    <option id="61bbf417d6a5eb2920e0f6be" value="Mix Boutique Hotel 186 Hoàng Ngân ">Mix--}}
                {{--                                        Boutique Hotel 186 Hoàng Ngân--}}
                {{--                                    </option>--}}
                {{--                                    <option id="61bbf40bd6a5eb2920e0f6bc"--}}
                {{--                                            value="Mix Boutique Hotel 256B Đặng Tiến Đông ">Mix Boutique Hotel 256B Đặng--}}
                {{--                                        Tiến Đông--}}
                {{--                                    </option>--}}
                {{--                                    <option id="61bbf3fbd6a5eb2920e0f6ba"--}}
                {{--                                            value="Mix Boutique Hotel 104B Nguyễn Khuyến ">Mix Boutique Hotel 104B--}}
                {{--                                        Nguyễn Khuyến--}}
                {{--                                    </option>--}}
                {{--                                    <option id="61bbf3ecd6a5eb2920e0f6b8"--}}
                {{--                                            value="Mix Boutique Hotel 20 Phúc La Hà Đông ">Mix Boutique Hotel 20 Phúc La--}}
                {{--                                        Hà Đông--}}
                {{--                                    </option>--}}
                {{--                                </select>--}}
                {{--                                <div class="dia_diems"></div>--}}
                {{--                                <label for="phonenumber">Tên Phòng</label>--}}
                {{--                                <select class="orderRoom col-12 call_address" data="Product" id="rom_base_13"--}}
                {{--                                        key="ta_duty_id" name="place">--}}
                {{--                                    <option disabled="disabled" selected="selected" value="">Tên phòng</option>--}}
                {{--                                    <option id="6009fd8ea79a0d50e0830573" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="MIA CHERRY">MIA CHERRY--}}
                {{--                                    </option>--}}
                {{--                                    <option id="6009ff57a79a0d50e083057d" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Scarlet">Scarlet--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600a00c8a79a0d50e0830586" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Cinema">Cinema--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600ac0038a159118a146eaaa" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Tropical Love">Tropical Love--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600ac2278a159118a146eab7"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Hidden Frenzy">--}}
                {{--                                        Hidden Frenzy--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600ac3df8a159118a146eac0"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Oasis">Oasis--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600ac5388a159118a146eac9"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Bad Boy">Bad Boy--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600ac66c8a159118a146ead2"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="202 - Renai ">202 ---}}
                {{--                                        Renai--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600ac85d8a159118a146eada"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="301 - Aurora">301 ---}}
                {{--                                        Aurora--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600ac9e68a159118a146eae3"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="302 - Virgin ">302 ---}}
                {{--                                        Virgin--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bc6348a159118a146eaed" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Lullaby">Lullaby--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bc7148a159118a146eaf6" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Hội An">Hội An--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bc7bd8a159118a146eafe" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Fire">Fire--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bc8918a159118a146eb06" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Casanova">Casanova--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bc9b68a159118a146eb0f" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Pure">Pure--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bcb6c8a159118a146eb1a" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="Wild n Free">Wild n Free--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bccbf8a159118a146eb27" subname="Mix Boutique Hotel 186 Hoàng Ngân "--}}
                {{--                                            value="So Close">So Close--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bce438a159118a146eb32"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Lover">Lover--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bd0208a159118a146eb3b"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="After Sunset">After--}}
                {{--                                        Sunset--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bd1c98a159118a146eb45"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Kissing">Kissing--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bd2fa8a159118a146eb51"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Lollipop">Lollipop--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bd4b68a159118a146eb5b"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="On Top">On Top--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bd5d88a159118a146eb67"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Blowj Up">Blowj Up--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bd7168a159118a146eb71"--}}
                {{--                                            subname="Mix Boutique Hotel 256B Đặng Tiến Đông " value="Lalaland">Lalaland--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bdbec8a159118a146eb7d"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="401 - Kama">401 ---}}
                {{--                                        Kama--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600bdf138a159118a146eb87"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="402 - Lalendi ">402--}}
                {{--                                        - Lalendi--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600be0378a159118a146eb92"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="501 - Wonderland ">--}}
                {{--                                        501 - Wonderland--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600be63f8a159118a146ebbb"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="502 - Gypsy">502 ---}}
                {{--                                        Gypsy--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600be7e08a159118a146ebcb"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="601 - Poppy ">601 ---}}
                {{--                                        Poppy--}}
                {{--                                    </option>--}}
                {{--                                    <option id="600be9328a159118a146ebd7"--}}
                {{--                                            subname="Mix Boutique Hotel 104B Nguyễn Khuyến " value="701 - X.O.X.O">701 ---}}
                {{--                                        X.O.X.O--}}
                {{--                                    </option>--}}
                {{--                                    <option id="606eb8a88a15917d2a0cdb34"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Naive">Naive--}}
                {{--                                    </option>--}}
                {{--                                    <option id="606eba398a15917d2a0cdb3c"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Whisper">Whisper--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc49c18a15913d6bdc812b"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Wake up">Wake up--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc57e78a15913d6bdc8195"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Rhett Butler">Rhett--}}
                {{--                                        Butler--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc5b128a15913d6bdc81c0"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Confession">--}}
                {{--                                        Confession--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc5ce38a15913d6bdc81e1"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Holywood">Holywood--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc5f2d8a15913d6bdc81fe"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Honeymoon">Honeymoon--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc60638a15913d6bdc8216"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="The Lust">The Lust--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc61c48a15913d6bdc8229"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Flame">Flame--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc62f18a15913d6bdc823d"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Passion">Passion--}}
                {{--                                    </option>--}}
                {{--                                    <option id="60bc667a8a15913d6bdc8263"--}}
                {{--                                            subname="Mix Boutique Hotel 20 Phúc La Hà Đông " value="Get High">Get High--}}
                {{--                                    </option>--}}
                {{--                                </select>--}}
                {{--                                <div class="chon_phongs"></div>--}}
                {{--                                <div class="row py-md-3">--}}
                {{--                                    <div class="col-6">--}}
                {{--                                        <label for="dateStart">Nhận phòng</label>--}}
                {{--                                        <input class="col-12" id="nhan_phong_3" type="date">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="nhan_phongs"></div>--}}
                {{--                                    <div class="col-6">--}}
                {{--                                        <label for="dateEnd">Trả phòng</label>--}}
                {{--                                        <input class="col-12" id="tra_phong_3" type="date">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="tra_phongs"></div>--}}
                {{--                                </div>--}}
                {{--                                <div class="noti_email_base3"></div>--}}
                {{--                                <label for="clientNumber">Số Khách</label>--}}
                {{--                                <select class="col-12" id="change3" name="clientNumber">--}}
                {{--                                    <option value="2 người">2 người</option>--}}
                {{--                                    <option value="3-5 người">3-5 người</option>--}}
                {{--                                    <option value="trên 5 người">trên 5 người</option>--}}
                {{--                                </select>--}}
                {{--                                <div class="so_khachs"></div>--}}
                {{--                                <label for="request">nhu cầu của khách hàng</label>--}}
                {{--                                <textarea class="col-12" id="message_base3" name="" rows="5"></textarea>--}}
                {{--                                <div class="text-center w-100">--}}
                {{--                                    <div class="btn-submit btnload">--}}
                {{--                                        <a class="color-theme-2 w-100 py-1 d-block btn-submit-base-3 fixBtn">--}}
                {{--                                            <div class="spinner-border d-none spinner-border-product mx-2 my-auto"--}}
                {{--                                                 role="status" style="width:1.5rem;height:1.5rem;color:#e6bb2f"></div>--}}
                {{--                                            ĐẶT NGAY BÂY GIỜ--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </form>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </article>
        <div class='specialBlock_5'>
            <div class='container'>
                <div class='titleBlock_1'>
                    <a href='mix-boutique-hotel-104b-nguyen-khuyen/index.html'>
                        <h2 class="titleText">CÁC PHÒNG TƯƠNG TỰ </h2>
                    </a>
                </div>
                <div class='owl-carousel owl-theme owlSpecialBlock_5'>
                    @foreach($rooms as $item)
                        <div class='smallBlock'>
                            <div class='specialBlock_6'>
                                <a class='imgPart figure2' href='{{route('slug',['category_slug'=> $item->category->slug, 'slug' => $item['slug']])}}'>
                                    <img alt='{{$item['name']}}' loading='lazy'
                                         src='{{$item['avatar']}}'>
                                </a>
                                <div class='textPart'>
                                    <div class='part_1' style="display: inline-block">
                                        <div>
                                            <a class='aTagTitle' href='{{route('slug',['category_slug'=> $item->category->slug, 'slug' => $item['slug']])}}'>
                                                <h4 class='titleNews mt-0'>{{$item['name']}} </h4>
                                            </a>
                                        </div>

                                        <div class='text'>
                                            <i class='iTagText'>Giá từ:</i>
                                            <a class='iTagText_2'>{{$item['price_h']}}</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('components.gallery')
    </div>
@endsection
