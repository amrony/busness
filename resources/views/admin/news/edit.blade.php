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
                            <input class="form-control col-md-6" name="image" type="file">
                            <img class="img-responsive thumbnail" src="{{ url('storage/news/'.$news->image) }}" height="100" width="150">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Icon</label>
                            <input class="form-control col-md-6" name="icon" type="file">
                            <img class="img-responsive thumbnail" src="{{ url('storage/icon/'.$news->icon) }}" height="100" width="150">
                        </div>

                    <div class="additional_news" style="padding-top: 20px;">
                        <h3 class="tile-title">Additional News</h3>
{{--                        <div class="repeater">--}}
{{--                            <div data-repeater-list="group-a">--}}
                                @foreach($news->additional_news as $add_news)
                                    <input type="hidden" name="additional_news_id" value="{{ $add_news->id }}">
                                <div data-repeater-item>
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input class="form-control" type="text" name="additional_title" value="{{ $add_news->title }}">
                                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Body</label>
                                        <textarea class="form-control" rows="8" name="additional_body" placeholder="" >{{ $add_news->body }}</textarea>
                                        <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
                                    </div>
                                    <a class="btn btn-danger float-right" data-repeater-delete style="margin-bottom: 8px;">
                                        <span class="fa fa-trash-o"></span>
                                    </a>
                                </div>
                                    @endforeach
{{--                            </div>--}}
                            <div class="float-right" style="margin-bottom: 10px; padding-right: 5px;">
                                <input class="btn btn-info" data-repeater-create type="button" value="+"/>
                            </div>
{{--                        </div>--}}
                    </div>

                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@section('js_attach')

{{--    <script--}}
{{--            src="https://code.jquery.com/jquery-3.4.1.js"--}}
{{--            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="--}}
{{--            crossorigin="anonymous"></script>--}}

{{--    <script src="{{ asset('js/repeater/jquery.repeater.js') }}"></script>--}}

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            'use strict';--}}

{{--            $('.repeater').repeater({--}}
{{--                // defaultValues: {--}}
{{--                //     'textarea-input': 'foo',--}}
{{--                //     'text-input': 'bar[]',--}}
{{--                //     'select-input': 'B',--}}
{{--                //     'checkbox-input': ['A', 'B'],--}}
{{--                //     'radio-input': 'B'--}}
{{--                // },--}}
{{--                show: function () {--}}
{{--                    $(this).slideDown();--}}
{{--                },--}}
{{--                hide: function (deleteElement) {--}}
{{--                    if(confirm('Are you sure you want to delete this element?')) {--}}
{{--                        $(this).slideUp(deleteElement);--}}
{{--                    }--}}
{{--                },--}}
{{--                ready: function (setIndexes) {--}}

{{--                }--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}

@endsection


    @endsection
