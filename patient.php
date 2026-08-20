<?php
$errors = array();
$name = $age = $gender = $email = $mobile = $address = $symptoms = $regdate = $bloodgroup = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name       = trim($_POST['name']);
    $age        = trim($_POST['age']);
    $gender     = isset($_POST['gender']) ? $_POST['gender'] : "";
    $email      = trim($_POST['email']);
    $mobile     = trim($_POST['mobile']);
    $address    = trim($_POST['address']);
    $symptoms   = trim($_POST['symptoms']);
    $regdate    = trim($_POST['regdate']);
    $bloodgroup = trim($_POST['bloodgroup']);
   if (empty($name))       $errors['name']       = "This field is required.";
    if (empty($age))        $errors['age']        = "This field is required.";
    if (empty($gender))     $errors['gender']     = "This field is required.";
    if (empty($email))      $errors['email']      = "This field is required.";
    if (empty($mobile))     $errors['mobile']     = "This field is required.";
    if (empty($address))    $errors['address']    = "This field is required.";
    if (empty($symptoms))   $errors['symptoms']   = "This field is required.";
    if (empty($regdate))    $errors['regdate']    = "This field is required.";
    if (empty($bloodgroup)) $errors['bloodgroup'] = "This field is required.";
   if (empty($errors)) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Patient Information</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
        padding: 40px;
    }
    .container {
        max-width: 650px;
        margin: auto;
        background-color: white;
        padding: 35px 40px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .success-heading {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .checkmark {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #2e7d32;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }
    h2 {
        color: #2e7d32;
        margin: 0;
    }
    hr {
        border: none;
        border-top: 1px solid #2e7d32;
        margin: 15px 0 20px 0;
    }
    .thankyou {
        margin-bottom: 20px;
        color: #333;
    }
    .row {
        display: flex;
        padding: 12px 0;
        border-bottom: 1px solid #eee;
    }
    .row .label {
        font-weight: bold;
        width: 180px;
    }
    .row .colon {
        width: 20px;
    }
    a.back-btn {
        display: inline-block;
        margin-top: 25px;
        padding: 10px 20px;
        background-color: #1976d2;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="success-heading">
        <div class="checkmark">&#10003;</div>
        <h2>Patient Information Submitted Successfully</h2>
    </div>
    <hr>
    <p class="thankyou">Thank you! The patient details have been recorded successfully.</p>
    <div class="row"><div class="label">Patient Name</div><div class="colon">:</div><div><?php echo htmlspecialchars($name); ?></div></div>
    <div class="row"><div class="label">Age</div><div class="colon">:</div><div><?php echo htmlspecialchars($age); ?></div></div>
    <div class="row"><div class="label">Gender</div><div class="colon">:</div><div><?php echo htmlspecialchars($gender); ?></div></div>
    <div class="row"><div class="label">Email</div><div class="colon">:</div><div><?php echo htmlspecialchars($email); ?></div></div>
    <div class="row"><div class="label">Mobile Number</div><div class="colon">:</div><div><?php echo htmlspecialchars($mobile); ?></div></div>
    <div class="row"><div class="label">Address</div><div class="colon">:</div><div><?php echo htmlspecialchars($address); ?></div></div>
    <div class="row"><div class="label">Symptoms</div><div class="colon">:</div><div><?php echo htmlspecialchars($symptoms); ?></div></div>
    <div class="row"><div class="label">Registration Date</div><div class="colon">:</div><div><?php echo htmlspecialchars($regdate); ?></div></div>
    <div class="row"><div class="label">Blood Group</div><div class="colon">:</div><div><?php echo htmlspecialchars($bloodgroup); ?></div></div>
    <a class="back-btn" href="patient_registration.php">&#8592; Register Another Patient</a>
</div>
</body>
</html>
<?php
        exit;     }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 30px;
        }
        .container {
            max-width: 650px;
            margin: auto;
            background-color: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 25px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 6px;
        }
        .required {
            color: #d32f2f;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 15px;
        }
        .error-field {
            border-color: #b03a2e !important;
        }
        .error-text {
            color: #b03a2e;
            font-size: 13px;
            margin-top: 5px;
        }
        textarea {
            height: 80px;
            resize: vertical;
        }
        .gender label {
            display: inline;
            font-weight: normal;
            margin-right: 15px;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background-color: #2e7d32;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Patient Registration Form</h2>
    <form method="POST" action="patient_registration.php">
        <label>Patient Name: <span class="required">*</span></label>
        <input type="text" name="name"
               class="<?php echo isset($errors['name']) ? 'error-field' : ''; ?>"
               value="<?php echo htmlspecialchars($name); ?>">
      <?php if (isset($errors['name'])) echo "<div class='error-text'>* " . $errors['name'] . "</div>"; ?>
        <label>Age: <span class="required">*</span></label>
        <input type="number" name="age"
               class="<?php echo isset($errors['age']) ? 'error-field' : ''; ?>"
               value="<?php echo htmlspecialchars($age); ?>">
        <?php if (isset($errors['age'])) echo "<div class='error-text'>* " . $errors['age'] . "</div>"; ?>
        <label>Gender: <span class="required">*</span></label>
        <div class="gender">
            <label><input type="radio" name="gender" value="Male" <?php if ($gender=="Male") echo "checked"; ?>> Male</label>
            <label><input type="radio" name="gender" value="Female" <?php if ($gender=="Female") echo "checked"; ?>> Female</label>
            <label><input type="radio" name="gender" value="Other" <?php if ($gender=="Other") echo "checked"; ?>> Other</label>
        </div>
     <?php if (isset($errors['gender'])) echo "<div class='error-text'>* " . $errors['gender'] . "</div>"; ?>
        <label>Email: <span class="required">*</span></label>
        <input type="email" name="email"
               class="<?php echo isset($errors['email']) ? 'error-field' : ''; ?>"
               value="<?php echo htmlspecialchars($email); ?>">
      <?php if (isset($errors['email'])) echo "<div class='error-text'>* " . $errors['email'] . "</div>"; ?>
        <label>Mobile Number: <span class="required">*</span></label>
        <input type="text" name="mobile"
               class="<?php echo isset($errors['mobile']) ? 'error-field' : ''; ?>"
               value="<?php echo htmlspecialchars($mobile); ?>">
        <?php if (isset($errors['mobile'])) echo "<div class='error-text'>* " . $errors['mobile'] . "</div>"; ?>
        <label>Address: <span class="required">*</span></label>
        <textarea name="address"
                  class="<?php echo isset($errors['address']) ? 'error-field' : ''; ?>"
                  ><?php echo htmlspecialchars($address); ?></textarea>
        <?php if (isset($errors['address'])) echo "<div class='error-text'>* " . $errors['address'] . "</div>"; ?>
        <label>Symptoms: <span class="required">*</span></label>
        <textarea name="symptoms"
                  class="<?php echo isset($errors['symptoms']) ? 'error-field' : ''; ?>"
                  ><?php echo htmlspecialchars($symptoms); ?></textarea>
        <?php if (isset($errors['symptoms'])) echo "<div class='error-text'>* " . $errors['symptoms'] . "</div>"; ?>
        <label>Registration Date: <span class="required">*</span></label>
        <input type="date" name="regdate"
               class="<?php echo isset($errors['regdate']) ? 'error-field' : ''; ?>"
               value="<?php echo htmlspecialchars($regdate); ?>">
        <?php if (isset($errors['regdate'])) echo "<div class='error-text'>* " . $errors['regdate'] . "</div>"; ?>
        <label>Blood Group: <span class="required">*</span></label>
        <select name="bloodgroup"
                class="<?php echo isset($errors['bloodgroup']) ? 'error-field' : ''; ?>">
            <option value="">-- Select --</option>
            <?php
            $groups = array("A+","A-","B+","B-","AB+","AB-","O+","O-");
            foreach ($groups as $g) {
                $selected = ($bloodgroup == $g) ? "selected" : "";
                echo "<option value='$g' $selected>$g</option>";
            }
            ?>
        </select>
        <?php if (isset($errors['bloodgroup'])) echo "<div class='error-text'>* " . $errors['bloodgroup'] . "</div>"; ?>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
