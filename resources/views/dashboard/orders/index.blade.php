
@extends('layouts.dashboard.app2')
@section('title')
@lang("الطلبات")
@endsection
@section('mo')
    



     @section('ti')
      الطلبات
     @endsection
     @inject('governs','App\Models\Govern')
    
     @inject('users','App\Models\Client')



   


        <div class="box box-primary">

   
            <div class="box-header with-border">



                <form action="{{ route('orders.index') }}" method="get">


                        <div class="form-group col-md-12">
                            <label>@lang('حالة الطلب')</label>
                            <select style="width:100%"  name="status" class="form-control " >
                            
                            <option value="1">جاري الشحن</option>
                            <option  value="2">تم الشحن</option>
                            <option  value="3">تم الاستلام</option>
								<option  value="4">تم الالغاء</option>

                            
                        </select>
                        </div>

                           


                              

					
					 


                      <div class="col-md-6" >
                                    <label>@lang(' الهاتف')</label>
                                    <input type="number" name="phone" class="form-control" placeholder="بحث بالهاتف" value="{{ request()->search }}">
                                </div>
            
                       

                        <div class="col-md-6 form-group"  >
                            <label>@lang('كود الطلب')</label>
                            <input type="text" name="number" class="form-control" placeholder="بحث بكود الطلب" value="{{ request()->search }}">
                        </div>
					
					 <div class="col-md-6 form-group" >

                                    <label>@lang('الاعضاء')</label>
                                    {!! Form::select('user_id',$users->pluck('name','id')->toArray(),null,[
                                        'class' => 'form-control form-control-lg',
                                         'id' => 'user_id',
                                         'placeholder' => 'اختر  العضو',
                                       
            
                                     ]) !!}
            
                                </div>

                        <div class="col-md-6 form-group" >
							                            <label>@lang('ابحث')</label>

                            <button  type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> @lang('site.search')</button>



                        </div>

                   
                </form><!-- end of form -->

            </div><!-- end of box header -->





            <div class="box-body">


                <div class="table-responsive">
                    <table class="table table-hover table-bordered  ">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">@lang('الكود')</th>
                            <th class="text-center">@lang('المبلغ')</th>
                            <th class="text-center">@lang('الهاتف')</th>
                            <th class="text-center">@lang('الدوله')</th>
                            <th class="text-center">@lang('المدينة')</th>
                            <th class="text-center">@lang('العنوان')</th>
                            <th class="text-center">@lang('التاريخ')</th>
                             <th class="text-center">@lang('حالة التوصيل')</th>
                            <th class="text-center">@lang(' الدفع')</th>

                            <th class="text-center">@lang('الاجراءت')</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $category)


                            <tr>
                                <td>{{$loop->iteration}}</td>
                            <td class="text-center">{{$category->id}}</td>
                            <td class="text-center">{{$category->price}}  {{$my_setting->currency}} </td>
                            <td class="text-center">{{$category->phone}}</td>
                            <td class="text-center">{{$category->country}}</td>
                            <td class="text-center">{{$category->city}}</td>
                            <td class="text-center">{{$category->address}}</td>
                            <td class="text-center">{{$category->created_at}}</td>
                            @if ($category->status==1)
                            <td class="text-center"> <div class="alert alert-info">جاري الشحن</div></td>
                            @elseif($category->status==2)
                            <td class="text-center"> <div class="alert alert-danger">تم الشحن</div></td>

                            @elseif($category->status==3)
                            <td class="text-center"> <div class="alert alert-success">تم الاستلام </div></td>
                             @elseif($category->status==4)
                            <td class="text-center"> <div class="alert alert-danger">تم الالغاء</div></td>
                            @else
                            <td class="text-center"> </td>

                              @endif


                                                       <td class="text-center">{{$category->payment_method}}</td>



                                <td class="text-center">
                           @if($category->status!=4)
                                        <a href="{{url(route("orders.get_cancel",$category->id)) }}" class="btn btn-primary btn-sm"><i class="fa fa-close"></i> @lang('')</a>
									@endif
									 <a href="{{url(route("orders.edit",$category->id)) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> @lang('')</a>
									
                                        <a href="{{url(route("order.item",$category->id)) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> @lang('')</a>

                               
                                <form action="{{url(route("orders.destroy",$category->id)) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('')</button>
                                        </form><!-- end of form -->

                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table><!-- end of table -->
                </div>

                    {{ $orders->appends(request()->query())->links() }}
                    <!-- Button trigger modal -->


            </div><!-- end of box body -->

            @if(count($orders)==0)
            <div class="alert alert-danger"> لا يوجد بيانات
            </div>
             @endif










  

@endsection
