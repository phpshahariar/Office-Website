@extends('backend.master')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Update Your Work</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/update-work') !!}" method="post" id="editwork" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{!! $edit_work->id !!}">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong>Add Project</strong></label>
                                    <div class="col-sm-10">
                                        <input type="file" value="{!! $edit_work->project_upload !!}" class="form-control" required name="project_upload" id="project_upload" accept="image/*">
                                        <img src="{!! asset('work-images/'.$edit_work->project_upload) !!}" height="80" width="80" alt="Project">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong>Project Title</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{!! $edit_work->project_title !!}" required name="project_title" id="project_title" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label"><strong>Status</strong></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="publication_status" required id="publication_status">
                                            <option>---Select Publication Status---</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="col-sm-2"></div>
                                    <button type="submit" name="btn" id="btn" class="btn btn-success btn-block"><i class="fas fa-arrow-alt-circle-up"> Update Project</i></button>
                                </div>
                            </form>
                            <script>
                                document.forms['editwork'].elements['publication_status'].value="{!! $edit_work->publication_status !!}";
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
@endsection