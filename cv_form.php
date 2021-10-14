<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <style>
        body {
            background: #3e4144;
        }

        .form {
            margin: 50px auto;
            width: 600px;
            padding: 30px 25px;
            background: white;
        }

        h1.login-title {
            color: #666;
            margin: 0px auto 25px;
            font-size: 25px;
            font-weight: 300;
            text-align: center;
        }

        .login-input {
            font-size: 15px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 25px;
            height: 25px;
            width: calc(100% - 23px);
        }

        .login-input:focus {
            border-color: #6e8095;
            outline: none;
        }

        .login-button {
            color: #fff;
            background: #55a1ff;
            border: 0;
            outline: 0;
            width: 100%;
            height: 50px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .link {
            color: #666;
            font-size: 15px;
            text-align: center;
            margin-bottom: 0px;
        }

        .link a {
            color: #666;
        }

        h3 {
            font-weight: normal;
            text-align: center;
        }
        .gend{
            padding: 10px;
            margin-bottom: 25px;
            font-size: 15px;
        }
        .text{
          
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <?php
    require('dbconnection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['fullname'])) {
        // removes backslashes
        $fullname = stripslashes($_REQUEST['fullname']);
        //escapes special characters in a string
        $fullname = mysqli_real_escape_string($conn, $fullname);
        $date_of_birth = stripslashes($_REQUEST['date_of_birth']);
        $date_of_birth = mysqli_real_escape_string($conn, $date_of_birth);
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($conn, $gender);
        $email_id = stripslashes($_REQUEST['email_id']);
        $email_id = mysqli_real_escape_string($conn, $email_id);
        $phone_num = stripslashes($_REQUEST['phone_num']);
        $phone_num = mysqli_real_escape_string($conn, $phone_num);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($conn, $address);
        $language = stripslashes($_REQUEST['language']);
        $language = mysqli_real_escape_string($conn, $language);
        $skills = stripslashes($_REQUEST['skills']);
        $skills = mysqli_real_escape_string($conn, $skills);
        $experience = stripslashes($_REQUEST['experience']);
        $experience = mysqli_real_escape_string($conn, $experience);


        $query    = "INSERT into `cv_tab` (fullname,date_of_birth, gender, email_id, phone_num, address, language, skills, experience)
                     VALUES ('" . $fullname . "','" . $date_of_birth . "','" . $gender . "','" . $email_id . "','" . $phone_num . "','" . $address . "','" . $language . "','" . $skills . "','" . $experience . "')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='Usmenu.php'>Go Back</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <form class="form" action="" method="post">
            <h1 class="login-title">Fill the Resume CV </h1>
            <input type="text" class="login-input" name="fullname" placeholder="Fullname">
            <input type="text" class="login-input" name="date_of_birth" placeholder="Date_of_birth" required />
            <p>Gender</p>
            <input type="radio" class ="gend" name="gender" value="male"> Male
            <input type="radio" class ="gend" name="gender" value="female"> Female
            <input type="text" class="login-input" name="email_id" placeholder="Email Adress">
            <input type="text" class="login-input" name="phone_num" placeholder="Phone Number">
            <input type="text" class="login-input" name="address" placeholder="Address">
            <input type="text" class="login-input" name="language" placeholder="Languages">
            <textarea name="skills" class = "text" cols="82" rows="6" placeholder="Skills"></textarea>
            <textarea name="experience" class = "text" cols="82" rows="6" placeholder="Experience"></textarea>
            <input type="submit" name="submit" value="Upload" class="login-button">
        </form>
    <?php
    }
    ?>
</body>

</html>