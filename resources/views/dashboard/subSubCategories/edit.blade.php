@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل القسم الفرعي")
@endsection
@section('mo')
    



     @section('ti')
     تعديل القسم الفرعي
     @endsection
     @inject('cat','App\Models\Category')
     @inject('subcat','App\Models\SubCategory')


        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model($category, ['route' => ['subSubCategories.update',$category->id],
                  "method"=>"PUT",'enctype' => 'multipart/form-data'

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
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control" >
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('الترجمة')</label>
                            <input type="text" name="name_en" value="{{ $category->name_en }}"  class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang(' الحالة')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
                            <option @if($category->activity == 1 )  {{ "selected" }} @endif value="1">مفعلة</option>
                            <option @if($category->activity == 0 )  {{ "selected" }} @endif value="0">معطلة</option>
                            
                        </select>
                        </div>
                       
  
                        <div class="form-group col-md-6">
                            <label>@lang('ترتيب الظهور')</label>
                            <input  type="number" name="num" class="form-control" value="{{ $category->num }}">
                        </div>


                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل </button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->



        @push('scripts')
        <script>
          
            
        </script>
        @endpush








@endsection
