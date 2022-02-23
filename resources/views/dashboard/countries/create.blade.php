@extends('layouts.dashboard.app2')
@section('title')
@lang("اضافة دولة")
@endsection
@section('mo')
    



     @section('ti')
         اضافة دولة
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['countries.store'],
                  "method"=>"post"

                  ])!!}
                    {{ csrf_field() }}



                        <div class="form-group">
                            <label>@lang('الدولة')</label>
                            <input type="text" name="name" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('الدولة بالانجليزية')</label>
                            <input type="text" name="name_en" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label>@lang(' الحالة')</label>
                            <select style="width:100%"  name="activity" class="form-control "  >
                            <option  value="1">مفعلة</option>
                            <option value="0">معطلة</option>
                            
                        </select>
                        </div>
  
                        <div class="form-group">
                            <label>@lang('الرمز')</label>
                            <input value="" type="text" name="code" class="form-control" value="" required>
                        </div>
                        
                        <div class="form-group">
                            <label>العملة</label>
                            <input value="" type="text" name="currency" class="form-control" value="" required>
                        </div>
                        	
				
				 <div class="form-group">
                            <label>@lang('المفتاح')</label>
                        <input value="" type="number" name="phone_code" class="form-control" value="" required>
                        </div>
				 


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
