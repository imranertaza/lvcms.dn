@extends('admin.frontend.master_template')

@section('content-wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Add New Catagory</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content-header -->
    <section class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="POST" action="">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Catagory Name</label>
                                    <input class="form-control" name="cat_name">
                                    <p class="help-block">Name of the catagory</p>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="perent">
                                        <option value="0">Please Select</option>
                                    </select>
                                </div>
                                <button type="submit" class="mb-2 btn btn-default btn btn-primary"name="add_category">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection
