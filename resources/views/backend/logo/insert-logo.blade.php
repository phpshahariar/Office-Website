@extends('backend.master')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Upload Logo
        </button>
        @if(Session::get('message'))
            <span class="alert alert-success">{!! Session::get('message') !!}</span>
        @endif
    </div>
        <!-- Logo Add Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Please Insert Your Logo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{!! url('/upload-logo') !!}" method="post" id="addLogo" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm"><strong>Add Logo</strong></label>
                                <div class="col-sm-7">
                                    <input type="file" class="form-control" required name="logo_upload" id="logo_upload" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-5 col-form-label"><strong>Publication Status</strong></label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="publication_status" required id="publication_status">
                                        <option>---Select Publication Status---</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" name="btn" id="btn" class="btn btn-success"><i class="fas fa-arrow-alt-circle-up"> Save</i></button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    <!-- Logo end Modal -->
    <br/>

    {{--Main Body Start--}}
    <div class="container">
        <div class="alert" id="message" style="display: none"></div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Table Example</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th style="width: 250px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($view as $key => $show)
                            <tr>
                                <td>{!! $key+1 !!}</td>
                                <td>
                                    <img src="{!! asset('logo-images/'.$show->logo_upload) !!}" height="100" width="200" alt="Logo"/>
                                </td>
                                <td>{!! $show->publication_status == 1 ? 'Published' : 'Unpublished' !!}</td>
                                <td style="width: 220px;">
                                    @if($show->publication_status == 1)
                                    <a href="{!! url('/published-logo/'.$show->id) !!}" name="btn" class="btn btn-sm btn-outline-success" title="Published">
                                        <i class="far fa-arrow-alt-circle-up"> Published</i>
                                    </a>
                                    @else
                                        <a href="{!! url('/unpublished-logo/'.$show->id) !!}" name="btn" class="btn btn-sm btn-outline-warning" title="Unpublished">
                                            <i class="far fa-arrow-alt-circle-down"> Unpublished</i>
                                        </a>
                                    @endif
                                    <a href="{!! url('/edit-logo/'.$show->id) !!}" class="btn btn-sm btn-outline-info" title="Edit">
                                        <i class="far fa-edit"> Edit</i>
                                    </a>
                                    <a href="{!! url('/delete-logo/'.$show->id) !!}" name="btn" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure! You Want To Delete This ?');" title="Delete">
                                        <i class="fas fa-trash"> Delete</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    {{--Main body end--}}

    {{--Ajax Crud Start--}}


@endsection