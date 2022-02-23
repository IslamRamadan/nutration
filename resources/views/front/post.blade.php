
@extends('layouts.front.front')
@section('title')

    @lang('site.post')

@endsection
@section('content')


    @if(Lang::locale()=='ar')

        <!-----start carousel --->
        <div  class=" relative " >
            <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}} " alt="1 slide">
            <div class="abs w-100">
                <h2>@lang('site.blog')</h2>
                <a href="">@lang('site.home')</a>
                >>
                <a href="">@lang('site.blog')</a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid  ">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">@lang('site.blog')

                        <hr>
                    </h2>
                    @foreach($posts as $post)

                        <div class="text-center col-md-12">
                            <img id="myImg" src="{{asset($post->img)}}" style="height: 80%;width: 80%">
                            <br><br>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-center mb-3">{{$post->title_ar}}</h2>

                            <p>{{$post->content_ar}}</p>
                        </div>
                    @endforeach
                </div>
                <br><br>   <br><br>  </div></div>
        <!--- -->
    @else

        <!-----start carousel --->
        <div  class=" relative " >
            <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
            <div class="abs w-100">
                <h2>@lang('site.blog')</h2>
                <a href="">@lang('site.home')</a>
                >>
                <a href="">@lang('site.blog')</a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid  ">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">@lang('site.blog')

                        <hr>
                    </h2>
                    @foreach($posts as $post)

                        <div class="text-center col-md-12">
                            <a href="{{asset($post->img)}}">
                                <img id="myImg" src="{{asset($post->img)}}" style="    width: 80%!important;height: 80%!important;">
                            </a>
                            <br>
                        </div>


                        <div class="text-left col-md-12">
                            <h2 class="text-center mb-3">{{$post->title_en}}</h2>

                            <p>{{$post->content_en}}</p>

                        </div>
                    @endforeach         </div></div>
            <br><br>

            <br><br></div>
        <!--- -->


    @endif


@endsection
