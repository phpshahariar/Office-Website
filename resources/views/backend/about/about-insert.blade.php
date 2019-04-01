@extends('backend.master')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add About
        </button>
        @if(Session::get('message'))
            <span class="alert alert-success">{!! Session::get('message') !!}</span>
        @endif

        @if(Session::get('delete'))
            <span class="alert alert-danger">{!! Session::get('delete') !!}</span>
        @endif
    </div>
    <!-- Team Add Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Insert Your About Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">About Our Company</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/about-info') !!}" method="post" id="about" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Heading</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="text" value="" class="form-control" required name="heading" id="heading">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Description</em></strong></label>
                                    <div class="col-sm-12" id="editor">
                                        <textarea class="form-control" id="editor1" name="description"></textarea>
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
                                        <input type="submit" name="btn" class="btn btn-block btn-outline-primary" id="btn" value="Save About">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Team end Modal -->
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
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th style="width: 130px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($about_show as $key => $show)
                            <tr>
                                <td>{!! $key+1 !!}</td>
                                <td><h3>{!! $show->heading !!}</h3></td>
                                <td>{!! $show->description !!}</td>
                                <td>{!! $show->publication_status == 1 ? 'Published' : 'Unpublished'!!}</td>
                                <td style="width: 130px;">
                                    @if($show->publication_status == 1)
                                        <a href="{!! url('/published-about/'.$show->id) !!}" name="btn" class="btn btn-outline-success" title="Published">
                                            <i class="far fa-arrow-alt-circle-up"></i>
                                        </a>
                                        @else
                                        <a href="{!! url('/unpublished-about/'.$show->id) !!}" name="btn" class="btn btn-outline-warning" title="Unpublished">
                                            <i class="far fa-arrow-alt-circle-down"></i>
                                        </a>
                                    @endif
                                    <a href="{!! url('/edit-about/'.$show->id) !!}" name="btn" class="btn btn-outline-info" title="Edit">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="{!! url('/delete-about/'.$show->id) !!}" name="btn" class="btn btn-outline-danger" onclick="return confirm('Are You Sure! Delete About Information?');" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
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

    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection