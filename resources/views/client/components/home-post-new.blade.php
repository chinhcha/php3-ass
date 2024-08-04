@foreach ($data as $item)
@php
                $date_one = $item->created_at;
                $date_day = date('d', strtotime($date_one));
                $date_M = date('m', strtotime($date_one));
                $date_Y = date('Y', strtotime($date_one));
                $date =
                    'Ngày' . ' ' . $date_day . ' ' . 'Tháng' . ' ' . $date_M . ' ' . 'Năm' . ' ' . $date_Y;
            @endphp
<li>
    <div class="image-areas">
        <a href="#"><img src="{{ asset($item -> image )}}" alt="image"></a>
        <a href="#" class="back-cate back-beauty">{{ $item -> cate}}</a>
    </div>
    <div class="back-btm-content">
        <h3><a href="{{route('detail',$item->id)}}">{{$item -> title}}</a></h3>
        <ul>
            {{-- <li class="back-author"><a href="#">{{$item -> author}}</a></li> --}}
            <li class="back-date"><span></span>{{$item->created_at}}</li>
        </ul>
    </div>
</li>

@endforeach
