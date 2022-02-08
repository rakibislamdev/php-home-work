 <?php
    echo ("<pre>");
    print_r($_POST);
    echo ("</pre>");

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Input Form</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>

 <body class="m-5">

     <h1 style="text-align: center;">Input Form</h1>

     <br><br>

     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

         Name: <input type="text" name="myname" value="">

         <br><br>

         Email: <input type="email" name="myemail" value="">

         <br><br>

         Password: <input type="password" name="password" value="">

         <br><br>

         Date of Birth: <input type="date" name="birthdate" value="">

         <br><br>

         Gender:
         <input type="radio" name="gender" value="">
         Male
         <input type="radio" name="gender" value="">
         Female

         <br><br>

         Select your favorite fruits:
         <select name="fav_fruits" size="1">
             <option value="apple">Apple</option>
             <option value="orange">Orange</option>
             <option value="papaya">Papaya</option>
             <option value="pineapple">Pine Apple</option>
             <option value="mangoo">Mangoo</option>
         </select>

         <br><br>

         Favorite player:
         <input type="checkbox" name="fav_player" value="Sakib">Sakib
         <input type="checkbox" name="fav_player" value="mortaza">Mortaza
         <input type="checkbox" name="fav_player" value="messi">Messi
         <input type="checkbox" name="fav_player" value="ronaldo">Ronaldo

         <br><br>

         Message:
         <br>
         <textarea name="" id="" cols="30" rows="5" placeholder="Enter Your Message" name="message"></textarea>

         <br><br>

















         &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
         &nbsp; &nbsp; &nbsp;&nbsp;
         <input type="submit" name="submitbtn" value="Submit">
         <input type="reset" name="resettbtn" value="Reset">


     </form>
 </body>

 </html>