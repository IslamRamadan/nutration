@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل حالة الطلب")
@endsection
@section('mo')
    
     @inject('users','App\Models\Client')



     @section('ti')
      الغاء الطلب
     @endsection

@if($Order->user_id !=0 || $Order->user_id !="" )

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
          <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['orders.post_cancel',$Order->id],
                  "method"=>"POST"

                  ])!!}
                    {{ csrf_field() }}



                      
                  <input type="hidden" name="type" value="1">


                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fa fa-cancle"></i> @lang('الغاء و اضافة رصيد للعضو')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->
@else
<div></div>

   @endif













   <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['orders.post_cancel',$Order->id],
                  "method"=>"POST"

                  ])!!}
                    {{ csrf_field() }}



                      
                  <input type="hidden" name="type" value="0">


                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-cancle"></i> @lang('الغاء بدون اضافة رصيد للعضو')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->



<div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['orders.post_cancel',$Order->id],
                  "method"=>"POST"

                  ])!!}
                    {{ csrf_field() }}


 <div class=" form-group" >

                                    <label>@lang('اختر عضو لاضافة رصيد هذا الطلب الي حسابه')</label>
                                    {!! Form::select('user_id',$users->pluck('name','id')->toArray(),null,[
                                        'class' => 'form-control form-control-lg',
                                         'id' => 'user_id',
                                         'placeholder' => 'اختر  العضو',
                                       
            
                                     ]) !!}
            
                                </div>
                      
                  <input type="hidden" name="type" value="2">


                    <div class="form-group">
                        <button type="submit" class="btn btn-info"><i class="fa fa-cancle"></i> @lang('الغاء واضافة الرصيد')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->



@endsection
