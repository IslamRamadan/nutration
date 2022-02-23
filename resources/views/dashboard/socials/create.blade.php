@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.add_social")
@endsection
@section('mo')




@section('ti')
    @lang("site.add_social")
@endsection


<div class="box box-primary">




    <div class="box-header">

    </div><!-- end of box header -->
    <div class="box-body">

        @include('partials._errors')


        {!! Form::model("", ['route' => ['social.store'],
        "method"=>"post",'enctype' => 'multipart/form-data'

        ])!!}
        {{ csrf_field() }}
        <div class="form-group">
            <input type="checkbox" class="form-check-input" name="appearance" value="1" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">@lang('site.appear')</label>
          </div>

        <div class="form-group">
            <label>@lang('site.link')</label>
            <input type="text" name="link" class="form-control" value="{{old('link')}}">
        </div>



        <div class="form-group">
            <label>@lang('site.image')</label>
            <input type="file" name="photo" class="form-control" value="">
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
    CKEDITOR.replace( 'description_ar' );
    CKEDITOR.replace( 'description_en' );



</script>


@endsection
