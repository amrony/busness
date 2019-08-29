@extends('admin.master')

@section('body')
    {{--    @dd('$businessProfiles');--}}
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('features.create') }}" class="btn btn-danger m-t-15 waves-effect">Add Features</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">All Features</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ourFeatures as $key=>$ourFeature)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $ourFeature->title }}</td>
                            <td>{{ $ourFeature->short_description }}</td>
                            <td>{{ $ourFeature->long_description }}</td>
                            <td>
                                <img src="{{ url('storage/featutes/'.$ourFeature->image) }}" height="100"
                                     width="100">
                            </td>
                            <td>
                                <a href="{{ route('features.edit',$ourFeature->id) }}" class="btn btn-success btn-sm">
                                    <span class="fa fa-pencil-square-o fa-3x"></span>
                                </a>

                                <a href="{{ route('delete-feature', $ourFeature->id) }}" class="btn btn-danger btn-sm"
                                   onclick="return confirm
                                ('Are ' +
                                 'You ' +
                                 'Sure ' +
                                 'Delete This !')">
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




