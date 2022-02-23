

@extends('layouts.front.front')
@section('title')

    @lang('site.projects')

@endsection
@section('content')

<div class="container-fluid  p-5">
    <div class="" style="position: relative">

    <img src="{{url('front/img/20.webp')}}" class="w-100" alt="">
    <div class="img-div3" >
        {{-- <h2 class="mb-3">If coldness is of vital importance to you!
        </h2>
        <h2 class="c-b">Specially insulated you should review our containers
        </h2> --}}



        </div>
    </div>
</div>
<div class="container text-center center-p1">

    <div class="component">
        <blockquote class="callout quote EN">
           <h2> {!! $my_section['qoute1_'.app()->getLocale()] !!}
           </h2>
           </blockquote>
        </div>
        </div>
{{--
<div class="container-fluid  p-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-12 mb-3"  >
            <div class="" style="background-color: rgb(35, 159, 168)">
            <h5 class="text-center pt-3">Olive Polyethylene BAC / SANDIK</h5>
            <img src="{{url('front/img/21.webp')}}" class="w-100 cust-hght" alt="">
        </div>

        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3"  >
            <div class="" style="background-color: rgb(15, 128, 99)">
            <h5 class="text-center pt-3">Olive Polyethylene BAC / SANDIK</h5>
            <img src="{{url('front/img/22.webp')}}" class="w-100 cust-hght" alt="">
        </div>

        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3"  >
            <div class="" style="background-color: rgb(32, 134, 194)">
            <h5 class="text-center pt-3">Olive Polyethylene BAC / SANDIK</h5>
            <img src="{{url('front/img/23.webp')}}" class="w-100 cust-hght" alt="">
        </div>

        </div>

    </div>
</div> --}}

<div class="container-fluid  p-5">
    {!! $product['description_'.app()->getLocale()] !!}
</div>

@foreach ($product_imgs as $item)

<div class="container-fluid  p-5">
    <div class="row justify-content-center " style="position: relative;">
        <div class="col-lg-4 col-md-6 col-12 mb-3"  >
            <div class="" >
                <img src="{{url($item->img)}}" class="w-100 cust-hght" alt="">
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-12 mb-3" style="align-self:center" >

            <p>{!! $item['description_'.app()->getLocale()] !!}</p>
        </div>
    </div>
</div>

@endforeach
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


@endsection
