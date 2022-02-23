@extends('layouts.dashboard.app2')
@section('title')
@lang("site.edit_slider")
@endsection
@section('mo')
    



     @section('ti')
@lang("site.edit_slider")
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model("", ['route' => ['sliders.update',$category->id],
                  "method"=>"PUT",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('site.name')</label>
                        <input type="text" name="text" class="form-control" value="{{ $category->text }}">
                    </div>


                    <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="photo" class="form-control" value="{{ $category->img }}">
                    </div>

                

                      
                    <div class="form-group">
                        <label>@lang('site.status')</label>
                        <select style="width:100%"  name="activity" class="form-control " >
                        <option @if($category->activity == 1 )  {{ "selected" }} @endif value="1">@lang('site.enabled')</option>
                        <option @if($category->activity == 0 )  {{ "selected" }} @endif value="0">@lang('site.disabled')</option>
                        
                    </select>
                    </div>

                       
                        <div class="form-group">
                            <label>@lang('site.appearance_arrangment')</label>
                            <input type="number" name="num" class="form-control" value="{{ $category->num }}">
                        </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
