 
@extends('layouts.dashboard.app2')
@section('title')
@lang("الطلبات")
@endsection
@section('mo')
    



     @section('ti')
      بيانات الطلب
     @endsection
     @inject('governs','App\Models\Govern')
     


   


        <div class="box box-primary">

   
        



              <div style=" padding:20px ">
                     <div class="row ">
                          
						 <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">كود الطلب </span>
								<span class=""> : </span>

								<span>{{$order->id}}</span>
								
								</div>
						 
						  <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">تاريخ الطلب </span>
								<span class=""> : </span>

								<span>{{$order->created_at}}</span>
								
								</div>
						 
						 
                            <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">االمشتري </span>
								<span class=""> : </span>

								<span>@if($order->user_id ==0 || $order->user_id =="")
								زائر
								@else
								عضو 
								@endif</span>
								
								</div>
						 
						 
						  <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">الحالة </span>
								<span class=""> : </span>

								<span>
									@if($order->status ==1)
							       جاري الشحن
							@elseif($order->status ==2)
									جاري التوصيل 
									@elseif($order->status ==3)
									تم الاستلام 
                         @elseif($order->status ==4)
								تم الغاء الطلب 
									@else	
									لا يوجد 
									@endif</span>
								
								</div>
						 
						 
						 
						  <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">الدولة </span>
								<span class=""> : </span>

								<span>{{$order->country}}</span>
								
								</div>
						 
						 
						 
						  
						 
						 
						 
						   <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">المنطقة </span>
								<span class=""> : </span>

								<span>{{$order->city}}</span>
								
								</div>
						 
						 
						  <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">العنوان </span>
								<span class=""> : </span>

								<span>{{$order->address}}</span>
								
								</div>
						 
						 
						  <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">الاسم </span>
								<span class=""> : </span>

								<span>{{$order->username}}</span>
								
								</div>
						 
						 
						 
						  <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">الهاتف </span>
								<span class=""> : </span>

								<span>{{$order->phone}}</span>
								
								</div>
						 
						 
						 
						  <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">طريقة الدفع </span>
								<span class=""> : </span>

								<span>{{$order->type}}</span>
								
								</div>
						 
						 
						 
						   <div class="col-md-3 col-xs-12 col-sm-6" >
								                       
								<span style="color:red">المبلغ </span>
								<span class=""> : </span>
								<span class=""> {{$my_setting->currency}} </span>

								<span>{{$order->price}}</span>

								</div>
						 
						 
						 
						 
						  
						 
						  
						 
						 
						 
						 
								</div>
                          
                </div>	

            <div class="box-body">
				
				
                <div class="table-responsive">
                    <table class="table table-hover table-bordered  ">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">@lang('المنتج')</th>
                            <th class="text-center">@lang('سعر الوحدة')</th>
                            <th class="text-center">@lang('الكمية')</th>
                            <th class="text-center">@lang('اجمالي')</th>
                            <th class="text-center">@lang('اللون')</th>
                            <th class="text-center">@lang('المقاس')</th>
                            <th class="text-center">@lang('الصورة')</th>

                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $category)


                            <tr>
                                <td>{{$loop->iteration}}</td>
                            <td class="text-center">{{App\Models\Item::find($category->item_id)->name??""}}</td>
                            <td class="text-center">{{$category->price}}  {{$my_setting->currency}} </td>
                            <td class="text-center">{{$category->qut}}</td>
                            <td class="text-center">{{$category->qut * $category->price   }}  {{$my_setting->currency}} </td>
                            <td class="text-center">{{$category->color}}</td>
                            <td class="text-center">{{$category->size}}</td>
                            <td class="text-center"><img src="{{ asset($category->img) }}" alt="" width="90px" height="70px"> </td>
                            
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
