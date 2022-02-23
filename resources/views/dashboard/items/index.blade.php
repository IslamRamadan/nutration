
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.categories")
@endsection
@section('mo')




     @section('ti')
         المنتجات
     @endsection


     @inject('slider','App\Models\Slider')
     @inject('brand','App\Models\Brand')
     @inject('cat','App\Models\Category')
     @inject('subcat','App\Models\SubCategory')
     @inject('subcat2','App\Models\SubSubCategory')


{{--TODO :: EDITED--}}
    <div class="  " style="padding:10px">

            <a href="{{ route('items.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

		<a href="{{ route('items.storeg') }}" class="btn btn-danger"><i class="fa fa-eye"></i> @lang("منتجات نفذت كميتها")</a>

    </div>


        <div class="box box-primary">



            <div class="box-header with-border">



                <form action="{{ route('items.index') }}" method="get">

                    <div class="row">




                        <div class="col-md-6">

                            <label>@lang(' التاجر')</label>
                            {!! Form::select('category_id',$cat->pluck('name','id')->toArray(),null,[
                                'class' => 'form-control form-control-lg' . ($errors->has('category_id') ? ' is-invalid' : null),
                                 'id' => 'category',
                                 'placeholder' => 'اختر التاجر ',


                             ]) !!}

                        </div>

                            <div class="col-md-6">
                                    <label>@lang('القسم ')</label>
                                    {!! Form::select('subCategory_id',$subcat->pluck('name','id')->toArray(),null,[
                                               'class' => 'form-control form-control-lg' . ($errors->has('subCategory_id') ? ' is-invalid' : null),
                                                'id' => 'records',
                                                'placeholder' => '',

                                            ]) !!}

                                </div>


                                <div class="col-md-6">
                                    <label>@lang('القسم الفرعي')</label>
                                    {!! Form::select('subSubCategory_id',[],null,[
                                               'class' => 'form-control form-control-lg' . ($errors->has('subSubCategory_id') ? ' is-invalid' : null),
                                                'id' => 'records2',
                                                'placeholder' => '',

                                            ]) !!}

                                </div>

                                



                        <div class="col-md-6"  style="margin-top:5px ">
                            <input type="text" name="search" class="form-control" placeholder="بحث بالاسم" value="{{ request()->search }}">
                        </div>

                        <div class="col-md-6" style="margin-top:5px ">
                            <button  type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> @lang('site.search')</button>



                        </div>

                    </div>
                </form><!-- end of form -->

            </div><!-- end of box header -->



            <div class="box-body">


                <div class="table-responsive">
                    <table class="table table-hover table-bordered  ">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">@lang('المنتج ')</th>

                            <th class="text-center">@lang('التاجر ')</th>
                            <th class="text-center">@lang('القسم  ')</th>
                            <th class="text-center">@lang('القسم الفرعي ')</th>
                            <th class="text-center">@lang('الصورة ')</th>
                            <th class="text-center">@lang('السعر')</th>
                            <th class="text-center">@lang('سعر الخصم')</th>
                            <th class="text-center">@lang('الحالة ')</th>

                            <th class="text-center">@lang('الاجراءت')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)


                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-center">{{$category->name??""}}</td>
                                <td class="text-center">{{$cat->find( $category->category_id)->name??""  }}</td>
                            <td class="text-center">{{$subcat->find( $category->subCategory_id)->name??""  }}</td>
                            <td class="text-center">{{$subcat2->find( $category->subSubCategory_id)->name  }}</td>
                            <td class="text-center"><img src="{{ asset($category->img) }}" alt="" width="90px" height="70px">  </td>
                            <td class="text-center">{{$category->price }}  {{$my_setting->currency}}</td>
                            <td class="text-center">{{$category->over_price }}   {{$my_setting->currency}}</td>

                            <td class="text-center">{{$category->activity==1?"مفعل":"معطل"}}</td>


                                <td class="text-center">
  @if($category->type == 1)
       <a style="margin-top:2px " href="{{url(route("items.size",$category->id)) }}" class="btn btn-success btn-sm"><i class="fa fa-list"></i> @lang('')</a>
									@endif

                                        <a style="margin-top:2px " href="{{url(route("galaries.index",$category->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-image"></i> @lang('')</a>
                                        <a style="margin-top:2px " href="{{url(route("items.edit",$category->id)) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> @lang('')</a>



                                <form action="{{url(route("items.destroy",$category->id)) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                            <button style="margin-top:2px " type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('')</button>
                                        </form><!-- end of form -->

                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table><!-- end of table -->
                </div>

                    {{ $categories->appends(request()->query())->links() }}
                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($categories)==0)
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif









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
