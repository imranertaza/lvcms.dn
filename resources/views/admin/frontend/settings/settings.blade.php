@extends('admin.frontend.master_template')

@section('content-wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content  -->
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>General Settings</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content-body">
        <div class="container">
            <div class="col-lg-8">
                <div class="card card-body">
                    <div class="panel panel-default">
                        <div class="panel-heading mb-3">
                            Settings
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div>
                            <form method="post" action="">
                                <label>Website title</label>
                                <input type="text" name="site_title" class="form-control" value=""><br>
                                
                                <label>Set general email</label>
                                <input type="text" name="gen_email" class="form-control" value=""><br>
                                
                                <label>Contact form email</label>
                                <input type="text" name="form_email" class="form-control" value=""><br>
                                
                                <label>Contact page email</label>
                                <input type="text" name="contact_email" class="form-control" value=""><br>
                                
                                <label>Perday matching</label>
                                <input type="text" name="per_day_matching" class="form-control" value=""><br>
    
                                <label>Min matching point</label>
                                <input type="text" name="min_matching_point" class="form-control" value=""><br>
    
                                <label>PM ID</label>
                                <input type="text" name="PM_ID" class="form-control" value=""><br>
    
                                <label>Perday video watch</label>
                                <input type="text" name="per_day_video_watch" class="form-control" value=""><br>
    
                                <label>Perday video watch earning</label>
                                <input type="text" name="per_day_video_watch_earning" class="form-control" value=""><br>
    
                                <label>Max Withdraw PerDay</label>
                                <input type="text" name="maxWithdrawPerDay" class="form-control" value=""><br>
    
                                <label>Min Withdraw PerTime</label>
                                <input type="text" name="minWithdrawPerTime" class="form-control" value=""><br>
    
    
    
                                <label>Max Withdraw PerTime</label>
                                <input type="text" name="maxWithdrawPerTime" class="form-control" value=""><br>
    
                                <label>User expiry day</label>
                                <input type="text" name="user_expiry_day" class="form-control" value=""><br>
    
                                
                                <input type="submit" name="save_settings" class="btn btn-default btn btn-primary" value="Save Settings">
                             </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
