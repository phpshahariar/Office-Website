@extends('backend.master')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Contact
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
                    <h5 class="modal-title" id="exampleModalLabel">Please Insert Your Contact Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Contact Us</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/contact-save') !!}" method="post" id="contact" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Email</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="email" value="" class="form-control" required name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Phone</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="number" value="" class="form-control" required name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Address</em></strong></label>
                                    <div class="col-sm-12" id="editor">
                                        <textarea class="form-control" id="editor1" name="street"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Location</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="text" value="" class="form-control" required name="location" id="location">
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
                                        <input type="submit" name="btn" class="btn btn-block btn-outline-primary" id="btn" value="Save Contact">
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Street Address</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th style="width: 130px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($our_contact as $key => $contact)
                            <tr>
                                <td>{!! $key+1 !!}</td>
                                <td>{!! $contact->email !!}</td>
                                <td>{!! $contact->phone !!}</td>
                                <td>{!! $contact->street !!}</td>
                                <td>{!! $contact->location !!}</td>
                                <td>{!! $contact->publication_status ==1 ? 'Published' : 'Unpublished'!!}</td>
                                <td style="width: 130px;">
                                    @if($contact->publication_status == 1)
                                        <a href="" name="btn" class="btn btn-outline-success" title="Published">
                                            <i class="far fa-arrow-alt-circle-up"></i>
                                        </a>
                                    @else
                                        <a href="" name="btn" class="btn btn-outline-warning" title="Unpublished">
                                            <i class="far fa-arrow-alt-circle-down"></i>
                                        </a>
                                    @endif
                                    <a href="" name="btn" class="btn btn-outline-info" title="Edit">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="" name="btn" class="btn btn-outline-danger" onclick="return confirm('Are You Sure! Delete About Information?');" title="Delete">
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