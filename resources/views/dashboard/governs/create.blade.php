@extends('layouts.dashboard.app2')
@section('title')
@lang("اضافة محافظة")
@endsection
@section('mo')
    

     @inject('country','App\Models\Country')


     @section('ti')
         اضافة محافظة
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['governs.store'],
                  "method"=>"post"

                  ])!!}
                    {{ csrf_field() }}


                         <div class="form-group">
                            <label>@lang('الدولة') </label>
                            {!! Form::select('country_id',$country->pluck('name','id')->toArray(),null,[
                                'class' => 'form-control form-control-lg' . ($errors->has('category_id') ? ' is-invalid' : null),
                                 'id' => '',
                                 'placeholder' => 'اختر الدولة',
                               
    
                             ]) !!}
    
                        </div>
                        <div class="form-group">
                            <label>@lang('المحافظة')</label>
                            <input type="text" name="name" class="form-control" value="" required>
                        </div>
				
				 <div class="form-group">
                            <label>@lang('المحافظة بالانجليزية')</label>
                            <input type="text" name="name_en" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('سعر التوصيل')</label>
                            <input type="text" name="price" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('الحالة ')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
                            <option  value="1">مفعلة</option>
                            <option value="0">معطلة</option>
                            
                        </select>
                        </div>
  
                        <div class="form-group">
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
