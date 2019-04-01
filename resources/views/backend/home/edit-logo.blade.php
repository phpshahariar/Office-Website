@extends('backend.master')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Update Your Logo</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/update-logo') !!}" method="post" id="editLogo" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{!! $edit_logo->id !!}">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><em><b>Add Logo</b></em></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="logo_upload" id="logo_upload">
                                        <img src="{!! asset('logo-images/'.$edit_logo->logo_upload) !!}" height="80" width="80" alt="Logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label"><em><b>Status</b></em></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="publication_status" required id="publication_status">
                                            <option>---Select Publication Status---</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <input type="submit" name="btn" class="btn btn-block btn-outline-success" id="btn" value="Update">
                                    </div>
                                </div>
                            </form>
                            <script>
                                document.forms['editLogo'].elements['publication_status'].value="{!! $edit_logo->publication_status !!}";
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
@endsection