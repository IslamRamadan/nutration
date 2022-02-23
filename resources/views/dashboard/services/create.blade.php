@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.add_service")
@endsection
@section('mo')




@section('ti')
    @lang("site.add_service")
@endsection

<div class="box box-primary">




    <div class="box-header">

    </div><!-- end of box header -->
    <div class="box-body">

        @include('partials._errors')



        {!! Form::model("", ['route' => ['services.store'],
        "method"=>"post",'enctype' => 'multipart/form-data'

        ])!!}
        {{ csrf_field() }}
        <div class="form-group">
            <label>@lang('site.category')</label>
            <select class="form-control" name="category_id">
                @foreach (App\Models\Category::select('id','title_ar','title_en')->get() as $item)
                <option value="{{$item->id}}">{{$item->title_ar}} - {{$item->title_en}}</option>
                @endforeach

            </select>
          </div>

        <div class="form-group">

            <label>@lang('site.title_ar')</label>
            <input type="text" name="title_ar" class="form-control" value="{{old('title_ar')}}">
        </div>


        <div class="form-group">
            <label>@lang('site.title_en')</label>
            <input type="text" name="title_en" class="form-control" value="{{old('title_en')}}">
        </div>

        <div class="form-group">
            <label>@lang('site.main_image')</label>
            <input type="file" name="photo" class="form-control" >
        </div>

        <div class="form-group">
            <label>@lang('site.background_image')</label>
            <input type="file" name="background_photo" class="form-control" >
        </div>


        <div class="form-group">
        <label>@lang('site.name_en')</label>
            <input type="text" name="name_en" class="form-control" value="{{old('name_en')}}">
        </div>


        <div class="form-group">
            <label>@lang('site.name_ar')</label>
            <input type="text" name="name_ar" class="form-control" value="{{old('name_ar')}}">
        </div>





        <div class="form-group">
            <label>@lang('site.content_en')</label>
            <textarea  name="content_en" class="form-control">
            {{old('content_en')}}</textarea>
        </div>


        <div class="form-group">
            <label>@lang('site.content_ar')</label>
            <textarea  name="content_ar" class="form-control" >
            {{old('content_ar')}}</textarea>
        </div>


        <div class="form-group">
            <label>@lang('site.add_imgs')</label>
            <input multiple="multiple" name="photos[]" type="file" class="form-control">


        </div>
        <div class="form-group text-center">
            <h2>اضافات اختياريه</h2>
        </div>

        <div class="form-group">
            <label>@lang('site.section1_en')</label>
            <textarea  name="section1_en" class="form-control" >
            {{old('section1_en')}}</textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.section1_ar')</label>
            <textarea  name="section1_ar" class="form-control" >
            {{old('section1_ar')}}</textarea>
        </div>


        <div class="form-group">
            <label>@lang('site.section2_title_en')</label>
            <input type="text" name="section2_title_en" class="form-control" value="{{old('section2_title_en')}}">
        </div>

        <div class="form-group">
            <label>@lang('site.section2_title_ar')</label>
            <input type="text" name="section2_title_ar" class="form-control" value="{{old('section2_title_ar')}}">

        </div>

        <div class="form-group">
            <label>@lang('site.section2_content_en')</label>
            <textarea  name="section2_content_en" class="form-control">
            {{old('section2_content_en')}}</textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.section2_content_ar')</label>
            <textarea  name="section2_content_ar" class="form-control">
            {{old('section2_content_ar')}}</textarea>
        </div>

        <div class="form-group">
            <label>@lang('site.section2_image')</label>
            <input type="file" name="section2_photo" class="form-control" >
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
    // CKEDITOR.replace( 'content_ar' );
    // CKEDITOR.replace( 'content_en' );
    CKEDITOR.replace( 'section1_en' );
    CKEDITOR.replace( 'section1_ar' );
</script>

@endsection
