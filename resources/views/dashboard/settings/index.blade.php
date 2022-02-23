@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.settings")
@endsection
@section('mo')
    @include('flash::message')

@section('ti')
    @lang("site.settings")

@endsection


<div class="box box-primary">



    <div class="box-header with-border">





    </div><!-- end of box header -->



    <div class="box-body">

        @if ($setting)

            <?php


            $description_ar = $setting->description_ar;
            $description_en = $setting->description_en;
            $about_app_ar  = $setting->about_app_ar ;
            $about_app_en = $setting->about_app_en;
            $name = $setting->name;
            $name_en = $setting->name_en;

            $wats = $setting->wats;
            $yt_link = $setting->yt_link;
            $insta_link = $setting->insta_link;
            $tw_link = $setting->tw_link;
            $color2 = $setting->color2;
            $id = $setting->id;
            $dolar = $setting->dolar;
            $android = $setting->android;
            $ios = $setting->ios;
            $contact_phone = $setting->contact_phone;
            $address = $setting->address;
            $address_en = $setting->address_en;

            ?>

        @else

            <?php

            $id = '';
            $dolar = '';
            $contact_phone = '';
            $address = '';
            $address_en = '';
            $wats = '';
            $yt_link = '';
            $insta_link = '';
            $tw_link = '';
            $colo2r = '';
            $name = '';
            $name_en = '';


            $android = '';
            $ios = '';

            $description_ar = '';
            $description_en = '';
            $about_app_ar  = '';
            $about_app_en  = '';


            ?>

        @endif
        {!! Form::model($setting, ['route' => ['settings.update', $id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}
        {{-- <div class="form-group"> --}}
        {{-- <label>@lang("site.one_dollar")</label> --}}
        {{-- {!!  Form::text('dolar',$dolar,[ --}}
        {{-- "class"=>"form-control" --}}

        {{-- ])!!} --}}
        {{-- </div> --}}
        <div class="form-group">
            <label>@lang('site.name_ar')</label>
            <input class="form-control" name="name" value="{{ $name }}">
        </div>
        <div class="form-group">
            <label>@lang('site.name_en')</label>
            <input class="form-control" name="name_en" value="{{ $name_en }}">
        </div>

        <div class="form-group">
            <label>@lang('site.web_en')</label>
            <input class="form-control" name="description_en" value="{{ $description_en }}">
        </div>
        <div class="form-group">
            <label>@lang('site.web_ar')</label>
            <input class="form-control" name="description_ar" value="{{ $description_ar }}">
        </div>
        <div class="form-group">
            <label>@lang('site.logo')</label>
            <input type="file" class="form-control" name="logo">
        </div>
        <img src="{{ asset('/storage/' . $setting->logo) }}" alt="" width="50%">


        {{-- <div class="form-group">
            <label>@lang('site.address')</label>
            {!! Form::text('address', $address, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.address_en')</label>
            {!! Form::text('address_en', $address_en, [
    'class' => 'form-control',
]) !!}
        </div> --}}
        <div class="form-group">
            <label>@lang('site.contact_phone')</label>
            {!! Form::text('contact_phone', $contact_phone, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.wats')</label>
            {!! Form::text('wats', $wats, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.yt_link')</label>
            {!! Form::text('yt_link', $yt_link, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.tw_link')</label>
            {!! Form::text('tw_link', $tw_link, [
    'class' => 'form-control',
]) !!}
        </div>
        <div class="form-group">
            <label>@lang('site.insta_link')</label>
            {!! Form::text('insta_link', $insta_link, [
    'class' => 'form-control',
]) !!}
        </div>

        <div class="form-group">
            <label>@lang('site.about_app')</label>
            <textarea class="form-control" rows="10" name="about_app_ar">
                          {{ $about_app_ar }}
                       </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.about_app_en')</label>
            <textarea id="summernote" class="form-control" rows="10" name="about_app_en">
                          {{ $about_app_en }}
                       </textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.save')</button>
        </div>

        {!! Form::close() !!}



        <!-- Button trigger modal -->


    </div><!-- end of box body -->






</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('about_app_ar');
    CKEDITOR.replace('about_app_en');
</script>


@endsection
