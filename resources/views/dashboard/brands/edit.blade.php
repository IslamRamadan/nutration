@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل ماركة")
@endsection
@section('mo')
    



     @section('ti')
     تعديل ماركة
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model("", ['route' => ['brands.update',$category->id],
                  "method"=>"PUT",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>@lang('اسم الماركة ')</label>
                        <input type="text" name="text" class="form-control" value="{{ $category->text }}">
                    </div>


                    <div class="form-group">
                        <label>@lang('الصورة ')</label>
                        <input type="file" name="photo" class="form-control" value="{{ $category->img }}">
                    </div>

                

                      
                    <div class="form-group">
                        <label>@lang('الحالة')</label>
                        <select style="width:100%"  name="activity" class="form-control " >
                        <option @if($category->activity == 1 )  {{ "selected" }} @endif value="1">مفعلة</option>
                        <option @if($category->activity == 0 )  {{ "selected" }} @endif value="0">معطلة</option>
                        
                    </select>
                    </div>

                       
                        <div class="form-group">
                            <label>@lang('ترتيب الظهور')</label>
                            <input type="number" name="num" class="form-control" value="{{ $category->num }}">
                        </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang(' تعديل ')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
