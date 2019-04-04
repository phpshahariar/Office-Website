@extends('backend.master')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Update Your Contact information</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/contact-update') !!}" method="post" id="contact" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{!! $edit_contact->id !!}" class="form-control" required name="id" id="id">
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Email</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="email" value="{!! $edit_contact->email !!}" class="form-control" required name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Phone</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="number" value="{!! $edit_contact->phone !!}" class="form-control" required name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Address</em></strong></label>
                                    <div class="col-sm-12" id="editor">
                                        <textarea class="form-control" id="editor1" name="street">{!! $edit_contact->street !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Location</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="text" value="{!! $edit_contact->location !!}" class="form-control" required name="location" id="location">
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
                                        <input type="submit" name="btn" class="btn btn-block btn-outline-primary" id="btn" value="Update Contact">
                                    </div>
                                </div>
                            </form>
                            <script>
                                document.forms['contact'].elements['publication_status'].value="{!! $edit_contact->publication_status !!}";
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