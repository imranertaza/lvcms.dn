@extends('admin.frontend.master_template')

@section('content-wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content  -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Pages List</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content-body">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <table class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td class="center">
                                    <a href="" class="btn btn-primary take_margin" title="Edit" >
                                      <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger take_margin" title="Delete">
                                      <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            {{-- pagination --}}
            <div class="row ">
              <div class="col-sm-12 col-md-5 ">
                  <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of
                      57 entries</div>
              </div>
              <div class="col-sm-12 col-md-7 d-flex justify-content-end">
                  <div class="dataTables_paginate paging_simple_numbers " id="example2_paginate">
                      <ul class="pagination mr-1">
                          <li class="paginate_button page-item previous disabled" id="example2_previous">
                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                          </li>
                          <li class="paginate_button page-item active">
                            <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                          </li>
                          <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example2" data-dt-idx="2"  tabindex="0" class="page-link">2</a>
                          </li>
                          <li class="paginate_button page-item ">
                            <a href="#" aria-controls="example2" data-dt-idx="3"
                                  tabindex="0" class="page-link">3</a>
                          </li>
                          <li class="paginate_button page-item next" id="example2_next">
                            <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
