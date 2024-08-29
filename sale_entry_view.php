<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSNS - Closer Sale Entry</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sale_entry.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
    body {
        background: #fafbfb;
    }


    /* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .page-footer {
        position: fixed;
        right: 0;
        bottom: 50px;
        display: flex;
        align-items: center;
        padding: 5px;
        z-index: 1;
    }

    .page-footer a {
        display: flex;
        margin-left: 4px;
    }
    </style>
</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3 text-center">Closer Sale Entry View Details</h1>
                <form action="sale_entry_view.php" method="POST">

                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="your-subject" class="form-label">Phone No</label>
                            <input type="text" class="form-control" required id="phone_no1" name="phone_no1"
                                onchange="checkPhoneNumber()">
                        </div>

                        <div class="col-md-6">
                            <label for="your-name" class="form-label">
                                Agent Name</label>
                            <input type="text" class="form-control" required id="agent_name1" name="agent_name1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-surname" class="form-label">Agent ID</label>
                            <input type="text" class="form-control" required id="agent_id1" name="agent_id1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-email" class="form-label">Call Date</label>
                            <input type="date" class="form-control" required id="call_date1" name="call_date1">
                        </div>

                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Alt Phone No</label>
                            <input type="text" class="form-control" required id="alt_phoneno1" name="alt_phoneno1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Primary First Name</label>
                            <input type="text" class="form-control" required id="firstname1" name="firstname1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Primary Last Name</label>
                            <input type="text" class="form-control" required id="lastname1" name="lastname1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Spouse First Name</label>
                            <input type="text" class="form-control" required id="spouse_firstname1"
                                name="spouse_firstname1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">E-Mail</label>
                            <input type="text" class="form-control" required id="mail1" name="mail1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Address:</label>
                            <input type="text" class="form-control" required id="address1" name="address1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">City</label>
                            <input type="text" class="form-control" required id="City1" name="City1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">State</label>
                            <input type="text" class="form-control" required id="State1" name="State1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Zipcode</label>
                            <input type="text" class="form-control" required id="Zipcode1" name="Zipcode1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">County</label>
                            <input type="text" class="form-control" required id="County1" name="County1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Elect Bill</label>
                            <input type="text" class="form-control" required id="elect_bill1" name="elect_bill1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label"> Elect Company</label>
                            <input type="text" class="form-control" required id="elect_company1" name="elect_company1">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Shade</label>
                            <input type="text" class="form-control" required id="shade1" name="shade1">


                        </div>

                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Roof Type</label>
                            <input type="text" id="roof_type1" name="roof_type1" class="form-control">

                        </div>
                        <div class="col-md-3">
                            <label for="your-subject" class="form-label">Household Income</label>
                            <input type="text" class="form-control" required id="household_income1"
                                name="household_income1">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <span>made by </span>
        <a href="https://georgemartsoukos.com/" target="_blank">
            <img width="24" height="24" src="https://assets.codepen.io/162656/george-martsoukos-small-logo.svg"
                alt="George Martsoukos logo">
        </a>
    </footer>
    <script>

    </script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Bootstrap JS and dependencies -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>