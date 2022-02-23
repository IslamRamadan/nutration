

@extends('layouts.front.front')
@section('title')

    @lang('site.services')

@endsection
@section('content')


    @if(Lang::locale()=='ar')

        <!-----start carousel --->
        <div  class=" relative " >
            <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
            <div class="abs w-100">
                <h2>    @lang('site.services')</h2>
                <a href="">    @lang('site.home')
                </a>
                >>
                <a href="">    @lang('site.services')
                </a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">@lang('site.services')


                        <hr>
                    </h2>

                    <br><br>
                    <br><br>

                    @foreach($my_sevices as $service)
                        <div class="col-md-6">
                            <h4>{{$service->title_ar}}</h4>

                            <p>{{$service->content_ar}}</p>

                            <a href="{{route('my_services.show',$service->id)}}" class="btn btn-primary mb-3">@lang('site.view_more')</a>
                        </div>
                        <div class="text-center col-md-6">
                            <a href="{{asset($service->img)}}" target="_blank">
                                <img id="myImg" src="{{asset($service->img)}}" class="w-100">
                            </a>
                            <br><br>
                        </div>
                    @endforeach         </div></div>
            <br><br>

            <br><br></div>
        <!--- -->


    @else






        <!-----start carousel --->
        <div  class=" relative " >
            <img class="d-block w-100 h" src="{{asset('front/img/s.jpg')}}" alt="1 slide">
            <div class="abs w-100">
                <h2>    @lang('site.services')</h2>
                <a href="">    @lang('site.home')
                </a>
                >>
                <a href="">    @lang('site.services')
                </a>
            </div>
        </div>
        <!--- end head --->
        <!--- -->
        <div class="container-fluid  mt-3">
            <div class="container  ">
                <br>
                <div class="row  ">
                    <h2  class="text-center col-12">@lang('site.services')


                        <hr>
                    </h2>

                    <br><br>
                    <br><br>
                    @foreach($my_sevices as $service)
                        <div class="col-md-6">
                            <h4>{{$service->title_en}}</h4>

                            <p>{{$service->content_en}}</p>

                            <a href="{{route('my_services.show',$service->id)}}" class="btn btn-primary mb-3">@lang('site.view_more')</a>
                        </div>
                        <div class="text-center col-md-6">
                            <a href="{{asset($service->img)}}" target="_blank">
                                <img id="myImg" src="{{asset($service->img)}}" class="w-100">
                            </a>
                            <br><br>
                        </div>
                    @endforeach         </div></div>
            <br><br>

            <br><br></div>
        <!--- -->










    @endif

@endsection
