@extends('admin.frontend.master_template')

@section('content-wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Add New Block</h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-header -->
    <section>
        <div class="container">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Page Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                    <span>Please keep the title here</span>
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" id="summernote" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group ">
                                <label for="exampleInputEmail1">Featured Image</label>
                                <input type="file" name="" class="form-control" style="border: none; padding: 0">
                                <span style="font-size: 10px;">Please set the main image of your product</span>
                              </div>
                                <div class="form-group">
                                    <label>Block Code</label>
                                    <textarea class="form-control" name="short_description" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-8">
                                <button type="submit" name="add_page" class="btn btn-default btn btn-primary">Add
                                    Widget</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection
