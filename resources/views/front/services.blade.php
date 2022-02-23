

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
                    <form method="post" action="sendemail.php" id="contact-form" novalidate="novalidate">
                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="{{__('site.phone')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="{{__('site.message')}}"></textarea>
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
            <div class="sec-title"><h2>@lang('site.calories2')</h2>
                {{-- <div class="separator back-pos"> --}}
                    {{-- </div> --}}
                </div>
            <!--form-box-->
            <div class="form-box default-form">
                <div class="contact-form default-form">
                    <form method="post" action="sendemail.php" id="contact-form" novalidate="novalidate">
                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="{{__('site.phone')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="{{__('site.food_system')}}"></textarea>
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
                    <form method="post" action="sendemail.php" id="contact-form" novalidate="novalidate">
                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="{{__('site.phone')}}">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                <input type="text" name="age" value="" placeholder="{{__('site.age')}}">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                <input type="text" name="tall" value="" placeholder="{{__('site.tall')}}">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-6">
                                <input type="text" name="weight" value="" placeholder="{{__('site.weight')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="{{__('site.food_routine')}}"></textarea>
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
                    <form method="post" action="sendemail.php" id="contact-form" novalidate="novalidate">
                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="{{__('site.name')}}" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="{{__('site.phone')}}">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="{{__('site.notice')}}"></textarea>
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
