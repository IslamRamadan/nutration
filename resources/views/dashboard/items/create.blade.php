@extends('layouts.dashboard.app2')
@section('title')
@lang("اضافة منتج")
@endsection
@section('mo')




     @section('ti')
اضافة منتج
     @endsection
     @inject('cat','App\Models\Category')
     @inject('subcat','App\Models\SubCategory')
     @inject('subcat2','App\Models\SubSubCategory')

     @inject('brand','App\Models\Brand')
     @inject('slider','App\Models\Slider')

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['items.store'],
                  "method"=>"post",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}


                    <div class="row">

                        @if(Auth::user()->job_id == 1)

                            <div class="col-md-4 form-group">

                                <label>@lang('التاجر ')</label>
                                {!! Form::select('category_id',$cat->pluck('name','id')->toArray(),null,[
                                    'class' => 'form-control form-control-lg' . ($errors->has('category_id') ? ' is-invalid' : null),
                                     'id' => 'category',
                                     'placeholder' => 'اختر  التاجر',
                                     "required"=>"required"


                                 ]) !!}

                            </div>

                        @elseif(Auth::user()->job_id == 2)

                            <input name="category_id" id="category" type="hidden" value="{{Auth::user()->vendor->id}}">

                        @endif

                            <div class="col-md-4 form-group">
                                <label>@lang('القسم ')</label>
                                {!! Form::select('subCategory_id',$subcat->pluck('name','id')->toArray(),null,[
                                           'class' => 'form-control form-control-lg' . ($errors->has('subCategory_id') ? ' is-invalid' : null),
                                            'id' => 'records',
                                            'placeholder' => '',
                                            "required"=>"required"

                                        ]) !!}

                            </div>


                            <div class="col-md-4 form-group" >
                                <label>@lang('القسم الفرعي')</label>
                                {!! Form::select('subSubCategory_id',[],null,[
                                           'class' => 'form-control form-control-lg' . ($errors->has('subSubCategory_id') ? ' is-invalid' : null),
                                            'id' => 'records2',
                                            'placeholder' => '',
                                            "required"=>"required"

                                        ]) !!}

                            </div>
                        </div>


                            <div class="row">

                            <div class="col-md-3 form-group">
                                           <label>@lang('اسم المنتج')</label>
                            <input type="text" name="name" class="form-control" value="" required>
                        </div>

								 <div class="col-md-3 form-group">
                                           <label>@lang('الاسم بالانجليزية')</label>
                            <input type="text" name="name_en" class="form-control" value="" required>
                        </div>

                        <div class="col-md-3 form-group">
                               <label>@lang('السعر')</label>
                            <input type="text" name="price" class="form-control" value="" required>
                        </div>

                        <div class="col-md-3 form-group">
                              <label>@lang('سعر الخصم ')</label>
                            <input type="text" name="over_price" class="form-control" value="" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>@lang('وصف المنتج')</label>
                            <textarea rows="3" name="description" class="form-control" required ></textarea>
                        </div>

								  <div class="col-md-6 form-group">
                            <label>@lang('الوصف بالانجليزية')</label>
                            <textarea rows="3" name="description_en" class="form-control" required ></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>@lang('صورة  المنتج في القسم ')</label>
                            <input type="file" name="photo" class="form-control" value="" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>@lang('الحالة')</label>
                            <select style="width:100%"  name="activity" class="form-control " >

                            <option value="0">معطلة</option>
                            <option  value="1">مفعلة</option>

                        </select>
                        </div>



                        <div class="form-group col-md-4">
                            <label>@lang('ترتيب الظهور')  (اختياري)</label>
                            <input value="" type="number" name="num" class="form-control" value="">
                        </div>

                    </div>

                   


                 <div class="row">

                    <div class="form-group col-md-3">
                        <label>@lang('يتبع وصل حديثا')</label>
                        <select style="width:100%"  name="new" class="form-control " >

                        <option value="0">لا</option>
                        <option  value="1">نعم</option>

                    </select>
                    </div>



                   



                    <div class="form-group col-md-3">
                        <label>@lang('يتبع   عروض الخصم')</label>
                        <select style="width:100%"  name="over" class="form-control " >

                        <option value="0">لا</option>
                        <option  value="1">نعم</option>

                    </select>
                    </div>

					 

					   <div class="form-group col-md-3">
                        <label>@lang('نوع المنتج ')</label>
                        <select style="width:100%"  name="type" class="form-control " >

                     <!--   <option value="1">له كمية ولون ومقاس</option>-->
                        <option  value="2">له كمية فقط</option>

                    </select>
                    </div>
					   <div class="col-md-3 form-group">
                                           <label>@lang(' الكمية  ( منتجات لها كمية فقط)')</label>
                            <input type="number" required name="qut" class="form-control" value="" >
                        </div>

                </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->








        @push('scripts')
        <script>



            

            $("#records").change(function (e) {
                e.preventDefault();
                // get gov
                // send ajax
                // append records
                $("#records2").empty();


                var category = $("#records").val();

                if (category)
                {
                    $.ajax({
                        url : '{{url('api/v1/subcats2')}}',
                        type: 'post',
                        data: {_token:"{{csrf_token()}}",category_id:category},
                        success: function (data) {

                            if (data.state == 1)
                            {

                                $("#records2").empty();
                                $("#records2").append('<option value="">اختر القسم الفرعي</option>');
                                $.each(data.data, function (index, city) {
                                    $("#records2").append('<option value="'+city.id+'">'+city.name+'</option>');
                                });
                            }
                        },
                        error: function (jqXhr, textStatus, errorMessage) { // error callback
                            alert(jqXhr);
                        }
                    });
                }else{
                  //  $("#records").empty();
                    $("#records2").append('<option value="">  اختر القسم الفرعي</option>');
                }
            });
        </script>
        @endpush



@endsection
