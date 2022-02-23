@extends('layouts.dashboard.app2')
@section('title')
@lang("site.how_work")
@endsection
@section('mo')
    



     @section('ti')
     @lang("site.how_work")
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model("", ['route' => ['how_works.store'],
                  "method"=>"post",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="form-group">
                            <label>@lang('site.icon')</label>
                            <span> @lang('site.choose_icon')</span>
                            <a href="https://fontawesome.com/v5.15/icons" target="_blank">@lang('site.here')</a>
                            </label>
                            <input type="text" name="icon" class="form-control" value="far fa-user">
                        </div>


                        <label>@lang('site.title_en')</label>
                        <input type="text" name="title_en" class="form-control" value="">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.title_ar')</label>
                        <input type="text" name="title_ar" class="form-control" value="">
                    </div>

                

                      

                        <div class="form-group">
                            <label>@lang('site.content_en')</label>
                            <input type="text" name="content_en" class="form-control" value="">

                        </div>

                       
                        <div class="form-group">
                            <label>@lang('site.content_ar')</label>
                            <input type="text" name="content_ar" class="form-control" value="">
                        </div>
                <input type="hidden" name="type" class="form-control" value="2">


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
