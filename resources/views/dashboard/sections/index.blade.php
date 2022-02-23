@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.sections")
@endsection
@section('mo')
    @include('flash::message')

@section('ti')
    @lang("site.sections")
@endsection


<div class="box box-primary">



    <div class="box-header with-border">





    </div><!-- end of box header -->



    <div class="box-body">

        @if ($section)
            <?php

            $id = $section->id;

            $service_content_ar = $section->service_content_ar;
            $service_content_en = $section->service_content_en;
            $about_content_en = $section->about_content_en;
            $about_content_ar = $section->about_content_ar;

            ?>

        @else
            <?php

            $id = '';
            $service_content_ar = '';
            $service_content_en = '';
            $about_content_en = '';
            $about_content_ar = '';

            ?>
        @endif
        {!! Form::model($section, ['route' => ['sections.update', $id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        {{ csrf_field() }}

        <div class="form-group text-center">
            <h2>@lang('site.about_sec')</h2>
        </div>
        <div class="form-group">
            <label>@lang('site.about_content_ar')</label>
            <textarea class="form-control" name="about_content_ar">
                {{ $about_content_ar }}
            </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.about_content_en')</label>
            <textarea class="form-control" name="about_content_en">
                {{ $about_content_en }}
            </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.about_img')</label>
            <input type="file" class="form-control" name="about_img1">
        </div>
        {{-- <img src="{{ asset('/storage/' . $section->img) }}" alt="" width="50%"> --}}

        <div class="form-group text-center">
            <h2>@lang('site.service_sec')</h2>
        </div>
        <div class="form-group">
            <label>@lang('site.service_content_ar')</label>
            <textarea class="form-control" name="service_content_ar">
                {{ $service_content_ar }}
            </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.service_content_en')</label>
            <textarea class="form-control" name="service_content_en">
                {{ $service_content_en }}
            </textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.service_img')</label>
            <input type="file" class="form-control" name="service_img1">
        </div>
        {{-- <img src="{{ asset('/storage/' . $section->img) }}" alt="" width="50%"> --}}


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
    CKEDITOR.replace('about_content_en');
    CKEDITOR.replace('about_content_ar');
    CKEDITOR.replace('service_content_en');
    CKEDITOR.replace('service_content_ar');
</script>


@endsection
