
@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.social")
@endsection
@section('mo')




@section('ti')
    @lang("site.social")
@endsection



<div class="  " style="padding:10px">

    <a href="{{ route('social.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

</div>


<div class="box box-primary">







    <div class="box-body">


        <div class="table-responsive">
            <table class="table table-hover table-bordered  ">

                <thead>
                <tr>
                    <th>#</th>

                    <th class="text-center">@lang('site.link')</th>

                    <th class="text-center">@lang('site.image')</th>

                    <th class="text-center">@lang('site.Procedures')</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($socials as $social)


                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$social->link}}</td>
                        <td class="text-center"><img src="{{ asset('/storage/'.$social->img) }}" alt="" width="90px" height="70px">  </td>


                        <td class="text-center">

                            <a href="{{url(route("social.edit",$social->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>


                            <form action="{{url(route("social.destroy",$social->id)) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete  btn-sm"><i class="fa  fa-trash"></i> @lang('site.delete')</button>
                            </form><!-- end of form -->

                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table><!-- end of table -->
        </div>

    {{ $socials->appends(request()->query())->links() }}
    <!-- Button trigger modal -->


    </div><!-- end of box body -->

    @if(count($socials)==0)

        <div class="alert alert-danger">@lang('site.no_data')
        </div>
    @endif













</div>












@endsection

