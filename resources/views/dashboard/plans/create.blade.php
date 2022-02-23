@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.add_plans")
@endsection
@section('mo')




@section('ti')
    @lang("site.add_plan")
@endsection

<div class="box box-primary">




    <div class="box-header">

    </div><!-- end of box header -->
    <div class="box-body">

        @include('partials._errors')



        {!! Form::model("", ['route' => ['plans.store'],
        "method"=>"post",'enctype' => 'multipart/form-data'

        ])!!}
        {{ csrf_field() }}

        <div class="form-group">

            <label>@lang('site.title_ar')</label>
            <input type="text" name="title_ar" class="form-control" value="">
        </div>


        <div class="form-group">
            <label>@lang('site.title_en')</label>
            <input type="text" name="title_en" class="form-control" value="">
        </div>


        <div class="form-group">
            <label>@lang('site.image')</label>
            <input type="file" name="photo" class="form-control" value="">
        </div>

        <div class="form-group">

        <label>@lang('site.name_en')</label>
        <input type="text" name="name_en" class="form-control" value="">
    </div>


    <div class="form-group">
        <label>@lang('site.name_ar')</label>
        <input type="text" name="name_ar" class="form-control" value="">
    </div>





    <div class="form-group">
        <label>@lang('site.content_en')</label>
        <input type="text" name="content_en" class="form-control" value="">

    </div>


    <div class="form-group">
        <label>@lang('site.content_ar')</label>
        <input type="text" name="content_ar" class="form-control" value="">
    </div>


    <div class="form-group">
        <label>@lang('site.image')</label>
        <input multiple="multiple" name="photos[]" type="file" class="form-control">


    </div>
    <input type="hidden" name="type" class="form-control" value="3">


    <div class="form-group">
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
    </div>

    {!! Form::close() !!}

</div><!-- end of box body -->

</div><!-- end of box -->












@endsection
