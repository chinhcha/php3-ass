@extends('client.layouts.master')
@section('chitiet')
    <div class="back-wrapper">
        <!--================= Back Breadcrumbs Section Start Here =================-->
        <div class="back-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Blog Detail</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Back Breadcrumbs Section End Here =================-->

        <!--================= Blog Section Start Here =================-->
        <div class="back__blog__area back-blog-page back-blog-page-single pt-70 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-inner">
                            <div class="blog-content">
                                <div class="blog-image">
                                    <img src="{{ asset($posts->image) }}" alt="Blog Image">
                                </div>

                                <h3>{{ $posts->title }}</h3>

                                <p>{{ $posts->content }}</p>
                                <div class="back-order-list">
                                    <h3>Unordered & Ordered Lists</h3>
                                    <p>It is advisable to use your network to successfully land a job. Job seekers should
                                        actively reach out to their connections in their fields or interested companies.</p>
                                    <ul>
                                        <li><i class="fa-solid fa-check"></i> Your child’s interests, likes, dislikes</li>
                                        <li><i class="fa-solid fa-check"></i> Their routines- patterns of eating, sleeping,
                                            toileting</li>
                                        <li><i class="fa-solid fa-check"></i> Your child’s current wellbeing</li>
                                        <li><i class="fa-solid fa-check"></i> Any major events taking place at home.</li>
                                    </ul>
                                </div>

                                <blockquote>Before Natalia’s village had a clean water tap, she often did have time for
                                    school. Now, she goes to school every day she presient of her local Water Committee.
                                    <em>Max Conversion</em></blockquote>

                                <p>Sometimes, even a good email get’s trapped, which requires actual human intervention.
                                    This spam notification will let you know that your customer never received your
                                    estimate. Ensure to reach out to your customer and ask them to add happening.</p>

                                <div class="blog-tags">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <ul class="mata-tags">
                                                <li class="tags">Tags:</li>
                                                @foreach ($cate as $item)
                                                    <li>{{ $item->name }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="social-links text-right">
                                                <li class="shares">Share:</li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="post-author">
                                    <div class="avatar">
                                        <img src="{{ asset('theme/client/assets/images/single-blog/1') }}.jpg"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Sara Mening</h4>
                                        <p>Only a quid bum bag cheeky bugger geeza car boot what a load of rubbish super
                                            burke tomfoolery up the kyver plastered.</p>
                                        <span class="designation">All stories by : Sara Mening</span>
                                    </div>
                                </a>

                                <div class="single-nav">
                                    <div class="back-prev"> <a href="#"><i class="fa-solid fa-arrow-right"></i>
                                            Preovious Post <em>Social media strategies</em></a> </div>

                                    <div class="back-next"><a href="#">Next Post <i
                                                class="fa-solid fa-arrow-right"></i> <em> Amazing theme performance</em></a>
                                    </div>
                                </div>


                                <div class="back-blog-related">
                                    <div class="container">
                                        <div class="back-title back-small-title">
                                            <h2>Related Posts</h2>
                                        </div>
                                        <ul id="back-blog-slider" class="owl-carousel owl-theme">

                                            @foreach ($cate as $item)

                                            <li class="item">
                                                <div class="back-inner">
                                                    <div class="back-blog-image">
                                                        <a href="blog-details.html"><img
                                                                src="{{ asset($item->image) }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="back-blog-content">
                                                        <em class="back-blog-date">{{$item->created_at}}</em>
                                                        <a href="blog-details.html">
                                                            <h3>{{$item->title}} <br> schools & social innovation</h3>
                                                        </a>
                                                        <ul>
                                                            <li class="back-author"> <span><img
                                                                        src="{{ asset('theme/client/assets/images/author/1.jpg') }}"
                                                                        alt="image"></span> <a href="#">
                                                </a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                      @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="author-comment">
                                    <div class="back-title back-small-title">
                                        <h2>3 Comments</h2>
                                    </div>
                                    <ul>

                                        @foreach ($comments as $item)
                                        @php
                                        $date_one = $item->created_at;
                                        $date_day = date('d', strtotime($date_one));
                                        $date_M = date('m', strtotime($date_one));
                                        $date_Y = date('Y', strtotime($date_one));
                                        $date =
                                            'Ngày' .
                                            ' ' .
                                            $date_day .
                                            ' ' .
                                            'Tháng' .
                                            ' ' .
                                            $date_M .
                                            ' ' .
                                            'Năm' .
                                            ' ' .
                                            $date_Y;
                                    @endphp
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-1">
                                                        <div class="image-comments"><img
                                                                src="{{ asset($item->image) }}"
                                                                alt=""> </div>
                                                    </div>
                                                    <div class="col-lg-11">
                                                        <div class="dsc-comments">
                                                            <h6>{{ $item->name }}</h6>
                                                            <span class="reply"> <span class="date">{{$item->created_at}}</span></span>
                                                            <p>That is great.</p>
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>

                                <div class="back-blog-form">
                                    <div id="blog-form" class="blog-form">
                                        <div class="back-title back-small-title">
                                            <h2>Leave a Reply</h2>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="back-textarea">
                                                        <textarea placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="back-input">
                                                        <input type="text" name="name" placeholder="Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="back-input">
                                                        <input type="email" name="email" placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="back-input">
                                                        <input type="text" name="website" placeholder="Website">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="back-check-box">
                                                        <input type="checkbox" id="box-1"> Save my name, email, and
                                                        website in this browser for the next time I comment.
                                                    </div>
                                                    <button type="submit" class="back-btn">Submit Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="back-sidebar pl-30 md-pl-0 back-hero-area back-latest-posts back-whats-posts">

                            <form action="{{ route('search') }}" method="GET">
                                @csrf
                                <div class="row d-flex justify-content-center gy-4">
                                    <div class="col-10">
                                        <label>Search </label>
                                        <input type="text" name="blog" placeholder="">
                                    </div>
                                    <div
                                        class="col-2 d-flex justify-content-end align-items-sm-center align-items-end gap-2">

                                        <button type="submit">
                                            <div class="search-cross-btn"><i class="bi bi-search"></i> </div>
                                        </button>

                                        <div class="search-cross-btn">
                                            <i class="bi bi-x-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="back-title back-small-title">
                                <h2>Get in Touch</h2>
                            </div>

                            <ul class="social-area">
                                <li>
                                    <div><a href="#"><i class="fa-brands fa-facebook-f"></i></a> <span>Followers
                                            <em>750</em></span></div>
                                </li>
                                <li>
                                    <div><a href="#"><i class="fa-brands fa-twitter"></i></a> <span>Fans
                                            <em>1236</em></span></div>
                                </li>
                                <li>
                                    <div><a href="#"><i class="fa-brands fa-instagram"></i></a> <span>Likes
                                            <em>523</em></span></div>
                                </li>
                                <li>
                                    <div><a href="#"><i class="fa-brands fa-vimeo-v"></i></a> <span>Comments
                                            <em>790</em></span></div>
                                </li>
                                <li>
                                    <div><a href="#"><i class="fa-brands fa-linkedin-in"></i></a> <span>Followers
                                            <em>1025</em></span></div>
                                </li>
                                <li>
                                    <div><a href="#"><i class="fa-brands fa-youtube"></i></a> <span>Subscribers
                                            <em>590M</em></span></div>
                                </li>
                            </ul>
                            <div class="back-title back-small-title pt-30">
                                <h2>Latest News</h2>
                            </div>
                            <ul class="back-hero-bottom">
                                @foreach ($cate as $item)
                                <li>
                                    <div class="image-areas">
                                        <a href="#"><img src="{{ asset($item->image) }}"
                                                alt="image"></a>
                                    </div>
                                    <div class="back-btm-content">
                                        <a href="#" class="back-cates">{{$item->name}}</a>
                                        {{-- <h3><a href="{{route('detail',$item->id)}}">{{$item->title}}</a></h3> --}}
                                        <ul>
                                            <li class="back-date">by <a href="#"></a></li>
                                        </ul>
                                    </div>
                                </li>

                           @endforeach
                            </ul>
                            <div class="back-add pt-15"> <img
                                    src="{{ asset('theme/client/assets/images/whats/add.jpg') }}" alt="add-image"> </div>

                            <div class="back-title back-small-title pt-50">
                                <h2>Follow Us</h2>
                            </div>
                            <ul class="back-instragram">
                                <li><a href="#"> <img
                                            src="{{ asset('theme/client/assets/images/instragram/1.jpg') }}"
                                            alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"> <img
                                            src="{{ asset('theme/client/assets/images/instragram/2.jpg') }}"
                                            alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"> <img
                                            src="{{ asset('theme/client/assets/images/instragram/3.jpg') }}"
                                            alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"> <img
                                            src="{{ asset('theme/client/assets/images/instragram/4.jpg') }}"
                                            alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"> <img
                                            src="{{ asset('theme/client/assets/images/instragram/5.jpg') }}"
                                            alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"> <img
                                            src="{{ asset('theme/client/assets/images/instragram/6.jpg') }}"
                                            alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                            </ul>

                            <div class="back-title back-small-title pt-50">
                                <h2>Comments</h2>
                            </div>
                            <div class="widget back-recent-comments">
                                <ul class="recent-comments">
                                    @foreach ($comments as $item)
                                        <li>
                                            <span class="post-images"><img src="{{ asset($item->image) }}"
                                                    alt="post"></span>
                                            <div class="titles">
                                                <h4>{{ $item->name }}</h4>
                                                <span></span>
                                                <p>Good!</p>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class="back-title back-small-title pt-50">
                                <h2>Tags</h2>
                            </div>
                            <div class="widget widget-tags">
                                <ul class="tags">
                                    @foreach ($tags as $item)
                                    <li><a href="#">{{$item->name}}</a></li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Blog Section End Here =================-->

    </div>
@endsection
