@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل الدول")
@endsection
@section('mo')
    



     @section('ti')
         تعديل الدول
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['countries.update',$category->id],
                  "method"=>"PUT"

                  ])!!}
                    {{ csrf_field() }}



                        <div class="form-group">
                            <label>@lang('القسم')</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}"  required>
                        </div>

                        <div class="form-group">
                            <label>@lang('القسم بالانجليزية')</label>
                            <input type="text" name="name_en" class="form-control" value="{{ $category->name_en }}" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('حالة الخدمة')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
                                <option @if($category->activity == 1 )  {{ "selected" }} @endif value="1">مفعلة</option>
                                <option @if($category->activity == 0 )  {{ "selected" }} @endif value="0">معطلة</option>
                            
                        </select>
                        </div>
  
                        <div class="form-group">
                            <label>@lang('الرمز')</label>
                            <input  type="text" name="code" class="form-control" value="{{ $category->code }}" required>
                        </div>
                         <div class="form-group">
                            <label>@lang('العملة')</label>
                            <input  type="text" name="currency" class="form-control" value="{{ $category->currency }}" required>
                        </div>
                        
				
				 <div class="form-group">
                            <label>@lang('المفتاح')</label>
                        <input  type="number" name="phone_code" class="form-control" value="{{ $category->phone_code }}" required>
                        </div>
				 

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
