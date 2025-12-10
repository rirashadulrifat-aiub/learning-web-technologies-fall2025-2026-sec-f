<?php

$nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodErr = "";
$name = $email = $dd = $mm = $yyyy = $gender = $blood = "";
$degree = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 
    $name = trim($_POST["name"]);

    if (empty($name)) {
        $nameErr = "Name cannot be empty";
    } else {
        
        if (str_word_count($name) < 2) {
            $nameErr = "Name must contain at least two words";
        }
        
        else if (!preg_match("/^[A-Za-z]/", $name)) {
            $nameErr = "Name must start with a letter";
        }
       
        else if (!preg_match("/^[A-Za-z.\- ]+$/", $name)) {
            $nameErr = "Only letters, periods, dash allowed";
        }
    }

 
    $email = trim($_POST["email"]);

    if (empty($email)) {
        $emailErr = "Email cannot be empty";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    
    $dd = $_POST["dd"];
    $mm = $_POST["mm"];
    $yyyy = $_POST["yyyy"];

    if (empty($dd) || empty($mm) || empty($yyyy)) {
        $dobErr = "Date of birth cannot be empty";
    } else {
        if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1953 || $yyyy > 1998) {
            $dobErr = "Invalid date format (dd:1-31, mm:1-12, yyyy:1953-1998)";
        }
    }

   
    if (empty($_POST["gender"])) {
        $genderErr = "At least one gender must be selected";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["degree"])) {
        $degreeErr = "Select at least two degrees";
    } else {
        $degree = $_POST["degree"];
        if (count($degree) < 2) {
            $degreeErr = "Select at least two degrees";
        }
    }

   
    if (empty($_POST["blood"])) {
        $bloodErr = "Blood group must be selected";
    } else {
        $blood = $_POST["blood"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>

<body>

<h2>LAB 3.2 – Form Validation</h2>

<form method="post">

<label>Name:</label>
<input type="text" name="name" value="<?php echo $name; ?>">
<span style="color:red;">* <?php echo $nameErr; ?></span>
<br><br>


<label>Email:</label>
<input type="text" name="email" value="<?php echo $email; ?>">
<span style="color:red;">* <?php echo $emailErr; ?></span>
<br><br>


<label>Date of Birth:</label><br>
<input type="text" name="dd" size="2" placeholder="dd" value="<?php echo $dd; ?>">
<input type="text" name="mm" size="2" placeholder="mm" value="<?php echo $mm; ?>">
<input type="text" name="yyyy" size="4" placeholder="yyyy" value="<?php echo $yyyy; ?>">
<span style="color:red;">* <?php echo $dobErr; ?></span>
<br><br>

<label>Gender:</label><br>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<span style="color:red;">* <?php echo $genderErr; ?></span>
<br><br>


<label>Degree:</label><br>
<input type="checkbox" name="degree[]" value="SSC"> SSC
<input type="checkbox" name="degree[]" value="HSC"> HSC
<input type="checkbox" name="degree[]" value="BSc"> BSc
<input type="checkbox" name="degree[]" value="MSc"> MSc
<span style="color:red;">* <?php echo $degreeErr; ?></span>
<br><br>


<label>Blood Group:</label>
<select name="blood">
    <option value="">Select</option>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>O+</option>
    <option>O-</option>
    <option>AB+</option>
    <option>AB-</option>
</select>
<span style="color:red;">* <?php echo $bloodErr; ?></span>
<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>