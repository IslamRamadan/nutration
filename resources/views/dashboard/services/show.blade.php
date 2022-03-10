@extends('layouts.dashboard.app2')
@section('title')
    @lang("services")
@endsection
@section('mo')




@section('ti')
    @lang("site.services")
@endsection
<section class="content">






    <div class="box box-primary">




        <div class="box-header">



        </div><!-- end of box header -->

        <div class="row">
            <div class="col-md-8">
                <div class="box-body">




                    <div class="form-group">
                        <label>{{ __('site.name') }}</label>

                        <p>
                            {{ $service->name }}
                        </p>

                    </div>
                    <div class="form-group">
                        <label>{{ __('site.phone') }}</label>

                        <p>
                            {{ $service->phone }}
                        </p>

                    </div>
                    @if ($service->type == 4)
                    <div class="form-group">
                        <label>{{ __('site.email') }}</label>

                        <p>
                            {{ $service->email }}
                        </p>

                    </div>
                        <div class="form-group">
                            <label>{{ __('اسم الباقه') }}</label>

                            <p>
                                @isset($service->boquet->id)
                                    {{ $service->boquet->title_ar }}
                                @else
                                    -
                                @endisset
                            </p>

                        </div>
                    @endif
                    @if ($service->type == 2||$service->type == 4)
                        <div class="form-group">
                            <label>{{ __('site.age') }}</label>

                            <p>
                                {{ $service->age }}
                            </p>

                        </div>
                        <div class="form-group">
                            <label>{{ __('site.tall') }}</label>

                            <p>
                                {{ $service->height }}
                            </p>

                        </div>
                        <div class="form-group">
                            <label>{{ __('site.weight') }}</label>

                            <p>
                                {{ $service->weight }}
                            </p>

                        </div>
                    @endif
                    <div class="form-group">
                        @if ($service->type == 0)
                            <label>وصف الوجبة(الكميات)</label>
                        @elseif ($service->type == 1)
                            <label>النظام الغذائي</label>
                        @elseif ($service->type == 2)
                            <label>الروتين الغذائي اليومي(عدد الوجبات و الكميات)</label>
                        @else
                            <label>ملاحظات</label>
                        @endif

                        <p>
                            {{ $service->content }}
                        </p>

                    </div>








                </div><!-- end of box body -->
            </div>

        </div>

    </div><!-- end of box -->





</section>








@endsection
