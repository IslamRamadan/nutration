
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.categories")
@endsection
@section('mo')
    



     @section('ti')
         المبيعات
     @endsection



    


        <div class="box box-primary">
 <div class="box-header " >



                <form action="{{ route('store.index') }}" method="get">

                    <div class="form-body">

                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="from">    التاريخ من</label>
                                        {!! Form::date('from',"",[
                                            'class' => 'form-control',
                                               "id"=>  "from",
                                        ]) !!}
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="to">  التاريخ الي</label>
                                        {!! Form::date('to',"",[
                                            'class' => 'form-control',
                                               "id"=>  "to",
                                        ]) !!}
                                      </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top:5px ">
                                        <div class="form-group">
                                            <label for="to">       </label>
                                        <button  type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> @lang('site.search')</button>


                                    </div>
                                    </div>
                                  </div>





                                </div>

                </form><!-- end of form -->

            </div><!-- end of box header -->





            <div class="box-body" style="background:black">

 <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-heart"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">اجمالي المنتجات بالتطبيق </span>
                      <span class="info-box-number"><small>{{$my_setting->currency}} {{number_format((float)($has_color + $has_qut), 2, '.', ',')}}  </small></span>
						                          <span class="info-box-text"> </span>

                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->
				
				<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-heart"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">اجمالي الطلبات بالتطبيق </span>
                      <span class="info-box-number"><small>{{$my_setting->currency}} {{number_format((float)($all_orders_price), 2, '.', ',')}}  </small></span>
						                          <span class="info-box-text"> </span>

                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->
               
               
					<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-heart"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">رصيد العملاء </span>
                      <span class="info-box-number"><small>{{$my_setting->currency}} {{number_format((float)($balance), 2, '.', ',')}}  </small></span>
						                          <span class="info-box-text"> </span>

                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->
                             

                   


          

			
           

           





<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-heart"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text"> طلبات تم الدفع</span>
                      <span class="info-box-number"><small>{{$my_setting->currency}} {{number_format((float)($paid_order), 2, '.', ',')}}  </small></span>
						                          <span class="info-box-text"> </span>

                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->
				
				<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-heart"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">طلبات لم يتم الدفع </span>
                      <span class="info-box-number"><small>{{$my_setting->currency}} {{number_format((float)($not_paid_order), 2, '.', ',')}}  </small></span>
						                          <span class="info-box-text"> </span>

                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->
               
               
					<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-heart"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">طلبات تم الغائها </span>
                      <span class="info-box-number"><small>{{$my_setting->currency}} {{number_format((float)($cancel_order), 2, '.', ',')}}  </small></span>
						                          <span class="info-box-text"> </span>

                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->



              </div><!-- end of box body -->

              </div><!-- end of box body -->

@endsection
