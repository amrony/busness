@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            {{--        <a href="" class="btn btn-danger m-t-15 waves-effect">Back</a>--}}
            <a class="btn btn-primary waves-effect" href="{{ route('view-article-news') }}">
                <i class="material-icons"></i>
                <span>View News</span>
            </a>
        </div>
        <div class="tile">
            <h3 class="tile-title">Add News</h3>
            <div class="tile-body">
                <form class="repeater" enctype="multipart/form-data">
                    <div class="float-right" style="margin-bottom: 10px">
                        <input class="btn btn-info" data-repeater-create type="button" value="Add"/>
                    </div>
                    <div data-repeater-list="group-a">
                        <div data-repeater-item>
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input class="form-control" type="text" name="rows[0][title]" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Sub Title</label>
                                <input class="form-control" type="subtitle" name="rows[0][subtitle]" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Body</label>
                                <textarea class="form-control" rows="8" placeholder="" name="rows[0][body]"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Image</label>
                                <input class="form-control col-md-6" name="rows[0][image]" type="file">
                            </div>
                            <input class="btn-danger" data-repeater-delete type="button" value="Delete"/>
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit"></i>Submit</button>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>


@section('js_attach')

    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>

    <script src="{{ asset('js/repeater/jquery.repeater.js') }}"></script>

    <script>
        $(document).ready(function () {
            'use strict';

            $('.repeater').repeater({
                defaultValues: {
                    'textarea-input': 'foo',
                    'text-input': 'bar',
                    'select-input': 'B',
                    'checkbox-input': ['A', 'B'],
                    'radio-input': 'B'
                },
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if(confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
                ready: function (setIndexes) {

                }
            });

        });
    </script>

    @endsection

    @endsection