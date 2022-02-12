<?php
$error = [];
if ($_POST) {
    $name_pattern = '/^[a-zA-Z-\' ]*$/';
    $email_pattern = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    // $pass_pattern = '/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

    $uppercase = preg_match('@[A-Z]@', ($_POST['password']));
    $lowercase = preg_match('@[a-z]@', ($_POST['password']));
    $number    = preg_match('@[0-9]@', ($_POST['password']));


    if (!preg_match($name_pattern, ($_POST['fname']))) {
        $error['fname'] = 'Please enter a valid name';
    }
    if (!preg_match($name_pattern, ($_POST['lname']))) {
        $error['lname'] = 'Please enter a valid name';
    }
    if (!preg_match($email_pattern, ($_POST['email']))) {
        $error['email'] = 'Please enter a valid email';
    }

    if (!$uppercase || !$lowercase || !$number || strlen($_POST['password']) < 8) {
        $error['password'] = 'Please enter at least 8 character';
    }

    echo ("<pre>");
    print_r($_POST);
    echo ("</pre>");
}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Valid Form</title>
</head>

<body>
    <!-- navbar area start  -->
    <!-- navbar area end  -->
    <!-- container area start  -->
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h2>Valid Form</h2>
            <div class="mt-2 mb-2">
                <label for="fname">First Name :</label>
                <input type="text" class="form-control" name="fname" id="stName" placeholder="Enter Your first name" value="">

                <p class="text-danger mt-2 text-capitalize">
                    <?php echo $error['fname'] ?? '' ?>
                </p>
            </div>
            <div class="mt-2 mb-2">
                <label for="lname">Last Name :</label>
                <input type="text" class="form-control" name="lname" id="fName" placeholder="Enter your last name" value="">

                <p class="text-danger mt-2 text-capitalize">
                    <?php echo $error['lname'] ?? '' ?>
                </p>
            </div>
            <div class="mt-2 mb-2">
                <label for="email">Email Address :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Student's Email Address" value="">

                <p class="text-danger mt-2 text-capitalize">
                    <?php echo $error['email'] ?? '' ?>
                </p>
            </div>
            <div class="mt-2 mb-2">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="">
                <p class="text-danger mt-2 text-capitalize">
                    <?php echo $error['password'] ?? '' ?>
                </p>
            </div>
            <div class="mt-2 mb-2">
                <label for="gender">Gender :</label>

                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>

                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>

                <input type="radio" name="gender" id="others" value="others">
                <label for="others">Others</label>
            </div>
            <div class="mt-2 mb-2">
                <label for="age" class="">Age :</label>
                <input type="number" class="form-control" name="age" id="age" placeholder="Enter your age" value="">
            </div>

            <div class="mt-2 mb-2">
                <label for="department" class="">Choose Your Occupation :</label>
                <br>
                <select name="department" id="department" class="form-select  ">
                    <option value="select" selected></option>
                    <option value="student">Student</option>
                    <option value="doctor">Doctor</option>
                    <option value="teacher">Teacher</option>
                    <option value="engineer">Engineer</option>
                </select>
            </div>
            <div class="mt-2 mb-2">
                <label for="fav_language">Favourite Subject :</label>
                <br>
                <input type="checkbox" name="language[]" value="bangla" id="">
                <label for="php">Bangla</label><br>
                <input type="checkbox" name="language[]" value="mathmatics" id="">
                <label for="phython">Mathmatics</label><br>
                <input type="checkbox" name="language[]" value="physics" id="java">
                <label for="java">Physics</label><br>
                <input type="checkbox" name="language[]" value="chemistry" id="c++">
                <label for="c++">Chemistry</label><br>
                <input type="checkbox" name="language[]" value="socisl science#" id="c#">
                <label for="c#">Social Science</label><br>
            </div>
            <div class="mt-2 mb-2">
                <label for="message">Message :</label>
                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="button mt-3 mb-2">
                <input type="submit" value="Submit" class="s_btn">
                <input type="reset" value="Reset" class="r_btn">
            </div>
        </form>
    </div>




    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>