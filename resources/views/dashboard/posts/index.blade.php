
@extends('layouts.dashboard.app2')
@section('title')
    @lang("site.posts")
@endsection
@section('mo')




@section('ti')
    @lang("site.posts")
@endsection



<div class="  " style="padding:10px">

    <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang("site.new")</a>

</div>


<div class="box box-primary">







    <div class="box-body">


        <div class="table-responsive">
            <table class="table table-hover table-bordered  ">

                <thead>
                <tr>
                    <th>#</th>

                    <th class="text-center">@lang('site.title_en')</th>
                    <th class="text-center">@lang('site.title_ar')</th>
                    {{-- <th class="text-center">@lang('site.content_en')</th>
                    <th class="text-center">@lang('site.content_ar')</th> --}}
                    <th class="text-center">@lang('site.image')</th>

                    <th class="text-center">@lang('site.Procedures')</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($posts as $post)


                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="text-center">{{$post->title_en}}</td>

                        <td class="text-center">{{$post->title_ar}}</td>
                        {{-- <td class="text-center">{{$post->content_en}}</td> --}}
                        {{-- <td class="text-center">{{$post->content_ar}}</td> --}}
                        <td class="text-center"><img src="{{ asset($post->img) }}" alt="" width="90px" height="70px">  </td>


                        <td class="text-center">

                            <a href="{{url(route("posts.edit",$post->id)) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                            <a href="{{url(route("post_galaries.index",$post->id)) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> @lang('site.imgs')</a>


                            <form action="{{url(route("posts.destroy",$post->id)) }}" method="post" style="display: inline-block">
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

    {{ $posts->appends(request()->query())->links() }}
    <!-- Button trigger modal -->


    </div><!-- end of box body -->

    @if(count($posts)==0)

        <div class="alert alert-danger">@lang('site.no_data')
        </div>
    @endif













</div>












@endsection

