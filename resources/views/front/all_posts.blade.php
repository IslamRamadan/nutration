
@extends('layouts.front.front')
@section('title')

    @lang('site.post')

@endsection
@section('content')

<div  class=" relative1 " >
    <div class="abs w-100">
        <h1>    @lang('site.post')
        </h1>

    </div>
</div>

<section class="news-hr section  mb-5 mt-5">
    <div class="container">

        <div class="row no-gutters">
            @foreach ($posts as $item)

            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="row">
                    <div class="col-md-12 col-12 post-thumb p-0">
                        <a href="{{route('post.show',$item->id)}}">
                            <img src="{{url($item->img)}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-12 col-12 post-contents border-top">
                        <div class="post-title">
                            <h6><a href="{{route('post.show',$item->id)}}">{{$item['title_'.app()->getLocale()]}}</a></h6>
                        </div>
                        <div class="post-exerpts">
                            {{-- @php
                                $pieces = explode(" ", );
                                $content = implode(" ", array_splice($pieces, 0, 5));
                            @endphp --}}
                            <p>{!!$item['brief_'.app()->getLocale()]!!}</p>
                        </div>

                        <div class="date">
                            <h4>{{ $item->created_at->format('d') }}<span>{{ $item->created_at->format('M') }}</span></h4>
                        </div>
                        <div class="more text-dir1">
                            <a href="{{route('post.show',$item->id)}}">@lang('site.view_more')</a>
                        </div>
                    </div>
                </div>
                </article>
            </div>
            @endforeach

            {{-- <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="row">
                    <div class="col-md-12 col-12 post-thumb">
                        <a href="{{route('post.show',58)}}">
                            <img src="{{url('front/img/26.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 col-12 post-contents border-top">
                        <div class="post-title">
                            <h6><a href="{{route('post.show',58)}}">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more text-dir1">
                            <a href="{{route('post.show',58)}}">Show more</a>
                        </div>
                    </div>
                </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="row">
                    <div class="col-md-12 col-12 post-thumb">
                        <a href="{{route('post.show',58)}}">
                            <img src="{{url('front/img/24.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 col-12 post-contents border-top">
                        <div class="post-title">
                            <h6><a href="{{route('post.show',58)}}">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more text-dir1">
                            <a href="{{route('post.show',58)}}">Show more</a>
                        </div>
                    </div>
                </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="row">
                    <div class="col-md-12 col-12 post-thumb">
                        <a href="{{route('post.show',58)}}">
                            <img src="{{url('front/img/21.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 col-12 post-contents border-top">
                        <div class="post-title">
                            <h6><a href="{{route('post.show',58)}}">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more text-dir1">
                            <a href="{{route('post.show',58)}}">Show more</a>
                        </div>
                    </div>
                </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="row">
                    <div class="col-md-12 col-12 post-thumb">
                        <a href="{{route('post.show',58)}}">
                            <img src="{{url('front/img/23.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 col-12 post-contents border-top">
                        <div class="post-title">
                            <h6><a href="{{route('post.show',58)}}">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more text-dir1">
                            <a href="{{route('post.show',58)}}">Show more</a>
                        </div>
                    </div>
                </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="row">
                    <div class="col-md-12 col-12 post-thumb">
                        <a href="{{route('post.show',58)}}">
                            <img src="{{url('front/img/25.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 col-12 post-contents border-top">
                        <div class="post-title">
                            <h6><a href="{{route('post.show',58)}}">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more text-dir1">
                            <a href="{{route('post.show',58)}}">Show more</a>
                        </div>
                    </div>
                </div>
                </article>
            </div> --}}

        </div>
    </div>
</section>

<!--====  End of News  ====-->


@endsection
