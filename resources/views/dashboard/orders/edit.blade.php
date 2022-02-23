@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل حالة الطلب")
@endsection
@section('mo')
    



     @section('ti')
         تعديل حالة الطلب
     @endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['orders.update',$Order->id],
                  "method"=>"PUT"

                  ])!!}
                    {{ csrf_field() }}



                      

                        <div class="form-group">
                            <label>@lang('الحالة ')</label>
                            <select style="width:100%"  name="status" class="form-control " >
                                <option @if($Order->status == 1 )  {{ "selected" }} @endif value="1">جاري الشحن</option>
                                <option @if($Order->status == 2 )  {{ "selected" }} @endif value="2">تم الشحن</option>
                                <option @if($Order->status == 3 )  {{ "selected" }} @endif value="3">تم الاستلام</option>
                            
                        </select>
                        </div>
  
                     


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
