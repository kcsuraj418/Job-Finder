<!DOCTYPE html>
<html lang="en">

<head>
   

    <!-- Title Page-->
    <title>Job info</title>

   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="c/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="product.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Company Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Date of Interview and Time" name="hiredate">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Place of Interview" name="place">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="degree">
                                    <option disabled="disabled" selected="selected">Degree</option>
                                    <option>B.E.(C.S.)</option>
                                    <option>B.E.(E.C.)</option>
                                    <option>B.E.(Mech)</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Salary" name="salary">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Contact No." name="phone">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="j/global.js"></script>

</body>

</html>
