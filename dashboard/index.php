<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "_header.php" ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate
                            Report</a>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pending Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pending
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pending-count">
                                                <!-- Number of pending orders will be inserted here -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Shipping
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="shipping-count">
                                                <!-- Number of Shipping orders will be inserted here -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Completed Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Completed
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="complete-count">
                                                <!-- Number of Completed orders will be inserted here -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Canceled Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Canceled
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="canceled-count">
                                                <!-- Number of canceled orders will be inserted here -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- returned Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                returned
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="returned-count">
                                                <!-- Number of returned orders will be inserted here -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Order Table
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="orderTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>User</th>
                                            <th>Status</th>
                                            <th>Payment Method</th>
                                            <th>Total Amount</th>
                                            <th>Order Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be filled via AJAX -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <!-- User Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">
                                User Table
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be filled via AJAX -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
    $(document).ready(function() {
        // Function to fetch order counts based on statuses
        function fetchOrderCounts() {
            $.ajax({
                url: '_fetch_order_counts.php', // PHP file to fetch data
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Update the UI with the fetched order counts
                    $('#pending-count').text(response.pending);
                    $('#shipping-count').text(response.shipping);
                    $('#complete-count').text(response.completed);
                    $('#canceled-count').text(response.canceled);
                    $('#returned-count').text(response.returned);
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        }

        // Fetch order counts when the page loads
        fetchOrderCounts();
    });
    </script>
    <script>
    $(document).ready(function() {
        let table = $('#orderTable').DataTable({
            "ajax": "_fetch_orders.php",
            "columns": [{
                    "data": "order_id"
                },
                {
                    "data": "user_name"
                },
                {
                    "data": "order_status"
                },
                {
                    "data": "payment_method"
                },
                {
                    "data": "total_amount"
                },
                {
                    "data": "order_date"
                }
            ],
            "destroy": true
        });

        // Delegate dropdown change event
        $('#orderTable tbody').on('change', '.order-status', function() {
            let newStatus = $(this).val();
            let orderId = $(this).data('id');

            $.ajax({
                url: '_update_status.php',
                method: 'POST',
                data: {
                    order_id: orderId,
                    new_status: newStatus
                },
                success: function(response) {
                    alert('Order status updated successfully ✅');
                },
                error: function() {
                    alert('Error updating order status.');
                }
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            "ajax": "_fetch_users.php",
            "columns": [{
                    "data": "user_id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "email"
                },
                {
                    "data": "phone"
                },
                {
                    "data": "address"
                },
                {
                    "data": "created_at"
                }
            ]
        });
    });
    </script>
</body>

</html