<html>
<head>
   <title>Kuis Pemrograman Web</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <h1 class="text-4xl text-center font-bold">PHP FORM VALIDATION</h1>
   <p style="color:red">* Required Field</p>

   <section class="flex flex-col w-1/3 justify-center">
      <form action="" method="POST" name="form" class="flex ">
         <label for="name">Name</label><br>
         <input type="text" name="nama" required> <span style="color:red">*</span><br><br>
         <input type="text" name="email" required value=> <span style="color:red">*</span><br><br>

         <label for="website">Website</label><br>
         <input type="text" name="website"><br><br>

         <label for="komen">Comment</label><br>
         <textarea name="komen" id="" cols="40" rows="5"></textarea><br><br>

         <label for="gender">Comment</label><br>
         <Input type="radio" name="gender" value="female" checked> female
         <Input type="radio" name="gender" value="male" > male <span style="color:red">*</span><br><br>
         <Input type="submit" name="sub" value="Submit"></Input> 
         <input type="reset" name="reset" value="Reset">
      </form>
   </section>
   
   <h2>Your Input :</h2>

</html>

<?php
   if (isset($_POST["sub"])) {
      $nama = $_POST["nama"]; echo "<b>$nama</b> <br>";
      $email = $_POST["email"]; echo "<b>$email</b> <br>";
      $web = $_POST["website"]; echo "<b>$web</b> <br>";
      $komen = $_POST["komen"]; echo "<b>$komen</b> <br>";
      $kel = $_POST["gender"]; echo "<b>$kel</b> <br>";
   } 
?>
