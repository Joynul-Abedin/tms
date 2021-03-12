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
        <form action="dashboard.php">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Name</label>
                    <input type="text" class="form-control" id="validationTooltip01" placeholder="First name">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">DOB</label>
                    <input type='date' class="form-control" id="validationTooltip02" placeholder="Last name">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Email</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Email">
                        <div class="invalid-tooltip">
                            Please choose a unique and valid Email.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Address</label>
                    <input type="text" class="form-control" id="validationTooltip03" placeholder="City">
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip05">Gender</label>
                    <input type="text" class="form-control" id="validationTooltip05" placeholder="Gender">
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">Phone No</label>
                    <input type="text" class="form-control" id="validationTooltip04" placeholder="Phone No">
                    <div class="invalid-tooltip">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationTooltip05">Password</label>
                    <input type="password" class="form-control" id="myInput" placeholder="Zip">
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip05">Conmfirm Password</label>
                    <input type="password" class="form-control" id="myInput2" placeholder="Zip">
                    <input type="checkbox" onclick="myFunction2()">Show Password
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Add Manager</button>
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

<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunction2() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?php
include 'partials/footer.php';
?>