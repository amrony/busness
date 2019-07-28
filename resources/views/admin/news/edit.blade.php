@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            {{--        <a href="" class="btn btn-danger m-t-15 waves-effect">Back</a>--}}
            {{--            <a class="btn btn-primary waves-effect" href="{{ route('view-article-news') }}">--}}
            <a href="{{ route('news.index') }}" class="btn btn-primary m-t-15 waves-effect">View News</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Update News</h3>
            <div class="tile-body">
                <form action="{{ route('news.update', $news->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $news->id }}">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ $news->title }}">
                            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Body</label>
                            <textarea class="form-control" rows="8" name="body">{{ $news->body }}</textarea>
                            <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Cover Photo</label>
                            <input class="form-control col-md-6" name="image" type="file"></br>
                            <img class="img-responsive thumbnail" src="{{ url('storage/news/'.$news->image) }}" height="100" width="150">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Icon</label>
                            <input class="form-control col-md-6" name="icon" type="file"></br>
                            <img class="img-responsive thumbnail" src="{{ url('storage/icon/'.$news->icon) }}" height="100" width="150">
                        </div>


                    <div class="body">
                        <div class="r-group">
                            <div class="additional_news" style="padding-top: 20px;">
                                <h3 class="tile-title">Additional News</h3>
                                    @foreach($news->additional_news as $add_news) @endforeach
                                        <input type="hidden" name="additional_news_id[]" value="{{ $add_news->id }}">
                                    <div data-repeater-item>
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <input class="form-control" type="text" name="additional_title[]">
                                            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Body</label>
                                            <textarea class="form-control" rows="8" name="additional_body[]" placeholder="" ></textarea>
                                            <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                                        </div>
                                    </div>
{{--                                @endforeach--}}
                            </div>
                            <button type="button" class="r-btnAdd">Add +</button>
                            <button type="button" class="r-btnRemove">Remove -</button>
                        </div>
                    </div>

                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





@section('js_attach')
    <script src="{{ asset('js/repeater/jquery.form-repeater.js') }}"></script>
{{--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
    <script src="jquery.form-repeater.js"></script>
    <script>
        $('.body').repeater({
            btnAddClass: 'r-btnAdd',
            btnRemoveClass: 'r-btnRemove',
            groupClass: 'r-group',
            minItems: 1,
            maxItems: 0,
            startingIndex: 0,
            showMinItemsOnLoad: false,
            reindexOnDelete: true,
            repeatMode: 'append',
            animation: null,
            animationSpeed: 400,
            animationEasing: 'swing',
            clearValues: true
        },
        [
                @foreach($news->additional_news as $add_news)
            {
                "additional_news_id[]": '{{ $add_news->id }}',
                "additional_title[]": '{{ $add_news->title }}',
                "additional_body[]": '{{ $add_news->title }}',
                // "vehicle[0][type]": "type1"
            },
            @endforeach
        ]);
    </script>

@endsection


    @endsection
