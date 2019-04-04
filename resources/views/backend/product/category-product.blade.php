@extends('backend.master')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Product
        </button>
        @if(Session::get('message'))
            <span class="alert alert-success">{!! Session::get('message') !!}</span>
        @endif
    </div>
    <!-- Team Add Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Insert Your Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{!! url('/save-product') !!}" method="POST" id="addProduct" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm"><strong>Image</strong></label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control" required name="category_img" id="category_img" accept="image/*">
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
                                <input type="text" class="form-control" required name="product_name" id="product_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm"><strong style="margin-left: 20px;"><em>Details</em></strong></label>
                            <div class="col-sm-12" id="editor">
                                <textarea class="form-control" id="editor1" name="details"></textarea>
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
    <!-- Team end Modal -->
    <br/>

    {{--Main Body Start--}}
    <div class="container">
        <div class="alert" id="message" style="display: none"></div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Product Table</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Image</th>
                            <th>Category Name</th>
                            <th>Product Name</th>
                            <th>Status</th>
                            <th style="width: 200px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr>
                                <td>{!! $key+1 !!}</td>
                                <td>
                                    <img src="{{ asset('product-images/'.$product->category_img) }}" height="90" width="120"/>
                                </td>
                                <td>{{ $product->category->category_name }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td style="width: 200px;">
                                    @if($product->publication_status == 1)
                                        <a href="{{ url('/published-product/'.$product->id) }}" name="btn" class="btn btn-outline-success" title="Published">
                                            <i class="far fa-arrow-alt-circle-up"></i>
                                        </a>
                                    @else
                                        <a href="{{ url('/unpublished-product/'.$product->id) }}" name="btn" class="btn btn-outline-warning" title="Unpublished">
                                            <i class="far fa-arrow-alt-circle-down"></i>
                                        </a>
                                    @endif
                                    <a href="{{ url('/edit-product/'.$product->id) }}" name="btn" class="btn btn-outline-info" title="Edit">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/delete-product/'.$product->id) }}" name="btn" class="btn btn-outline-danger" onclick="return confirm('Are You Sure! Delete Team Information?');" title="Delete">
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