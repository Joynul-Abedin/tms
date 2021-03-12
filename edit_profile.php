<?php
include 'partials/header.php';
?>
<!-- Main Sidebar Container -->
<?php
include 'partials/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Manager</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form action="profile.php" method="POST">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Name</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Arifur Rahman Ovi">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">DOB</label>
                    <input type='date' class="form-control" id="validationTooltip02" value="01-01-1997">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Email</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationTooltipUsername" value="arifurr1997@gmail.com">
                        <div class="invalid-tooltip">
                            Please choose a unique and valid Email.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Address</label>
                    <input type="text" class="form-control" id="validationTooltip03" value="Sector 10, Uttara,Dhaka, Bangladesh">
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip05">Gender</label>
                    <input type="text" class="form-control" id="validationTooltip05" value="Male">
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">Phone No</label>
                    <input type="text" class="form-control" id="validationTooltip04" value="01234567899">
                    <div class="invalid-tooltip">
                        Please provide a valid state.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--  <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer> -->
<?php
include 'partials/footer.php';
?>