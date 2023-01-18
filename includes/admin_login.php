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
    ?>
    <?php
    $email = "";
    $result = "";
    $blankbox = array();
    $formError = array("email", "password");
    foreach ($formError as $formErrors) {
        if (!isset($_POST[$formErrors]) || $_POST[$formErrors] == null) {
            $blankbox[] = $formErrors . " is a required field";
        }
    }
    if (isset($_POST['btn'])) {

        if (empty($blankbox)) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sqlSelect = "SELECT * FROM admin_reg WHERE email=:email";
            $statement = $connection->prepare($sqlSelect);
            $statement->bindValue(":email", $email);
            $statement->execute();
            $information = $statement->rowCount();
            if ($information > 0) {
                $information = $statement->fetch(PDO::FETCH_OBJ);
                $id = $information->id;
                $id_name = $information->fullname;
                $email = $information->email;
                if (password_verify($password, $information->password)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['fullname'] = $id_name;
                    $_SESSION['last_login'] = time();
                    echo "<script>  swal({
                        title: \"Welcome back {$id_name}!\",
                        text: \"You are being logged in\",
                        type: \"success\",
                        timer: 3000,
                        showConfirmButton: false
                      }, function(){
                            window.location.href = \"index.php\";
                      });
                      </script>";
                } else {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $result = "<p style='color:#ff0000; '> Incorrect password </p>";
                }
            } else {
                $result = "<p style='color:#ff0000; '> Email does not exist </p>";
            }
        } elseif (count($blankbox) == 1) {
            $email = $_POST['email'];
            $result = "<p style='color:#ff0000; '> There was one error in the form <br>";
            $result .= "<ul style='color:red'>";
            foreach ($blankbox as $emptyFields) {
                $result .= "<li style='color:red'> {$emptyFields} </li>";
            }
            $result .= "</ul></p>";
        } else {
            $result = "<p style='color:#ff0000; '> There are " . count($blankbox) . " errors in the form <br>";
            $result .= "<ul style='color:red'>";
            foreach ($blankbox as $emptyFields) {
                $result .= "<li style='color:red'>{$emptyFields} </li>";
            }
            $result .= "</ul> </p>";
        }
    }

    ?>


</body>

</html>