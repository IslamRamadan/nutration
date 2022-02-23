
@extends('layouts.dashboard.app2')
@section('title')
الاقسام الفرعية
@endsection
@section('mo')
    



     @section('ti')
         الاقسام الفرعية

     @endsection

     @inject('cat','App\Models\Category')
     @inject('subcat','App\Models\SubCategory')


    <div class="  " style="padding:10px">

            <a href="{{ route('subSubCategories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

    </div>


        <div class="box box-primary">



            <div class="box-header with-border">



                <form action="{{ route('subSubCategories.index') }}" method="get">

                    <div class="row">

                        
                            

                        

                            <div class="col-md-12">
                                    <label>@lang('القسم ')</label>
                                    {!! Form::select('subCategory_id',$subcat->pluck('name','id')->toArray(),null,[
                                               'class' => 'form-control form-control-lg' . ($errors->has('subCategory_id') ? ' is-invalid' : null),
                                                'id' => 'records',
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
                            <th class="text-center">@lang('القسم الفرعي' )</th>
                            <th class="text-center">@lang('الترجمة ')</th>
                            <th class="text-center">@lang('القسم  ')</th>
                         
                            <th class="text-center">@lang('الحالة')</th>
                            <th class="text-center">@lang('الترتيب')</th>

                            <th class="text-center">@lang('الاجراءت')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)


                            <tr>
                                <td>{{$loop->iteration}}</td>
                               

                            <td class="text-center">{{$category->name}}</td>
                            <td class="text-center">{{$category->name_en}}</td>
                           
                            <td class="text-center">{{$subcat->find( $category->subCategory_id)->name??""  }}</td>
                            <td class="text-center">{{$category->activity==1?"مفعل":"معطل"}}</td>
                            <td class="text-center">{{$category->num}}</td>


                                <td class="text-center">

                                        <a href="{{url(route("subSubCategories.edit",$category->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>

                               
                                <form action="{{url(route("subSubCategories.destroy",$category->id)) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('site.delete')</button>
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
               
                 $("#category").change(function (e) {
                     e.preventDefault();
                     // get gov
                     // send ajax
                     // append records
                     $("#records").empty();
               
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
                                     $("#records").append('<option value="">اختر قسم </option>');
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
                         $("#records").append('<option value="">اختر قسم </option>');
                     }
                 });
             </script>
             @endpush

@endsection
