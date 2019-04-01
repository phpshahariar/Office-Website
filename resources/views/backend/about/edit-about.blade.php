@extends('backend.master')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Update Your About</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/update-about') !!}" method="post" id="editAbout" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{!! $edit_about->id !!}">
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Heading</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="text" value="{!! $edit_about->heading !!}" class="form-control" required name="heading" id="heading">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Description</em></strong></label>
                                    <div class="col-sm-12" id="editor">
                                        <textarea class="form-control" id="editor1" name="description">{!! $edit_about->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel"><em><b>Status</b></em></label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="publication_status" required id="publication_status">
                                            <option>---Select Publication Status---</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="submit" name="btn" class="btn btn-block btn-outline-warning" id="btn" value="Update About">
                                    </div>
                                </div>
                            </form>
                            <script>
                                document.forms['editAbout'].elements['publication_status'].value="{!! $edit_about->publication_status !!}";
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection