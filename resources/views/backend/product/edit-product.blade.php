@extends('backend.master')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align: center;"><em class="text-success">Update Your Product</em></h3>
                        </div>
                        <div class="card-body">
                            <form action="{!! url('/update-product') !!}" method="POST" id="updateProduct" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" value="{!! $edit_product->id !!}" required name="id" id="id">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm"><strong>Image</strong></label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control" required name="category_img" id="category_img" accept="image/*">
                                        <img src="{!! asset('product-images/'.$edit_product->category_img) !!}" height="80" width="80" alt="Product">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm"><strong>Category Name</strong></label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="category_id" required id="category_id">
                                            <option>---Select Product Category---</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm"><strong>Product Name</strong></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" value="{!! $edit_product->product_name !!}" required name="product_name" id="product_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm"><strong style="margin-left: 20px;"><em>Details</em></strong></label>
                                    <div class="col-sm-12" id="editor">
                                        <textarea class="form-control" id="editor1" name="details">{!! $edit_product->details !!}</textarea>
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
                                    <button type="submit" name="btn" id="btn" class="btn btn-outline-success btn-block"><i class="fas fa-arrow-alt-circle-up"> Update</i></button>
                                </div>
                            </form>
                            <script>
                                document.forms['updateProduct'].elements['publication_status'].value="{!! $edit_product->publication_status !!}";
                                document.forms['updateProduct'].elements['category_id'].value="{!! $edit_product->category_id !!}";
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