@extends('layouts.front.front')
@section('title')


@lang('site.post')

@endsection
@section('content')

    <!-----start carousel --->

{{-- <div  class=" relative1 " >
    <div class="abs w-100">
        <h4 class="custom-h4">@lang('site.post')</h4>
        <h1>{!!$post['title_'.app()->getLocale()]!!}</h1>

    </div>
</div> --}}
<div id="carouselExampleIndicators1" class="carousel slide relative" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @php
            $i = 0;
        @endphp
        @foreach ($post_img as $one)
            <div class="carousel-item  @if ($i == 0) active @endif ">
                <img class=" w-100  " src="{{ asset($one->img) }}" alt="1 slide">

            </div>
            @php
                $i++;
            @endphp
        @endforeach


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="news section">
    <div class="container">
        <div class="row mt-30">
            <div class="col-12 mx-auto">
                <div class="block">
                    <!-- Article -->
                    <article class="blog-post single">
                        <div class="post-thumb">
                            <img src="{{url($post->img)}}" alt="post-image" class="img-fluid" style="width: 100%;">
                        </div>
                        <div class="post-content">
                            <div class="date">
                                <h4>{{ $post->created_at->format('d') }}<span>{{ $post->created_at->format('M') }}</span></h4>
                            </div>
                            <div class="post-title">
                                <h3>{!!$post['title_'.app()->getLocale()]!!}</h3>
                            </div>

                            <div class="post-details">
                                {!!$post['content_'.app()->getLocale()]!!}
                            </div>
{{--
<div class="container-fluid  p-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-12 mb-3"  >
            <div class="" >
                <img src="{{url('front/img/24.webp')}}" class="w-100 cust-hght" alt="">
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-12 mb-3"  >
            <h4>TRAY 160</h4>
            <p>Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                </p>
        </div>
    </div>
</div>

<div class="container-fluid  p-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-12 mb-3"  >
            <div class="" >
                <img src="{{url('front/img/24.webp')}}" class="w-100 cust-hght" alt="">
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-12 mb-3"  >
            <h4>TRAY 160</h4>
            <p>Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                </p>
        </div>
    </div>
</div>

<div class="container-fluid  p-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-12 mb-3"  >
            <div class="" >
                <img src="{{url('front/img/24.webp')}}" class="w-100 cust-hght" alt="">
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-12 mb-3"  >
            <h4>TRAY 160</h4>
            <p>Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                Body and cover are made of one piece (monoblock) rotomoulded polyethylene.
                </p>
        </div>
    </div>
</div> --}}


{{-- <div class="container-fluid  ">
    <div class="row justify-content-center">
        @foreach ($post_img as $item)

        <div class="col-lg-3 col-md-6 col-12 mb-3"  >
            <div class="" style="background-color: rgb(35, 159, 168)">
            <img src="{{url($item->img)}}" class="w-100 " alt="">
        </div>

        </div>

        @endforeach

        </div>

    </div>
</div> --}}

                        </div>


                    </article>
                    <!-- Comment Section -->

                </div>
            </div>

        </div>
    </div>
</section>




@endsection
