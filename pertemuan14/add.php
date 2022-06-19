<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Add User</title>
</head>
<body class="bg-gray-100">

   <section class="flex flex-col justify-center h-screen ">
      
      <form action="add.php" method="post" name="form1" autocomplete="on" class="m-auto">
         <!-- <table >
            <tr>
               <td>Name</td>
               <td><input type="text" name="name" maxlength="15" minlength="3" required></td>
   
               <td>Email</td>
               <td><input type="email" name="email" required></td>
   
               <td>Mobile</td>
               <td><input type="tel" name="mobile" required></td>
   
               <tr>
                  <td></td>
                  <td><input type="submit" name="Submit" value="Add"></td>
               </tr>
            </tr>
         </table> -->
         <div class="flex flex-col py-12 px-12 bg-white rounded-2xl shadow-xl z-20 content-center ">
            <div>
               <h1 class="text-3xl font-bold text-center mb-4">Add New User</h1>
            </div>
            <div class="space-y-4">
               <input type="text" name="name" placeholder="Name" class="block text-sm py-3 px-4 rounded-lg w-full border-b-2 outline-none focus:outline-purple-500" maxlength="15" minlength="3" required/>
               <span></span>
               <input type="email" name="email" placeholder="email" class="block text-sm py-3 px-4 rounded-lg w-full border-b-2 outline-none outline-none focus:outline-purple-500" required/>
               <input type="tel" name="mobile" placeholder="phone number" class="block text-sm py-3 px-4 rounded-lg w-full border-b-2 outline-none outline-none focus:outline-purple-500" required/>
            </div>
            <div class="text-center mt-6">
               <input type="submit" value="Create" name="Submit" class="py-3 w-64 text-xl text-white bg-purple-500 rounded-2xl cursor-pointer hover:bg-purple-600">
            </div>
            <?php
               if (isset($_POST['Submit'])) {
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $mobile = $_POST['mobile'];

                  include_once("config.php");

                  $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

                  if($result) {
                     echo "<h1 class='text-xl font-bold text-center pt-4 '>User created successfully ✔</h1>";
                     echo "<a href='index.php' class='text-lg font-semibold text-gray-500'>Back to Home</a>";
                  }
                  else {
                     echo "<h1 class='text-center'>User creation failed.</h1>";
                  }
               }
            ?>
         </div>
      </form>
   </section>
   
</body>
</html>