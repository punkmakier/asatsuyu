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
                                    
                                    <h4 class="page-title">Inquiries</h4>
                                </div>
                                <table class="table table-hover" id="myTable">
                                    <thead class="bg-primary text-white">
                                            <th>Complete Name</th>
                                            <th>Number</th>
                                            <th>Email</th>
                                            <th>Budget</th>
                                            <th>Date Created</th>
                                            <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php $func->showInquiries(); ?>
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

        <!-- Large modal -->
        <div class="modal fade" id="showDetailsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Inquiry Details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                       <h5>Personal Info</h5>
                       <div class="row mt-3">
                            <div class="col-sm">
                                <label for="">First Name</label>
                                <input type="text" readonly id="fname" class="form-control">
                            </div>
                            <div class="col-sm">
                                <label for="">Last Name</label>
                                <input type="text" readonly id="lname" class="form-control">
                            </div>
                            <div class="col-sm">
                                <label for="">Contact Name</label>
                                <input type="text" readonly id="cnum" class="form-control">
                            </div>
                       </div>
                       <div class="row mt-2">
                            <div class="col-sm">
                                <label for="">Email</label>
                                <input type="text" readonly id="email" class="form-control">
                            </div>
                            <div class="col-sm">
                                <label for="">Address</label>
                                <input type="text" readonly id="address" class="form-control">
                            </div>
                       </div>

                        <br>
                       <h5>Travel Details</h5>
                       <div class="row mt-3">
                            <div class="col-sm">
                                <label for="">Travellers</label>
                                <input type="text" readonly id="travellers" class="form-control">
                            </div>
                            <div class="col-sm">
                                <label for="">Adults</label>
                                <input type="text" readonly id="adults" class="form-control">
                            </div>
                            <div class="col-sm">
                                <label for="">Children</label>
                                <input type="text" readonly id="children" class="form-control">
                            </div>
                       </div>
                       <div class="row mt-3">
                            <div class="col-sm">
                                <label for="">Start Date</label>
                                <input type="text" readonly id="start" class="form-control">
                            </div>
                            <div class="col-sm">
                                <label for="">End Date</label>
                                <input type="text" readonly id="end" class="form-control">
                            </div>
                       </div>
                       <div class="row mt-3">
                            <div class="col-sm">
                                <label for="">Departing From</label>
                                <input type="text" readonly id="departing" class="form-control">
                            </div>
                            <div class="col-sm">
                                <label for="">Budget</label>
                                <input type="text" readonly id="budget" class="form-control">
                            </div>
                       </div>
                       <div class="row mt-3">
                            <div class="col-sm">
                                <label for="">Ideal Trip</label>
                                <textarea class="form-control" id="ideal" readonly></textarea>
                            </div>
                            <div class="col-sm">
                                <label for="">Extra Question</label>
                                <textarea class="form-control" id="question" readonly></textarea>
                            </div>
                       </div>
                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function(){
                let table = new DataTable('#myTable');
            })


            function showDetails(id){
                $.ajax({
                    url: "controller.php",
                    type: "POST",
                    data: {id: id, Action: "ShowDetails"},
                    success: function(response){
                        var res = JSON.parse(response); // Parse the JSON response
                        console.log(response);
                        $("#fname").val(res.first_name);
                        $("#lname").val(res.last_name);
                        $("#cnum").val(res.contact_number);
                        $("#email").val(res.email);
                        $("#address").val(res.address);
                        $("#travellers").val(res.travellers);
                        $("#children").val(res.children);
                        $("#adults").val(res.adults);
                        $("#start").val(res.start_travel);
                        $("#end").val(res.end_travel);
                        $("#departing").val(res.departing_from);
                        $("#budget").val(res.budget);
                        $("#ideal").val(res.ideal);
                        $("#question").val(res.question);
                    }
                })

                $("#showDetailsModal").modal('show');	
            }
        </script>
        
    </body>
</html>
