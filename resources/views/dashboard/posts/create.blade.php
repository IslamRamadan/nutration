@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.add_post")
@endsection
@section('mo')




@section('ti')
    @lang("site.add_post")
@endsection


<div class="box box-primary">




    <div class="box-header">

    </div><!-- end of box header -->
    <div class="box-body">

        @include('partials._errors')


        {!! Form::model("", ['route' => ['posts.store'],
        "method"=>"post",'enctype' => 'multipart/form-data'

        ])!!}
        {{ csrf_field() }}

        <div class="form-group">
            <label>@lang('site.title_ar')</label>
            <input type="text" name="title_ar" class="form-control" value="{{old('title_ar')}}">
        </div>

        <div class="form-group">
            <label>@lang('site.title_en')</label>
            <input type="text" name="title_en" class="form-control" value="{{old('title_en')}}">
        </div>

        <div class="form-group">
            <label>@lang('site.brief_ar')</label>
            <textarea type="text" name="brief_ar" class="form-control" rows="10">{{old('brief_ar')}}</textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.brief_en')</label>
            <textarea type="text" name="brief_en" class="form-control" rows="10">{{old('brief_en')}}
            </textarea>
        </div>
        <div class="form-group">
            <label>@lang('site.content_ar')</label>
            <textarea type="text" name="content_ar" class="form-control" rows="10">{{old('content_ar')}}</textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.content_en')</label>
            <textarea type="text" name="content_en" class="form-control" rows="10">{{old('content_en')}}
            </textarea>
        </div>


        <div class="form-group">
            <label>@lang('site.image')</label>
            <input type="file" name="img" class="form-control" value="">
        </div>

        <div class="form-group" >
            <label> @lang('site.add_imgs')</label>
            <input type="file" name="photo[]" multiple class="form-control"  required>
        </div>



        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
        </div>

        {!! Form::close() !!}

    </div><!-- end of box body -->

</div><!-- end of box -->














<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content_ar' );
    CKEDITOR.replace( 'content_en' );
</script>
@endsection
