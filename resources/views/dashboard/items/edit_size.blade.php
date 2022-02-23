@extends('layouts.dashboard.app2')
@section('title')
@lang("ادارة المقاس")
@endsection
@section('mo')
    



     @section('ti')
ادارة المقاس 
     @endsection
     @inject('cat','App\Models\Category')
     @inject('subcat','App\Models\SubCategory')
     @inject('subcat2','App\Models\SubSubCategory')

     @inject('brand','App\Models\Brand')
     @inject('slider','App\Models\Slider')

        <div class="box box-primary">




            <div class="box-header">

            </div><!-- end of box header -->
            <div class="box-body">

               @include('partials._errors') 


                  {!! Form::model($size, ['route' => ['items.update.size',$size->id],
                  "method"=>"PUT",'enctype' => 'multipart/form-data'

                  ])!!}
                    {{ csrf_field() }}

                     
                 

              

                    <div class="row">
                        
                      
  
                        <div class="form-group col-md-4">
                            <label>@lang('المقاس') </label>
                            <input value="{{ $size->name }}" type="text" name="name" class="form-control" >
                        </div>

                    </div>

                   

              
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('تعديل')</button>
                    </div>

                    {!! Form::close() !!}

                    <form action="{{url(route("items.destroy.size",$size->id)) }}" method="post" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('site.delete')</button>
                            </form><!-- end of form -->

            </div><!-- end of box body -->

        </div><!-- end of box -->








        

@endsection
