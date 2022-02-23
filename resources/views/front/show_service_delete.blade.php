@extends('layouts.front.front')
@section('title')

    @lang('site.services')

@endsection
@section('content')


    <!-----start carousel --->
    <div  class=" relative " >
        <div class="d-block w-100 h"  style=" background: linear-gradient(to top, #4321daba, #2b10c7cc), url({{url('/storage/'.$service->background_img)}}) no-repeat top center;"        >
            {{-- {{url('/storage/'.$service->background_img)}} --}}
        </div>
        <div class="abs w-100">
            <h4 class="custom-h4">{!! $service['name_'.app()->getLocale()] !!}</h4>
            <h1>{!! $service['title_'.app()->getLocale()] !!}</h1>
            <h2>{!! $service['content_'.app()->getLocale()] !!}</h2>
        </div>
    </div>
    <!--- end head --->
    <div class="container text-center center-p1">

        <div class="component">
            <br>
                <h4 class="mb-4">{!! $service['name_'.app()->getLocale()] !!}</h4>
            <blockquote class="callout quote EN">
               <h2>{!! $my_section['qoute1_'.app()->getLocale()] !!}
               </h2>
               </blockquote>
            </div>
            </div>

    <!--- -->

<div class="container mb-5">
    <div id="carouselExampleIndicators" class="carousel slide relative" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @php
                $i = 0;
            @endphp
            @foreach ($service_images as $one)
                <div class="carousel-item  @if ($i == 0) active @endif ">
                    <img class=" w-100  " src="{{ asset($one->img) }}" alt="1 slide">

                </div>
                @php
                    $i++;
                @endphp
            @endforeach


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="container-fluid mb-5">
    <br>
    {!! $service['section1_'.app()->getLocale()] !!}
    {{-- <h4 class="custom-h4" >RELATED AREAS OF USAGE:
    </h4>

    <div class="row">
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Degreasing equipment

        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            electric motors

        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            forklifts

        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            electric motors

        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Preparation before painting

        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Conveyors
        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Electrical boxes and panels

        </div>
        <div class="col-md-4 col-12 before-icon">
            <i class="fas fa-arrow-right main-color"></i>
            Hydraulic parts and equipment

        </div>
    </div> --}}
    </div>





    <div class="container-fluid custom-container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 col-12 mt-sm-3">
                <br>
            <h4 class="custom-h4 pl-0 pr-0">{!!$service['section2_title_'.app()->getLocale()] !!}
            </h4>
<br>
                <h1>{!!$service['section2_content_'.app()->getLocale()] !!}</h1>

            </div>
            <div class="col-lg-6 col-md-6 col-12 ">
                <img src="{{url('/storage/'.$service->section2_img)}}" class="w-100" alt="">
            </div>
        </div>
    </div>








@endsection
