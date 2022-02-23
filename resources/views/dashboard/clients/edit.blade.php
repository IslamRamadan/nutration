@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل  عضو")
@endsection
@section('mo')
    



     @section('ti')
          
تعديل  عضو
   :  {{$user->name??""}} 
@endsection

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model($user, ['route' => ['clients.update',$user->id],
                  "method"=>"PUT"

                  ])!!}
                    {{ csrf_field() }}



                      

                        <div class="form-group">
                            <label>@lang('الحالة ')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
             <option @if($user->activity == 1 )  {{ "selected" }} @endif value="1">مفعل</option>
              <option @if($user->activity == 0 )  {{ "selected" }} @endif value="0">معطل</option>
                            
                        </select>
                        </div>
  
                     


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
