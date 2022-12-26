@php
    $menupolicy =[];
    $menuInfo = [];
    $dataMenuPolicy = \App\Models\Menu::where('key', 'menu-policy')->first();
    if(count(unserialize($dataMenuPolicy['data'])))
        $menupolicy = unserialize($dataMenuPolicy['data']);

    $dataMenuInfo = \App\Models\Menu::where('key', 'support_Information')->first();
    if(count(unserialize($dataMenuInfo['data'])))
        $menuInfo = unserialize($dataMenuInfo['data']);
@endphp
<div class='container-fluid' id='footerNKTA'>
    <div class='footerBlock_1'>
        <div class='bgCoverOver'></div>
        <div class='container containerFix'>
            <div class='row'>
                <div class='smallBlock_1'>
                    <p class='titleCol'>THÔNG TIN KHÁCH SẠN</p>
                    <div class='textPart'>
                        <p class='text text_1 company'>{{$aboutUs['company']}}</p>
                        <p class='text text_1 location'>{{$aboutUs['address']}}</p>
                        <a class='text text_1 phone' href='tel:{{$aboutUs['phone']}}'>{{$aboutUs['phone']}}</a>
                        <a class='text text_1 mail'
                           href="mailto:{{$aboutUs['email']}}"><span
                                class="__cf_email__">{{$aboutUs['email']}}</span></a>
                        <a class='text text_1 chrome' href='{{route('home')}}'>https://minhotel.vn/</a>
                    </div>
                </div>
                <div class='smallBlock_2'>
                    <p class='titleCol'>THÔNG TIN HỖ TRỢ</p>
                    @foreach($menuInfo as $info)
                        <a class='text text_2 text-uppercase' href='{{route('slug',['category_slug' => $info['slug']])}}'>{{$info['name']}}</a>
                    @endforeach
                    <div class='socialArea'>
                        <p class='titleSocial'>FOLLOW ME</p>
                        <div class='socialBlock_1'>
                            <a class='wrapSocialPart' href='{{$aboutUs['facebook']}}' rel='nofollow'
                               target='_blank' title='page'>
                                <div class='imgSocialPart'>
                                    <img alt='facebook' src='/uploads/img/faceItem_1.svg'>
                                </div>
                            </a>
                            <a class='wrapSocialPart' href='{{$aboutUs['youtube']}}'
                               rel='nofollow' target='_blank' title='page'>
                                <div class='imgSocialPart'>
                                    <img alt='youtube' src='/uploads/img/youtube_1.svg'>
                                </div>
                            </a>
                            <a class='wrapSocialPart' href='{{$aboutUs['instagram']}}' rel='nofollow'
                               target='_blank' title='page'>
                                <div class='imgSocialPart'>
                                    <img alt='instagram' src='/uploads/img/instagram_item_1.svg'>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='smallBlock_2 smallBlock_2-2'>
                    <p class='titleCol'>CHÍNH SÁCH</p>
                    @foreach($menupolicy as $policy)
                        <a class='text text_2 text-uppercase' href='{{route('slug', ['category_slug' => $policy['slug']])}}'>{{$policy['name']}}</a>
                    @endforeach

                </div>
                <div class='smallBlock_3'>
                    <p class='titleCol'>KẾT NỐI MIN HOTEL</p>
                    <div class='fanpagePart' style="padding: 0">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkhachsanminhotel&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=510085193921234" width="315" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='footerLineEnd'>
        <div class='container'>
            <div class='pTagEnd'>
                Copyright © 2022 minhotel.vn. All Rights Reserved.
            </div>
        </div>
    </div>
</div>
