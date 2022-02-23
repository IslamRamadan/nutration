@extends('layouts.dashboard.app2')
@section('title')
@lang("اضافة قسم فرعي")
@endsection
@section('mo')
    
     @inject('subcat','App\Models\SubCategory')



     @section('ti')
         اضافة قسم فرعي
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model("", ['route' => ['subSubCategories.store'],
                  "method"=>"post",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}

                     
                    <input type="hidden" name="category_id" value="0">



                    <div class="form-group col-md-6">
                        <label>@lang('القسم ')</label>
                        {!! Form::select('subCategory_id',$subcat->pluck('name','id')->toArray(),null,[
                                   'class' => 'form-control form-control-lg' . ($errors->has('subCategory_id') ? ' is-invalid' : null),
                                    'id' => 'records',
                                    'placeholder' => '',
                                    "required"=>"required"
                                ]) !!}

                    </div>





                        <div class="form-group col-md-6">
                            <label>@lang("القسم الفرعي")</label>
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

                       
  
                        <div class="form-group col-md-12">
                            <label>@lang('ترتيب الظهور')</label>
                            <input value="" type="number" name="num" class="form-control" value="">
                        </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->



        @push('scripts')
        <script>
          
        </script>
        @endpush








@endsection
