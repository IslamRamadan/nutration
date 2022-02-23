@extends('layouts.dashboard.app2')
@section('title')
@lang("اضافة قسم")
@endsection
@section('mo')




     @section('ti')
         اضافة تاجر
     @endsection

        <div class="box box-primary">


            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model("", ['route' => ['categories.store'],
                  "method"=>"post",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}



                        <div class="form-group col-md-6 ">
                            <label>@lang('التاجر')</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('التاجر بالانجليزية')</label>
                            <input type="text" name="name_en" class="form-control" value="">
                        </div>

                        <div class="form-group col-md-6 ">
                            <label>@lang('لوجو التاجر  ')</label>
                            <input type="file" name="photo" class="form-control" value="">
                        </div>

                        <div class="form-group col-md-6 ">
                            <label>@lang(' صورة الاعلان  ')</label>
                            <input type="file" name="photo2" class="form-control" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang(' الحالة')</label>
                            <select style="width:100%"  name="activity" class="form-control " >
                            <option  value="1">مفعلة</option>
                            <option value="0">معطلة</option>

                        </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>@lang('ترتيب الظهور')</label>
                            <input value="" type="number" name="num" class="form-control" value="">
                        </div>


                <div class="form-group col-md-6">
                    <label> حساب التاجر</label>
                    <select style="width:100%"  name="user_id" class="form-control " >
                      @foreach($vendors as $vendor)
                            <option value="{{$vendor->id}}">
                                {{$vendor->name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                    <div class="form-group col-md-12">
                        <br>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->












@endsection
