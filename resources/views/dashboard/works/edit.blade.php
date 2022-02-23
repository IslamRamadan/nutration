@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.edit_work")
@endsection
@section('mo')




@section('ti')
    @lang("site.edit_work")
@endsection

<div class="box box-primary">




    <div class="box-header">

    </div><!-- end of box header -->
    <div class="box-body">

        @include('partials._errors')


        {!! Form::model("", ['route' => ['works.update',$work->id],
        "method"=>"PUT",'enctype' => 'multipart/form-data'

        ])!!}
        {{ csrf_field() }}

        <div class="form-group">
            <label>@lang('site.icon')</label>
            <input type="text" name="icon" class="form-control" value="{{ $work->icon }}">
        </div>


        <div class="form-group">
            <label>@lang('site.title_en')</label>
            <input type="text" name="title_en" class="form-control" value="{{ $work->title_en }}">
        </div>




        <div class="form-group">
            <label>@lang('site.title_ar')</label>
            <input type="text" name="title_ar" class="form-control" value="{{ $work->title_ar }}">

        </div>

        <div class="form-group">
            <label>@lang('site.content_en')</label>
            <input type="text" name="content_en" class="form-control" value="{{ $work->content_en }}">

        </div>


        <div class="form-group">
            <label>@lang('site.content_ar')</label>
            <input type="text" name="content_ar" class="form-control" value="{{ $work->content_ar }}">
        </div>

        <input type="hidden" name="type" class="form-control" value="1">



        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
        </div>

        {!! Form::close() !!}

    </div><!-- end of box body -->

</div><!-- end of box -->












@endsection
