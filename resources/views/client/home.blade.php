@extends('client.layouts.master')
@section('content')
<div class="back-wrapper">
    <!--================= Back Hero Start Here =================-->
    <div class="back-hero-area md-mt-40">
        <div class="container">

        </div>
    </div>

    <div class="back-trending-stories">
        <div class="container">
            <div class="back-title">
                <h2>Post New </h2>
            </div>
            <ul class="back-trending-slider owl-carousel">

                @include('client.components.home-post-new' , ['data' => $data['posts_new']])
            </ul>
        </div>
    </div>



    <div class="back-add text-center"><div class="container"><img src="{{ asset('theme/client/assets/images/add2.jpg')}}" alt="add-image"></div></div>

   @include('client.components.home-amount',
   [
    'view' => $data['view_post'] ,
    'cate' => $data['cate']

   ])
    <!--================= Back Feature Posts End Here =================-->

    <!--================= Back Footer Top Area Start Here =================-->
    {{-- <div class="back-hero-area footer-top-area">
        <ul class="back-footer-top-slider owl-carousel">
            <li>
                <div class="image-area">
                    <a href="#"><img src="{{ asset('theme/client/assets/images/footer-top/1.jpg')}}" alt="image"></a>
                    <div class="back-btm-content">
                        <a href="#" class="back-cate back-life">Lifestyle</a>
                        <h3><a href="#">The 15 best designer tote bags on that carry it all of the sports</a></h3>
                        <ul>
                            <li class="back-author"><span><img src="{{ asset('theme/client/assets/images/author/1.jpg')}}" alt="image"></span><a href="#">by Jon Deo</a></li>
                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>March 29, 2022</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="image-area">
                    <a href="#"><img src="{{ asset('theme/client/assets/images/footer-top/2.jpg')}}" alt="image"></a>
                    <div class="back-btm-content">
                        <a href="#" class="back-cate back-tra">Travel</a>
                        <h3><a href="#">Kilitary-inspired fashions take on new design bnoloine war</a></h3>
                        <ul>
                            <li class="back-author"><span><img src="{{ asset('theme/client/assets/images/author/2.jpg')}}" alt="image"></span><a href="#">by Jon Deo</a></li>
                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>March 29, 2022</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="image-area">
                    <a href="#"><img src="{{ asset('theme/client/assets/images/footer-top/3.jpg')}}" alt="image"></a>
                    <div class="back-btm-content">
                        <a href="#" class="back-cate back-tech">Technology</a>
                        <h3><a href="#">Advanced sensor system may open door to zero death driving</a></h3>
                        <ul>
                            <li class="back-author"><span><img src="{{ asset('theme/client/assets/images/author/2.jpg')}}" alt="image"></span><a href="#">by Jon Deo</a></li>
                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>March 29, 2022</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="image-area">
                    <a href="#"><img src="{{ asset('theme/client/assets/images/footer-top/4.jpg')}}" alt="image"></a>
                    <div class="back-btm-content">
                        <a href="#" class="back-cate back-fashion">Fashion</a>
                        <h3><a href="#">Palenciaga and crocs team new ‘pool’ style of other nation</a></h3>
                        <ul>
                            <li class="back-author"><span><img src="{{ asset('theme/client/assets/images/author/2.jpg')}}" alt="image"></span><a href="#">by Jon Deo</a></li>
                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>March 29, 2022</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="image-area">
                    <a href="#"><img src="{{ asset('theme/client/assets/images/footer-top/5.jpg')}}" alt="image"></a>
                    <div class="back-btm-content">
                        <a href="#" class="back-cate back-poli">Politics</a>
                        <h3><a href="#">wearing black pullover hoodie to smoke light in mask his own</a></h3>
                        <ul>
                            <li class="back-author"><span><img src="{{ asset('theme/client/assets/images/author/2.jpg')}}" alt="image"></span><a href="#">by Jon Deo</a></li>
                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>March 29, 2022</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div> --}}
    <!--================= Back Footer Top Area End Here =================-->
</div>
@endsection

