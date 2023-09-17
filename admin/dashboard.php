<?php 

    if(!isset($_COOKIE['username'])){
        header("Location: login.php");
    }

    require_once 'FunctionsController.php';
    $func = new FunctionsController;

    $user = $_COOKIE['username'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../images//logo.webp">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

        <style>
            div.dataTables_wrapper div.dataTables_filter {
                text-align: right;
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <?php include_once 'sidebar.php'; ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <?php include 'topbar.php'; ?>

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Transactions</h4>
                                </div>
                                <table class="table table-hover" id="myTable">
                                    <thead class="bg-primary text-white">
                                            <th>Transaction ID</th>
                                            <th>Item Details</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php $func->showPaymentDetails(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->

               

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function(){
                let table = new DataTable('#myTable');
            })
        </script>
        <script>
            function updateStatus(status,transid){
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, confirm'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:"controller.php",
                        type:"POST",
                        data:{status:status,transid:transid,Action: "updateStatus"},
                        success:function(resp){
                            if(resp.trim() == "Success"){
                                Swal.fire({
                                title: 'Success',
                                text: "Updated Successfully",
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Okay'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                                })
                            }
                        }
                    })
                }
                })


                
            }
        </script>
        
    </body>
</html>
