@extends('layouts.dashboard.app2')
@section('title')
@lang("site.profile") 
@endsection

@section('mo')
    



     @section('ti')
@lang("site.profile")     @endsection



        <div class="box box-primary">



            <div class="box-header with-border">





            </div><!-- end of box header -->



            <div class="box-body">


                {!! Form::model($profile, ['route' => ['profile.username'],
                "method"=>"post"

                ])!!}
                  {{ csrf_field() }}



                      <div class="form-group">
                          <label>@lang('site.username')</label>
                        {!! Form::text('name',$profile->name,[
                      "class"=>"form-control",
                        "required"=>"required"
                        ])!!}
                      </div>




                  <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.save')</button>
                  </div>

                  {!! Form::close() !!}






                    <!-- Button trigger modal -->


            </div><!-- end of box body -->






        </div>
        <div class="box box-primary">



            <div class="box-header with-border">





            </div><!-- end of box header -->



            <div class="box-body">


                {!! Form::model($profile, ['route' => ['profile.password'],
                "method"=>"post"

                ])!!}
                  {{ csrf_field() }}



                      <div class="form-group">
                          <label>@lang('site.old_password')</label>
                     <input  required type="password" class="form-control" name="old" >
                      </div>



                      <div class="form-group">
                        <label>@lang('site.password')</label>
                        <input required type="password" class="form-control" name="password" >
                    </div>

                      <div class="form-group">
                        <label>@lang('site.password_confirmation')</label>
                   <input required type="password" class="form-control" name="password_confirmation">
                    </div>







                  <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.save')</button>
                  </div>

                  {!! Form::close() !!}






                    <!-- Button trigger modal -->


            </div><!-- end of box body -->






        </div>

        <div class="box box-primary">



            <div class="box-header with-border">





            </div><!-- end of box header -->



            <div class="box-body">


                {!! Form::model($profile, ['route' => ['profile.email'],
                "method"=>"post"

                ])!!}
                  {{ csrf_field() }}



                      <div class="form-group">
                          <label>@lang('site.email')</label>
                        {!! Form::text('email',$profile->email,[
                      "class"=>"form-control",
                      "required"=>"required"

                        ])!!}
                      </div>




                  <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.save')</button>
                  </div>

                  {!! Form::close() !!}






                    <!-- Button trigger modal -->


            </div><!-- end of box body -->






        </div>




    
@endsection
