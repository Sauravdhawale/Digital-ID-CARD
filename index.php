<?php

use LDAP\Result;

$show_detail = FALSE;

// Google Sheets CSV URL (Make sure your Google Sheet is public)
$googleSheetUrl = "https://docs.google.csv";

if (isset($_GET['rid'])) {
    $emp_id = $_GET['rid'];

    // Fetch CSV data from Google Sheets
    $csvData = file_get_contents($googleSheetUrl);
    $rows = explode("\n", $csvData);

    $result = [];
    foreach ($rows as $row) {
        $data = str_getcsv($row);
        if ($data[0] === $emp_id) {
            $show_detail = TRUE;
            $result = $data;
            break;
        }
    }

    if ($show_detail) {
        $emp = $result[1] ?? "";
        $name = $result[2] ?? "";
        $designation = $result[3] ?? "";
        $dob = $result[4] ?? "";
        // $phone_number = $result[5] ?? "";
        // $email = $result[6] ?? "";
        $blood_group = $result[7] ?? "";
        $emergency_number = $result[8] ?? "";
        $avatar = (!empty($result[9])) ? str_replace("file/d/", "uc?export=view&id=", str_replace("/view?usp=sharing", "", $result[9])) : "https://drive.google.com/uc?export=view&id=1ikFY1TxHR1Ko6umytq8dc2UPO-3pd9JW";

    }
}
?>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <style>
        .inf-content { border: 1px solid #DDDDDD; border-radius: 10px; box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3); }
    </style>
</head>
<body>
    <div class="container bootstrap snippet">
        <h1>DIGITAL ID CARD</h1>
        <div class="panel-body inf-content">
            <div class="row">
                <?php if ($show_detail) { ?>
                    <div class="col-md-3 text-center">
                        <img alt="" style="width:250px;height:250px;" class="img-circle img-thumbnail" src="<?php echo $avatar; ?>">
                    </div>
                    <div class="col-md-9">
                        <strong>Employee Details</strong><br>
                        <div class="table-responsive">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr><td><strong>Employee ID </strong></td><td class="text-primary"><?php echo $emp; ?></td></tr>
                                    <tr><td><strong>Name</strong></td><td class="text-primary"><?php echo $name; ?></td></tr>
                                    <tr><td><strong>Designation</strong></td><td class="text-primary"><?php echo $designation; ?></td></tr>
                                    <tr><td><strong>DOB</strong></td><td class="text-primary"><?php echo $dob; ?></td></tr>
                                    <!--<tr><td><strong>Phone Number</strong></td><td class="text-primary"><?php echo $phone_number; ?></td></tr>-->
                                    <!--<tr><td><strong>Email ID</strong></td><td class="text-primary"><?php echo $email; ?></td></tr>-->
                                    <tr><td><strong>Blood Group</strong></td><td class="text-primary"><?php echo $blood_group; ?></td></tr>
                                    <tr><td><strong>Emergency Number</strong></td><td class="text-primary"><?php echo $emergency_number; ?></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-12 text-center">Nothing to show...</div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
