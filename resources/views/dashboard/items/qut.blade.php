
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.categories")
@endsection
@section('mo')
    



     @section('ti')
         منتجات نفذت كميتها
     @endsection


     @inject('slider','App\Models\Slider')
     @inject('brand','App\Models\Brand')
     @inject('cat','App\Models\Category')
     @inject('subcat','App\Models\SubCategory')
     @inject('subcat2','App\Models\SubSubCategory')



    <div class="  " style="padding:10px">

<a style="margin-top:2px " href="{{url(route("items.deactivate")) }}" class="btn btn-danger btn-sm">@lang('جعل هذه المنتجات غير مفعلة')</a>
		
		<a style="margin-top:2px " href="{{url(route("items.activate")) }}" class="btn btn-success btn-sm">@lang('جعل هذه المنتجات مفعلة')</a>
    </div>


        <div class="box box-primary">



 

            <div class="box-body">


                <div class="table-responsive">
                    <table class="table table-hover table-bordered  ">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">@lang('المنتج ')</th>

                            <th class="text-center">@lang('القسم ')</th>
                            <th class="text-center">@lang('القسم الفرعي ')</th>
                            <th class="text-center">@lang('التصنيف ')</th>
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
                                <td class="text-center">{{$category->name}}</td>
                                <td class="text-center">{{$cat->find( $category->category_id)->name  }}</td>
                            <td class="text-center">{{$subcat->find( $category->subCategory_id)->name  }}</td>
                            <td class="text-center">{{$subcat2->find( $category->subSubCategory_id)->name  }}</td>
                            <td class="text-center"><img src="{{ asset($category->img) }}" alt="" width="90px" height="70px">  </td>
                            <td class="text-center">{{$category->price }}  د.ك</td>
                            <td class="text-center">{{$category->over_price }}  د.ك</td>

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

                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($categories)==0)
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif









             @push('scripts')
             <script>
               
                 $("#category").change(function (e) {
                     e.preventDefault();
                     // get gov
                     // send ajax
                     // append records
                     $("#records").empty();
                     $("#records2").empty();
               
                     var category = $("#category").val();
                      
                     if (category)
                     {
                         $.ajax({
                             url : '{{url('api/v1/subcats')}}',
                             type: 'post',
                             data: {_token:"{{csrf_token()}}",category_id:category},
                             success: function (data) {
             
                                 if (data.state == 1)
                                 {
             
                                     $("#records").empty();
                                     $("#records").append('<option value="">اختر قسم فرعي</option>');
                                     $.each(data.data, function (index, city) {
                                         $("#records").append('<option value="'+city.id+'">'+city.name+'</option>');
                                     });
                                 }
                             },
                             error: function (jqXhr, textStatus, errorMessage) { // error callback
                                 alert(jqXhr);
                             }
                         });
                     }else{
                       //  $("#records").empty();
                         $("#records").append('<option value="">اختر قسم فرعي</option>');
                     }
                 });
                 ///////////////////////////////////////////////sub sub cats 

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
                                     $("#records2").append('<option value="">اختر التصنيف</option>');
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
                         $("#records2").append('<option value="">  اختر التصنيف</option>');
                     }
                 });
             </script>
             @endpush
  

@endsection
