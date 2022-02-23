
@extends('layouts.dashboard.app2')
@section('title')
@lang("site.categories")
@endsection
@section('mo')
    



     @section('ti')
             تشكيلة  :  {{ App\Models\Item::find($id)->name }}
     @endsection


     @inject('cat','App\Models\Category')
     @inject('subcat','App\Models\SubCategory')
     @inject('subcat2','App\Models\SubSubCategory')



    <br>


        <div class="box box-primary">



            <div class="box-header with-border">

         <div style="margin: 10px;font-size: 16px;font-weight: bold">  اضف مقاس جديد  </div>
                <form action="{{ route('items.add.size',$id) }}" method="post">
                     @csrf
                    <div class="row">

                        <div class="col-md-12 form-group"  style=" ">
                            <input type="text" name="name" class="form-control" placeholder="مقاس جديد" value="{{ request()->name }}">
                        </div>

                     

                        <div class="col-md-2 form-group" style=" ">
                            <button  type="submit" class="btn btn-primary "><i class="fa fa-add"></i> @lang('site.add')</button>



                        </div>

                    </div>
                </form><!-- end of form -->

            </div><!-- end of box header -->

        </div>
            

        @if(count($sizes)==0)
        <div class="alert alert-danger"> لا يوجد بيانات
        </div>
        @else
        <div class="alert alert-success text-center" style="font-weight: bold;font-size: 17px;"> التشكيلة المتاحة
        </div>
        @endif











        <div class="row">   
        @foreach ($sizes as $one)

      

               

                   

                        
                  <div class="col-md-6">   

                               
                <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">  المقاس :   <a href="{{ route('items.edit.size',$one->id) }}" > {{ $one->name }} <span style="padding : 20px 30px"> <i class="fa fa-eye"></i></span></a>  </h3>
                    </div>
                    <div class="panel-body">

                       
                       

                        


                        <form action="{{ route('items.add.color',[$id]) }}" method="post">
                            @csrf
                        <div class="row">
                            <input type="hidden" name="hidden" value="{{ $one->id }}">
                            <div class="col-md-3 form-group"  style=" ">
    
                                <input type="text" name="name" class="form-control" placeholder="لون جديد" value="" required>
                            </div>
							
							 <div class="col-md-3 form-group"  style=" ">
    
                                <input type="text" name="name_en" class="form-control" placeholder="اللون بالانجليزية" value="" required>
                            </div>
    
    
    
                            <div class="col-md-3 form-group"  style=" ">
    
                                <input min="1" type="number" name="qut" class="form-control" placeholder="الكمية" value="" required>
                            </div>
    
                            <div class="col-md-3 form-group"  style=" ">
    
                                <button  type="submit" class="btn btn-success "><i class="fa fa-plus"></i> @lang('site.add')</button>

                            </div>
    
                           
                        </div>
                    </form>
                    @php
                    $array = [];
                @endphp
                        @foreach ($one->colors as $one2)
 


                         @if(!in_array($one2->name,$array))
                         <form action="{{ route('items.update.color',[$id,]) }}" method="post">
                            @csrf
                            <input type="hidden" name="hidden_size" value="{{ $one->id }}">
                            <input type="hidden" name="hidden_color" value="{{ $one2->id }}">

                            <div class="row">
                        <div class="col-md-3 form-group"  style=" ">
                            <label>@lang('اللون')</label>

                            <input type="text" name="name" class="form-control" placeholder="" value="{{ $one2->name}}">
                        </div>
								
								  <div class="col-md-3 form-group"  style=" ">
                            <label>@lang('اللون بالانجليزية')</label>

                            <input type="text" name="name_en" class="form-control" placeholder="" value="{{ $one2->name_en}}">
                        </div>



                        <div class="col-md-2 form-group"  style=" ">
                            <label>@lang('الكمية')</label>
                            @php
                                $qut = App\Models\Color::where("item_id",$id)->where("size_id",$one->id)->where("name",$one2->name)->count();
                            @endphp

                            <input type="text" name="qut" class="form-control" placeholder="" value="{{  $qut}}">
                        </div>

                        <div class="col-md-2 form-group"  style=" ">
                            <label>@lang(' ')</label>

                            <input  type="submit" class="btn btn-primary btn-block " value="@lang('site.edit')">
                        </div>

                        <div class="col-md-2 form-group"  style=" ">
                            <label>@lang(' ')</label>

                            <input  type="submit" class="btn btn-danger btn-block  "value ="@lang('حذف')" name="delete">
                        </div>
                    </div>
                </form>
                    @endif

                   
                    @php
                    $array[] = $one2->name;
                @endphp

                        @endforeach 
                        @php
                        $array = [];
                    @endphp

                       
                    </div>
                </div>

            </div>     
           

          
        @endforeach 
    </div>


           
  

@endsection
