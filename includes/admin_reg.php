<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E fashion berry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>
    <?php
    require_once "database.php";
    require_once "session.php";
    $user = "";
    $email = "";
    $result = "";
    $password = "";
    $password2 = "";
    $emptyFields = array();
    $min_length = array("email" => 12, "fullname" => 4, "password" => 8);
    $requiredFields = array("email", "fullname", "password");
    foreach ($requiredFields as $formError) {
        if (!isset($_POST[$formError]) || $_POST[$formError] == null) {
            $emptyFields[] = $formError . " is a required field.";
        }
    }
    if (count($emptyFields) == 0) {
        foreach ($min_length as $min => $length) {
            if (isset($_POST['button'])) {
                if (strlen(trim($_POST[$min])) < $length) {
                    $emptyFields[] = "{$min} is too short, must be of {$length} characters long";
                }
            }
        }
    }
    if (empty($emptyFields)) {
        $email = $_POST['email'];
        $user = $_POST['fullname'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $password2 = $_POST['password2'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = "<p style='color:#ff0000; '>incorrect email address</p>";
        } else {
            $sqlSelect = "SELECT * FROM admin_reg WHERE  phone=:phone OR email=:email";
            $sqlInsert = "INSERT INTO admin_reg(fullname, email, password, phone)VALUES(:fullname, :email, :password, :phone)";
            $phash = password_hash($password, PASSWORD_BCRYPT);

            $statement = $connection->prepare($sqlSelect);
            $statement->bindValue(":phone", $phone);
            $statement->bindValue(":email", $email);
            $statement->execute();
            $details = $statement->rowCount();
            if ($details > 0) {
                $details = $statement->fetch(PDO::FETCH_OBJ);
                if ($phone == $details->phone) {
                    $result = "<p style='color:#ff0000; '>{$phone} is already taken.</p>";
                }
                if ($email == $details->email) {
                    $result = "<p style='color:#ff0000; '>{$email} is already taken.</p>";
                }
                if ($password != $password2) {

                    $result = "<p style='color:#ff0000;'>Passwords don't match. </p>";
                }
            } else {
                $statement = $connection->prepare($sqlInsert);
                $statement->bindValue(":fullname", $user);
                $statement->bindValue(":email", $email);
                $statement->bindValue(":phone", $phone);
                $statement->bindValue(":password", $phash);
                $statement->execute();


                $result = "<script>  swal({
                title: \"Registration successful!!\",
                type: \"success\",
                timer: 3000,
                showConfirmButton: false
              }, function(){
                    window.location.href = \"login.php\";
              });
              </script>";
            }
        }
    } elseif (count($emptyFields) == 1) {
        if (isset($_POST['button'])) {
            $email = $_POST['email'];
            $user = $_POST['fullname'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            $result = "<p style='color:#ff0000; '> There was 1 error in the form. <br>";
            foreach ($emptyFields as $formError) {
                $result .= "<ul style='color:#ff0000'><li style='color:#ff0000'>{$formError}</li></ul>";
            }
            $result .= "</p>";
        }
    } else {
        if (isset($_POST['button'])) {
            $email = $_POST['email'];
            $user = $_POST['fullname'];
            $result = "<p style='color:#ff0000; '> There are " . count($emptyFields) . " errors in the form <br>";
            foreach ($emptyFields as $formErrors) {
                $result .= "<ul style='color:#ff0000'><li style=#ff0000>{$formErrors}</li></ul>";
            }
            $result .= "</p>";
        }
    }
    ?>
</body>

</html>