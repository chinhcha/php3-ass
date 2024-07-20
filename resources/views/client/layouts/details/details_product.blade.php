@extends('client.layouts.master')
@section('detail')
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Blog Fullwidth</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li>Blog Fullwidth</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->

    <!--================= Blog Section Start Here =================-->
    <div class="back__blog__area back-blog-page back-blog-page-full pt-70 pb-60">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="blog-grid">
                     @foreach ($data as $item)
                     <div class="single-blog">

                        <div class="inner-blog">
                            <div class="blog-img">
                                <img src="{{asset($item->image)}}" alt="Blog Image">

                            </div>
                            <div class="blog-content">
                                <ul class="top-part">
                                    <li>
                                        <img src="{{asset('theme/client/assets/images/author/1.jpg')}}" alt="image">
                                    </li>
                                    <li class="date-part">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> October 10, 2022
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> 2 Comment
                                    </li>
                                </ul>

                                <h3 class="blog-title"><a href="blog-details.html">
                                    <li>{{$item->title}} </li>
                                </a></h3>
                                <p class="blog-desc">{{$item->content}}</p>
                                <a href="{{route('detail',$item->id)}}" class="back-btn-border">Read More <i class="arrow_right"></i></a>
                            </div>
                        </div>

                    </div>
                     @endforeach
                  


                    <!--================= Pagination Section End Here =================-->
                    <ul class="back-pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="back-next"><a href="#">Next<i class="arrow_carrot-right"></i></a></li>
                    </ul>
                    <!--================= Pagination Section End Here =================-->
                </div>
            </div>
        </div>
    </div>
    <!--================= Blog Section End Here =================-->

</div>
@endsection
