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
        <!-- Quill css -->
        <link href="assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />
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
                                    <h4 class="page-title">Newsletter</h4>
                                </div>
                                <!-- HTML -->
                                <form id="myAttachmentForm" enctype= multipart/form-data>
                                <div class="mb-3 mt-5">
                                    <label class="form-label">Subject</label>
                                    <input name="subject" class="form-control" type="text">
                                </div>
                                <div id="snow-editor" style="height: 300px;"></div>
                                <div class="mt-2">
                                    <label class="form-label">Attachment</label>
                                    <input name="attachmentfile" class="form-control" type="file" id="inputGroupFile04">
                                </form>
                                </div>
                                <button class="btn btn-success mb-5 mt-3 sendButton w-25">Send</button>
                                <table class="table table-hover table-bordered" id="myTable">
                                    <thead class="bg-primary text-white">
                                        <th>Collected Email</th>
                                    </thead>
                                    <tbody>
                                        <?php $func->showEmailNewsLetter(); ?>
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
        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function(){
                let table = new DataTable('#myTable');
            })


            var quill = new Quill('#snow-editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                [{ 'header': '1' }, { 'header': '2' }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['link'],
                [{ 'align': [] }],  // Text alignment
                ['blockquote', 'code-block'],  // Blockquote and code block
                [{ 'color': [] }, { 'background': [] }],  // Text color and background color
                ['clean']  // 'clean' removes formatting
                ]
            }
            });


            $('.sendButton').click(function () {
                var editorContent = quill.root.innerHTML;
                var formData = new FormData($("#myAttachmentForm")[0]);

                // Append the Quill editor content to the FormData object
                formData.append('content', editorContent);
                formData.append('TheForm', 'WEW');

                // Send data to PHP using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'send-newsletter.php',
                    data: formData,
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from setting the content type
                    success: function (response) {
                        // Handle the response from PHP
                        console.log('PHP script response:', response);
                    },
                    error: function () {
                        console.error('Error occurred during the AJAX request.');
                    }
                });
            });

        </script>
        
    </body>
</html>
