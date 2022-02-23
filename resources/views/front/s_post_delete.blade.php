
@extends('layouts.front.front')
@section('title')

    @lang('site.post')

@endsection
@section('content')

<div  class=" relative1 " >
    <div class="abs w-100">
        <h4 class="custom-h4">Blog</h4>
        <h1>Blog</h1>

    </div>
</div>

<section class="news-hr section mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>My mall News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, enim.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="post-thumb">
                        <a href="news-single.html">
                            <img src="{{url('front/img/20.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="post-contents border-top">
                        <div class="post-title">
                            <h6><a href="news-single.html">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more">
                            <a href="news-single.html">Show more</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="post-thumb">
                        <a href="news-single.html">
                            <img src="{{url('front/img/20.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="post-contents border-top">
                        <div class="post-title">
                            <h6><a href="news-single.html">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more">
                            <a href="news-single.html">Show more</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="post-thumb">
                        <a href="news-single.html">
                            <img src="{{url('front/img/20.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="post-contents">
                        <div class="post-title">
                            <h6><a href="news-single.html">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more">
                            <a href="news-single.html">Show more</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="news-post-hr">
                    <div class="post-thumb">
                        <a href="news-single.html">
                            <img src="{{url('front/img/20.webp')}}" alt="post-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="post-contents">
                        <div class="post-title">
                            <h6><a href="news-single.html">Default title here</a></h6>
                        </div>
                        <div class="post-exerpts">
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed doeiuse tempor incididunt ut
                            </p>
                        </div>

                        <div class="date">
                            <h4>20<span>May</span></h4>
                        </div>
                        <div class="more">
                            <a href="news-single.html">Show more</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!--====  End of News  ====-->


@endsection
