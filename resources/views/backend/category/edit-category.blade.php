@extends('backend.master')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Update Your Category</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/update-category') !!}" method="POST" id="editCategoryForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong><em>Category Name</em></strong></label>
                                    <div class="col-sm-12">
                                        <input type="text" value="{!! $edit_category->category_name !!}" class="form-control" required name="category_name" id="category_name">
                                        <input type="hidden" value="{!! $edit_category->id !!}" class="form-control" required name="category_id" id="category_id">
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
                                        <input type="submit" name="btn" class="btn btn-block btn-outline-primary" id="btn" value="Update Category">
                                    </div>
                                </div>
                            </form>
                            <script>
                                document.forms['editCategoryForm'].elements['publication_status'].value="{!! $edit_category->publication_status !!}";
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

@endsection