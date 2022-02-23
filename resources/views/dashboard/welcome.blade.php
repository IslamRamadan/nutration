@extends('layouts.dashboard.app2')
@section('mo')

@inject('Slider', 'App\Models\Slider')

@inject('User', 'App\User')
@inject('Role', 'App\Role')


     @section('ti')
         @lang('site.home')
     @endsection



        <div class="box box-primary">
            <section class="content" style="background: #ECF0F5">
                <!-- Info boxes -->
                <div class="row">


{{--TODO :: PRODUCTS--}}

                  <!-- fix for small devices only -->

                    @if(Auth::user()->job_id == 1)


                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon  bg-aqua"><i class="fa fa-list"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">         @lang('site.slider')
</span>
                        <span class="info-box-number">{{ $Slider->count() }}</span>
                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->








                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">         @lang('site.managers')
</span>
                        <span class="info-box-number">{{ $User->count() }}</span>
                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->


                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">         @lang('site.managers_role')
</span>
                        <span class="info-box-number">{{ $Role->count() }}</span>
                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->





@endif


                </div><!-- /.row -->
              </section><!-- /.content -->


             




              </div><!-- end of box body -->










@endsection
@push('scripts')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
  window.onload = function () {

  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,

    axisX:{
      valueFormatString: "DD MMM"
    },
    axisY: {
      title: "عدد الطلبات",
      scaleBreaks: {
        autoCalculate: true
      }
    },
    data: [{
		type: "line",
		xValueFormatString: "DD MMM",
		color: "#F08080",
		dataPoints: [


		]
	}]
});
  chart.render();

  }

  </script>

@endpush
