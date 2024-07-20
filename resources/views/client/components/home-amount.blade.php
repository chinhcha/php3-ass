<div class="back-hero-area back-latest-posts back-whats-posts back-feature-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="back-title">
                    <h2>Feature Posts</h2>
                </div>

                <ul class="back-hero-bottom back-hero-bottom2">
                    @foreach ($view as $item)
                    <li>
                        <div class="image-areas">
                            <a href="#"><img src="{{ asset($item->image)}}" alt="image"></a>
                        </div>
                        <div class="back-btm-content">
                            <a href="#" class="back-cate back-tra">{{$item->cate}}</a>
                            <h3><a href="{{route('detail', $item -> id )}}">{{$item->title}}</a></h3>
                            <p>{{$item->content}}</p>
                            <ul class="back-meta">
                                <li class="back-author"><span><img src="{{ asset('theme/client/assets/images/author/1.jpg')}}" alt="image"></span>by <a href="#">- {{$item->author}}</a></li>
                                <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>March 26, 2022</li>
                            </ul>
                        </div>
                    </li>
                    @endforeach


                </ul>
                <div class="text-center pt-73">
                    <a href="#" class="back-btn">View All Posts</a>
                </div>
            </div>
            <div class="col-lg-4 pl-30">
                <div class="back-title back-small-title">
                    <h2>Categories</h2>
                </div>
                <ul class="back-category-area">
                    @foreach ($cate as $item)
                    <li>
                        <div>
                           <a href="#"></a> <img src="{{ asset($item->image)}}" alt="image">
                            <a href="#"><span><em>{{$item->tong}}</em> {{$item->name}}</span></a>
                        </div>
                    </li>
                    @endforeach


                </ul>
                <div class="back-title back-small-title pt-30">
                    <h2>Most Read</h2>
                </div>
                <ul class="back-hero-bottom">
                    @foreach ($view as $item)
                    <li>
                        <div class="image-areas">
                            <a href="#"><img src="{{ asset($item->image)}}" alt="image"></a>
                        </div>
                        <div class="back-btm-content">
                            <a href="#" class="back-cates">{{$item->cate}}</a>
                            <h3><a href="#">{{$item->title}}</a></h3>
                        </div>
                    </li>

                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
