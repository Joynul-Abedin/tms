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
                    <h1 class="m-0 text-dark">Add Class</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form action="dashboard.php">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Class Name</label>
                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Class Name">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Add Class</button>
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