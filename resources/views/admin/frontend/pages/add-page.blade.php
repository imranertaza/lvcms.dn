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
                        <h1>Add New Page</h1>
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            <span>Please keep the title here</span>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-8">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_description" rows="3" required=""></textarea>
                                <p class="help-block">The page short description will be here but it will not show into
                                    the main description.</p>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Page Template</label>
                                <select class="form-control" name="page_template">
                                    <option value="0">Difault Template</option>
                                    <option value="about_us - Copy.php">about_us - Copy.php</option>
                                    <option value="about_us.php">about_us.php</option>
                                    <option value="contact_us-Copy.php">contact_us-Copy.php</option>
                                    <option value="contact_us.php">contact_us.php</option>
                                    <option value="home.php">home.php</option>
                                    <option value="incentives.php">incentives.php</option>
                                    <option value="notice.php">notice.php</option>
                                    <option value="package.php">package.php</option>
                                </select>
                                <p class="help-block">Select a page template.</p>
                            </div>
                        </div>
                        <div class="form-group col-lg-8">
                          <button type="submit" name="add_page" class="btn btn-default btn btn-primary">Add New</button>
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
