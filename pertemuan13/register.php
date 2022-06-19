<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>CafeXD </title>
</head>
<body class="bg-gray-100">
   <nav class="flex flex-col bg-white drop-shadow-md fixed w-full">
      <div class="flex justify-center my-4">
         <h1 class="text-3xl font-semibold ">CafeXD☕</h1>
      </div>
   </nav>

   <?php
      if (isset($_POST['submit'])) {
         var_dump($_POST);
         // $username = $_POST['username'];
         // $password = $_POST['password'];

         // $query = "INSERT INTO bjrlogin VALUES ('$username', '$password')";
         // $result = mysqli_query($koneksi, $query);
      }
   ?>

   <section class="flex justify-center h-screen">

      <form action="signup.php" method="POST" autocomplete="on" class="m-auto">
         <div class="flex flex-col py-12 px-12 bg-white rounded-2xl shadow-xl z-20 content-center">
            <div>
               <h1 class="text-3xl font-bold text-center mb-4">Sign Up</h1>
            </div>
            <div class="space-y-4">
               <input type="text" name="name" placeholder="Name" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" required/>
               <input type="text" name="username" placeholder="Username" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" required/>
               <input type="password" name="password" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" required/>
            </div>
            <div class="text-center mt-6">
               <input type="submit" value="Register" name="submit" class="py-3 w-64 text-xl text-white bg-purple-400 rounded-2xl cursor-pointer hover:bg-purple-500">
               <p class="mt-4 text-sm">Already Have An Account? <a href="index.php" class="underline cursor-pointer">Sign In</a></p>
            </div>
         </div>
      </form>

   </section>
   
</body>
</html>