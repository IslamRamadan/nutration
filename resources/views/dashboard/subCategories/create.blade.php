@extends('layouts.dashboard.app2')
@section('title')
@lang("اضافة قسم")
@endsection
@section('mo')
    



     @section('ti')
          الاقسام 
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model("", ['route' => ['subCategories.store'],
                  "method"=>"post",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}
<input type="hidden" name="category_id" value="0">
                     
                   
                    

                        <div class="form-group col-md-6">
                            <label>@lang('القسم ')</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('الترجمة')</label>
                            <input type="text" name="name_en" class="form-control" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('الحالة')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
                            <option  value="1">مفعلة</option>
                            <option value="0">معطلة</option>
                            
                        </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('صورة القسم  ')</label>
                            <input type="file" name="photo" class="form-control" value="">
                        </div>
  
                        <div class="form-group col-md-6">
                            <label>@lang('ترتيب الظهور')</label>
                            <input value="" type="number" name="num" class="form-control" value="">
                        </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
