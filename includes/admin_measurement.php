<?php require_once "database.php";
    require_once "session.php";
//     if (isset($_POST['button'])) {


//     if (empty($emptyFields)) {
//         $fullname = $_POST['fullname'];
//         $phone = $_POST['phone'];
//         $email = $_POST['email'];
//         $address = $_POST['address'];
//         $style = $_POST['style'];
//         $burst = $_POST['burst'];
//         $hip = $_POST['hip'];
//         $skirt_length = $_POST['skirt_length'];
//         $waist = $_POST['waist'];
//         $hand_lenght = $_POST['hand_lenght'];
//         $sholder = $_POST['sholder'];
//         $recieve_date = $_POST['recieve_date'];
//         $collection_date = $_POST['collection_date'];
//         $file = $_POST['file'];


//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $result = "<p style='color:#ff0000; '>incorrect email address</p>";

//         } else {
//             $sqlSelect = "SELECT * FROM measurement WHERE  phone=:phone OR email=:email";
//             $sqlInsert = "INSERT INTO measurement (fullname, phone, email, address, style, burst, hip, skirt_length, waist, hand_lenght, sholder, recieve_date, collection_date, file)
//             VALUES(:fullname, :phone, :email, :address, :style :burst, :hip, :skirt_length, :waist, :hand_lenght, :sholder, :recieve_date, :collection_date, :file)";
            
//             $statement = $connection->prepare($sqlSelect);
//             $statement->bindValue(":phone", $phone);
//             $statement->bindValue(":email", $email);
//             $statement->execute();
//             $details = $statement->rowCount();
//             if ($details > 0) {
//                 $details = $statement->fetch(PDO::FETCH_OBJ);
//                 if ($phone == $details->phone) {
//                     $result = "<p style='color:#ff0000; '>{$phone} is already taken.</p>";
//                 }
//                 if ($email == $details->email) {
//                     $result = "<p style='color:#ff0000; '>{$email} is already taken.</p>";
//                 }
                
//             } else {
//                 $statement = $connection->prepare($sqlInsert);
//                 $statement->bindValue(":fullname", $fullname);
//                 $statement->bindValue(":phone", $phone);
//                 $statement->bindValue(":email", $email);
//                 $statement->bindValue(":address", $address);
//                 $statement->bindValue(":style", $style);
//                 $statement->bindValue(":burst", $burst);
//                 $statement->bindValue(":hip", $hip);
//                 $statement->bindValue(":skirt_length", $skirt_length);
//                 $statement->bindValue(":waist", $waist);
//                 $statement->bindValue(":hand_lenght", $hand_lenght);
//                 $statement->bindValue(":sholder", $sholder);
//                 // $statement->bindValue(":recieve_date", $recieve_date);
//                 // $statement->bindValue(":collection_date", $collection_date);
//                 // $statement->bindValue(":file", $file);
//                 $statement->execute();


//                 $result = "<script>  swal({
//                 title: \"Registration successful!!\",
//                 type: \"success\",
//                 timer: 3000,
//                 showConfirmButton: false
//               }, function(){
//                     window.location.href = \"login.php\";
//               });
//               </script>";
//             }
//         }
//     } elseif (count($emptyFields) == 1) {
//         if (isset($_POST['button'])) {
//                      $fullname = $_POST['fullname'];
//          $phone = $_POST['phone'];
//          $email = $_POST['email'];
//          $address = $_POST['address'];
//          $style = $_POST['style'];
//          $burst = $_POST['burst'];
//          $hip = $_POST['hip'];
//          $skirt_length = $_POST['skirt_length'];
//          $waist = $_POST['waist'];
//          $hand_lenght = $_POST['hand_lenght'];
//          $sholder = $_POST['sholder'];
//          $recieve_date = $_POST['recieve_date'];
//          $collection_date = $_POST['collection_date'];
//          $file = $_POST['file'];

         
//             $result = "<p style='color:#ff0000; '> There was 1 error in the form. <br>";
//             foreach ($emptyFields as $formError) {
//                 $result .= "<ul style='color:#ff0000'><li style='color:#ff0000'>{$formError}</li></ul>";
//             }
//             $result .= "</p>";
//         }
//     } else {
//         if (isset($_POST['button'])) {
//             $email = $_POST['email'];
//             $user = $_POST['fullname'];
//             $result = "<p style='color:#ff0000; '> There are " . count($emptyFields) . " errors in the form <br>";
//             foreach ($emptyFields as $formErrors) {
//                 $result .= "<ul style='color:#ff0000'><li style=#ff0000>{$formErrors}</li></ul>";
//             }
//             $result .= "</p>";
//         }
//     }


    if ($_SERVER['REQUEST_METHOD']=== 'POST'){
          if(isset($_POST["btn"]))
         {
         $fullname = $_POST['fullname'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $address = $_POST['address'];
         $style = $_POST['style'];
         $burst = $_POST['burst'];
         $hip = $_POST['hip'];
         $skirt_length = $_POST['skirt_length'];
         $waist = $_POST['waist'];
         $hand_lenght = $_POST['hand_lenght'];
         $sholder = $_POST['sholder'];
         $recieve_date = $_POST['recieve_date'];
         $collection_date = $_POST['collection_date'];
         $file = $_POST['file'];
         
         //$date = date('Y-m-d H:i:s');
    
          
        try{
        $statement = $pdo->prepare("INSERT INTO measurement (fullname, phone, email, address, style, burst, hip, skirt_length, waist, hand_lenght, sholder, recieve_date, collection_date, file)
                       VALUES(:fullname, :phone, :email, :address, :style :burst, :hip, :skirt_length, :waist, :hand_lenght, :sholder, :recieve_date, :collection_date, :file)");
                     $statement->bindValue(':fullname', $fullname);
                     $statement->bindValue(':phone', $phone);
                     $statement->bindValue(':email', $email);
                     $statement->bindValue(':address', $address);
                     $statement->bindValue(':style', "");
                     $statement->bindValue(':burst', $burst);
                     $statement->bindValue(':hip', $hip);
                     $statement->bindValue(':skirt_length', $skirt_length);
                     $statement->bindValue(':waist', $waist);
                     $statement->bindValue(':hand_lenght', $hand_lenght);                     
                     $statement->bindValue(':sholder', $sholder);
                     $statement->bindValue(':recieve_date', "");
                     $statement->bindValue(':collection_date', "");
                     $statement->bindValue(':file', "");
                     $statement->execute();
                    }catch (Exception $e)
                  
                    {      
                       echo $e->getMessage();
                   
                    }
                  }else{
                    echo "One or more data entered was invalid. Please try again";
                    
                  }
                }
                
                    
?>
