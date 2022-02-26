

@extends('layouts.front.front')
@section('title')

@lang('site.services')

@endsection
@section('content')

  <div  class=" relative1 " >
    <div class="abs w-100">
        <h1>@lang('site.services')</h1>

    </div>
</div>

<div class="container contact-section">


    <div class="row clearfix">

        <!--Form Column -->
        <div class="column form-column pull-right col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="sec-title"><h2>@lang('site.calories')</h2>
                {{-- <div class="separator back-pos"></div> --}}
            </div>
            <!--form-box-->
            <div class="form-box default-form">
                <div class="contact-form default-form">
                    <form method="post" action="{{route('service.store')}}" >
                    {{ csrf_field() }}

                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="number" name="phone" value="{{old('phone')}}" placeholder="{{__('site.phone')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="content" placeholder="{{__('site.message')}}">{{old('content')}}</textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">@lang('site.send')</button>
                            </div>
                            <input type="hidden" name="type" value="0">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="container contact-section">


    <div class="row clearfix">

        <!--Form Column -->
        <div class="column form-column pull-right col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="sec-title"><h2>@lang('site.calories2')</h2>
                {{-- <div class="separator back-pos"> --}}
                    {{-- </div> --}}
                </div>
            <!--form-box-->
            <div class="form-box default-form">
                <div class="contact-form default-form">
                    <form method="post" action="{{route('service.store')}}" >
                        {{ csrf_field() }}
                            <div class="row clearfix">
                            <input type="hidden" name="type" value="1">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="{{old('phone')}}" placeholder="{{__('site.phone')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="content" placeholder="{{__('site.food_system')}}">{{old('content')}}</textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">@lang('site.send')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="container contact-section">


    <div class="row clearfix">

        <!--Form Column -->
        <div class="column form-column pull-right col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="sec-title"><h2>@lang('site.calories3')</h2>
                {{-- <div class="separator back-pos"></div> --}}
            </div>
            <!--form-box-->
            <div class="form-box default-form">
                <div class="contact-form default-form">
                    <form method="post" action="{{route('service.store')}}" >
                        {{ csrf_field() }}
                            <div class="row clearfix">
                            <input type="hidden" name="type" value="2">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="{{old('phone')}}" step="0.01" placeholder="{{__('site.phone')}}">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                <input type="number" name="age" value="{{old('age')}}" step="0.01" placeholder="{{__('site.age')}}">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                <input type="number" name="height" value="{{old('height')}}" step="0.01" placeholder="{{__('site.tall')}}">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                <input type="number" name="weight" value="{{old('weight')}}" step="0.01" placeholder="{{__('site.weight')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="content" placeholder="{{__('site.food_routine')}}">{{old('content')}}</textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">@lang('site.send')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="container contact-section">


    <div class="row clearfix">

        <!--Form Column -->
        <div class="column form-column pull-right col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div class="sec-title"><h2>@lang('site.calories4')</h2>
                {{-- <div class="separator back-pos"></div> --}}
            </div>
            <!--form-box-->
            <div class="form-box default-form">
                <div class="contact-form default-form">
                    <form method="post" action="{{route('service.store')}}" >
                        {{ csrf_field() }}
                            <div class="row clearfix">
                            <input type="hidden" name="type" value="3">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="{{old('phone')}}" placeholder="{{__('site.phone')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="content" placeholder="{{__('site.notice')}}">{{old('content')}}</textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">@lang('site.send')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection
