@extends('backend.master')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Update Your Team</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/update-team') !!}" method="post" id="editTeam" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{!! $edit_team->id !!}">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><em><b>Member Photo</b></em></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="team_photo" id="team_photo">
                                        <img src="{!! asset('team-images/'.$edit_team->team_photo) !!}" height="80" width="80" alt="Logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong><em>Name</em></strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{!! $edit_team->name !!}" class="form-control" required name="name" id="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><strong><em>Designation</em></strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{!! $edit_team->designation !!}" class="form-control" required name="designation" id="designation">
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
                                document.forms['editTeam'].elements['publication_status'].value="{!! $edit_team->publication_status !!}";
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
@endsection