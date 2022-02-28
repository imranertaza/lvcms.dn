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
                        <h1>Create New Post</h1>
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
                <form>
                    <div class="card-body">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Post Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Please keep the title here">
                        </div>
                        </div>
                         <div class="col-md-8">
                          <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" id="summernote" rows="6"></textarea>
                        </div>
                          </div>   
                        <div class="row">
                            <div class="form-group col-lg-8">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_description" rows="3" required></textarea>
                                <p class="help-block">The page short description will be here but it will not show into the main description.</p>
                            </div>
                        </div>
                        <div class="form-group col-lg-8">
                            <button type="submit" name="add_page" class="btn btn-default btn btn-primary">Add
                                New</button>
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
