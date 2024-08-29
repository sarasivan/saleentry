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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    .view-btn {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin: 5px;
        float: right;
    }

    .view-btn:hover {
        background-color: #0056b3;
    }

    .modal-content {
        padding: 30px !important;
    }
    </style>
</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3 text-center">Closer Sale Entry</h1>

                <form action="saleentry_sql.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="your-name" class="form-label">
                                Agent Name</label>
                            <input type="text" class="form-control" required id="agent_name" name="agent_name">
                        </div>
                        <div class="col-md-6">
                            <label for="your-surname" class="form-label">Agent ID</label>
                            <input type="text" class="form-control" required id="agent_id" name="agent_id">
                        </div>
                        <div class="col-md-6">
                            <label for="your-email" class="form-label">Call Date</label>
                            <input type="date" class="form-control" required id="call_date" name="call_date">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Phone No</label>
                            <input type="text" class="form-control" required id="phone_no" name="phone_no">
                        </div>

                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Alt Phone No</label>
                            <input type="text" class="form-control" required id="alt_phoneno" name="alt_phoneno">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Primary First Name</label>
                            <input type="text" class="form-control" required id="firstname" name="firstname">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Primary Last Name</label>
                            <input type="text" class="form-control" required id="lastname" name="lastname">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Spouse First Name</label>
                            <input type="text" class="form-control" required id="spouse_firstname"
                                name="spouse_firstname">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">E-Mail</label>
                            <input type="text" class="form-control" required id="mail" name="mail">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Address:</label>
                            <input type="text" class="form-control" required id="address" name="address">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">City</label>
                            <input type="text" class="form-control" required id="City" name="City">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">State</label>
                            <input type="text" class="form-control" required id="State" name="State">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Zipcode</label>
                            <input type="text" class="form-control" required id="Zipcode" name="Zipcode">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">County</label>
                            <input type="text" class="form-control" required id="County" name="County">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Elect Bill</label>
                            <input type="text" class="form-control" required id="elect_bill" name="elect_bill">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label"> Elect Company</label>
                            <input type="text" class="form-control" required id="elect_company" name="elect_company">
                        </div>
                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Shade</label>
                            <select class="form-control" required id="shade" name="shade">
                                <option>Select</option>
                                <option>None</option>
                                <option>10 %</option>
                                <option>25 %</option>
                                <option>50 %</option>
                                <option>50+ %</option>
                            </select>

                        </div>

                        <div class="col-md-6">
                            <label for="your-subject" class="form-label">Roof Type</label>
                            <select required id="roof_type" name="roof_type" class="form-control">
                                <option>Select</option>
                                <option>Composite Shingle</option>
                                <option>Tile</option>
                                <option>Clay</option>
                                <option>Concrete</option>
                                <option>Flat Roof</option>
                                <option>Wood Shake</option>
                                <option>Metal</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="your-subject" class="form-label">Household Income</label>
                            <input type="text" class="form-control" required id="household_income"
                                name="household_income">
                        </div>
                        <div class="col-md-3">
                            <label for="your-subject" class="form-label">Appointment Date</label>
                            <input type="date" class="form-control" required id="appointment_date"
                                name="appointment_date">
                        </div>

                        <div class="col-md-3">
                            <label for="your-subject" class="form-label">Timing</label>
                            <select class="form-control" required id="timing" name="timing">
                                <option>Select</option>
                                <option>8 AM</option>
                                <option>8.30 AM</option>
                                <option>9 AM</option>
                                <option>9.30 AM</option>
                                <option>10 AM</option>
                                <option>10.30 AM</option>
                                <option>11 AM</option>
                                <option>11.30 AM</option>
                                <option>12 PM</option>
                                <option>12.30 PM</option>
                                <option>1 PM</option>
                                <option>1.30 PM</option>
                                <option>2 PM</option>
                                <option>2.30 PM</option>
                                <option>3 PM</option>
                                <option>3.30 PM</option>
                                <option>4 PM</option>
                                <option>4.30 PM</option>
                                <option>5 PM</option>
                                <option>5.30 PM</option>
                                <option>6 PM</option>
                                <option>6.30 PM</option>
                                <option>7 PM</option>
                                <option>7.30 PM</option>
                                <option>8 PM</option>
                                <option>8.30 PM</option>
                                <option>9 PM</option>
                            </select>

                        </div>
                        <div class="col-md-3">
                            <label for="your-subject" class="form-label">Language</label>
                            <select class="form-control" required id="language" name="language">
                                <option>English</option>
                                <option>Spanish</option>
                            </select>

                        </div>
                        <div class="col-12">
                            <label for="your-message" class="form-label">Your Message</label>
                            <textarea class="form-control" required id="your_message" name="your_message"
                                rows="5"></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <label for="your-message" class="form-label">Image upload</label>
                            <input type="file" name="image" id="imageUpload" accept="image/*">

                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <button type="submit" class="btn btn-dark w-100 fw-bold">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="col-lg-3">
                <button class="view-btn" title="View Details" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="fas fa-eye"></i>
                </button>
            </div> -->
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
             
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