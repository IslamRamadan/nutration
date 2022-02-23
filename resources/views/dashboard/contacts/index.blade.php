@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.contacts_sec")
@endsection
@section('mo')




@section('ti')
    @lang("site.contacts_sec")
@endsection



<div class="box box-primary">







    <div class="box-body">


        <div class="table-responsive">
            <table class="table table-hover table-bordered  ">

                <thead>
                <tr>
                    <th>#</th>

                    <th class="text-center">@lang('site.name')</th>
                    <th class="text-center">@lang('site.email')</th>
                    <th class="text-center">@lang('site.phone')</th>
                    <th class="text-center">@lang('site.comment')</th>

                </tr>
                </thead>

                <tbody>
                @foreach ($contacts as $contact)


                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$contact->name}}</td>

                        <td class="text-center">{{$contact->email}}</td>
                        <td class="text-center">{{$contact->phone}}</td>
                        <td class="text-center">{{$contact->comment}}</td>



                    </tr>
                @endforeach

                </tbody>

            </table><!-- end of table -->
        </div>

    {{ $contacts->appends(request()->query())->links() }}
    <!-- Button trigger modal -->


    </div><!-- end of box body -->

    @if(count($contacts)==0)

        <div class="alert alert-danger">@lang('site.no_data')
        </div>
    @endif













</div>














@endsection
