@extends('admin.master')

@section('body')
    {{--    @dd('$businessProfiles');--}}
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('about_us.create') }}" class="btn btn-danger m-t-15 waves-effect">Add About Us</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">All About Us</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aboutUs as $key=>$about)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->short_description }}</td>
                            <td>{{ str_limit($about->long_description, 50) }}</td>
                            <id>
                                <img src="{{ url('storage/about_us',$about->image) }}" height="100" width="80">
                            </id>
                            <td>
                                <a href="{{ route('about_us.edit',$about->id) }}" class="btn btn-success btn-sm">
                                    <span class="fa fa-pencil-square-o fa-3x"></span>
                                </a>
{{--                                {{ route('about_us.delete', $about->id) }}--}}
                                <a href="{{ route('about_us.delete',$about->id) }}" class="btn
                                btn-danger btn-sm"
                                   onclick="return confirm('Are You Sure Delete This !')">
                                    <span class="fa fa-trash-o"></span>
                                </a>
                            </td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@section('js_attach')

@endsection


@endsection




