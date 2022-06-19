<?php
   include_once("config.php");

   if(isset($_POST['update'])) {
      
      $id = $_POST['id'];

      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];

      $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

      header("Location: index.php");
   }
?>

<?php
   $id = $_GET['id'];

   $result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

   while($user_data = mysqli_fetch_array($result)) {

      $name = $user_data['name'];
      $email = $user_data['email'];
      $mobile = $user_data['mobile'];
   }

?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>edit user</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
   
   <nav class="flex flex-col bg-white drop-shadow-md w-full fixed">
      <div class="flex justify-start my-4">
         <a href="index.php" class="ml-4">Back Home</a>
      </div>
   </nav>

   <section class="flex flex-col justify-center h-screen">
      
      <form name="update_user" method="post" action="edit.php" autocomplete="on" class="m-auto">
         <!-- <table>
            <tr>
               <td>Name</td>
               <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
   
            <tr>
               <td>Email</td>
               <td><input type="email" name="email" value="<?php echo $email;?>"></td>
            </tr>
   
            <tr>
               <td>Mobile</td>
               <td><input type="tel" name="mobile" value="<?php echo $mobile;?>"></td>
            </tr>
   
            <tr>
               <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
               <td><input type="submit" name="update" value="Update"></td>
            </tr>
   
         </table> -->
         <div class="flex flex-col py-12 px-12 bg-white rounded-2xl shadow-xl z-20 content-center ">
            <div>
               <h1 class="text-3xl font-bold text-center mb-4">Edit User</h1>
            </div>
            <div class="space-y-4">
               <input type="text" name="name" value="<?php echo $name;?>" class="block text-sm py-3 px-4 rounded-lg w-full border-b-2 outline-none focus:outline-purple-500" maxlength="15" minlength="3" required/>
               <input type="email" name="email" value="<?php echo $email;?>" class="block text-sm py-3 px-4 rounded-lg w-full border-b-2 outline-none outline-none focus:outline-purple-500" required/>
               <input type="tel" name="mobile" value="<?php echo $mobile;?>" class="block text-sm py-3 px-4 rounded-lg w-full border-b-2 outline-none outline-none focus:outline-purple-500" required/>
            </div>
            <div class="text-center mt-6">
               <input type="hidden" name="id" value="<?php echo $id;?>">
               <input type="submit" name="update" value="Update" class="py-3 w-64 text-xl text-white bg-purple-500 rounded-2xl cursor-pointer hover:bg-purple-600">
            </div>
         </div>
      </form>
   </section>

   
</body>
</html>