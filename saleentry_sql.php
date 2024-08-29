<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sale_entry";
// $action = $_GET['action'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Debugging: Print all POST data
        file_put_contents('debug_log.txt', print_r($_POST, true), FILE_APPEND);

        // Check if keys are set
        $required_fields = ['agent_name', 'agent_id', 'call_date', 'phone_no', 'alt_phoneno', 'firstname', 'lastname', 'spouse_firstname', 'mail', 'address', 'City', 'State', 'Zipcode', 'County', 'elect_bill', 'elect_company', 'shade', 'roof_type', 'household_income', 'appointment_date', 'timing', 'language', 'your_message'];

        foreach ($required_fields as $field) {
            if (!isset($_POST[$field])) {
                echo json_encode(['success' => false, 'message' => "Missing field: $field"]);
                exit;
            }
        }

        $agent_name = $_POST['agent_name'];
        $agent_id = $_POST['agent_id'];
        $call_date = $_POST['call_date'];
        $phone_no = $_POST['phone_no'];
        $alt_phoneno = $_POST['alt_phoneno'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $spouse_firstname = $_POST['spouse_firstname'];
        $mail = $_POST['mail'];
        $address = $_POST['address'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $Zipcode = $_POST['Zipcode'];
        $County = $_POST['County'];
        $elect_bill = $_POST['elect_bill'];
        $elect_company = $_POST['elect_company'];
        $shade = $_POST['shade'];
        $roof_type = $_POST['roof_type'];
        $household_income = $_POST['household_income'];
        $appointment_date = $_POST['appointment_date'];
        $timing = $_POST['timing'];
        $language = $_POST['language'];
        $your_message = $_POST['your_message'];

        // Adjust SQL to match fields and values correctly
        $sql = "INSERT INTO closer_sale_entry (agent_name, agent_id, call_date, phone_no, alt_phoneno, firstname, lastname, spouse_firstname, mail, address, City, State, Zipcode, County, elect_bill, elect_company, shade, roof_type, household_income, appointment_date, timing, language, your_message) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$agent_name, $agent_id, $call_date, $phone_no, $alt_phoneno, $firstname, $lastname, $spouse_firstname, $mail, $address, $City, $State, $Zipcode, $County, $elect_bill, $elect_company, $shade, $roof_type, $household_income, $appointment_date, $timing, $language, $your_message]);

        echo json_encode(['success' => true, 'message' => 'Data submitted successfully!']);
    }
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
}


?>
