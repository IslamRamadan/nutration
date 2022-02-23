@extends('layouts.dashboard.app2')
@section('title')
@lang("تعديل القسم ")
@endsection
@section('mo')
    



     @section('ti')
         تعديل القسم 
     @endsection

        <div class="box box-primary">




            <div class="box-header">



            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors')


                  {!! Form::model($category, ['route' => ['subCategories.update',$category->id],
                  "method"=>"PUT",   'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}


                   <input type="hidden" name="category_id" value="0">




                        <div class="form-group col-md-6">
                            <label>@lang('القسم ')</label>
                          {!!  Form::text('name',null,[
                        "class"=>"form-control"

                          ])!!}
                        </div>

                        <div class="form-group col-md-6">
                          <label>@lang('الترجمة')</label>
                        {!!  Form::text('name_en',null,[
                      "class"=>"form-control"

                        ])!!}
                      </div>

                      <div class="form-group col-md-6">
                        <label>@lang('صورة القسم  ')</label>
                        <input type="file" name="photo" class="form-control" value="">
                    </div>

                        <div class="form-group col-md-6">
                          <label>@lang(' الحالة')</label>
                          <select style="width:100%"  name="activity" class="form-control " >
                          <option @if($category->activity == 1 )  {{ "selected" }} @endif value="1">مفعلة</option>
                          <option @if($category->activity == 0 )  {{ "selected" }} @endif value="0">معطلة</option>
                          
                      </select>
                      </div>

                      <div class="form-group col-md-6">
                          <label>@lang('ترتيب الظهور')</label>
                          <input value="{{ $category->num }}" type="number" name="num" class="form-control" >
                      </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                    </div>

                    {!! Form::close() !!}

            </div><!-- end of box body -->

        </div><!-- end of box -->











   

@endsection
