<?php
   include_once("config.php");

   $results = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");

?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Home</title>
</head>
<body>

   <nav class="flex flex-col bg-white drop-shadow-md w-full">
      <div class="flex justify-center my-4">
         <h1 class="text-3xl font-semibold ">Dashboard 📊📉📈</h1>
      </div>
   </nav>
   
   <section class="flex justify-center my-10">

      <table class="">
         <tr class="m-auto text-left">
            <th class="border w-52 py-4 pl-2 bg-purple-400 border-0 font-bold text-white">Name</th> 
            <th class="border w-52 py-4 pl-2 bg-purple-400 border-0 font-bold text-white">Mobile</th> 
            <th class="border w-52 py-4 pl-2 bg-purple-400 border-0 font-bold text-white">Email</th> 
            <th class="border w-32 py-4 pl-2 bg-purple-400 border-0 font-bold text-white">Update</th>
         </tr>
      <?php
         while ($user_data = mysqli_fetch_array($results)) {
            echo "<tr class='odd:bg-purple-200 even:bg-white'>";
            echo "<td class='border border-0 p-2 '>".$user_data['name']."</td>";
            echo "<td class='border border-0 p-2 '>".$user_data['mobile']."</td>";
            echo "<td class='border border-0 p-2 '>".$user_data['email']."</td>";
            echo "<td class='border border-0 p-2 '><a href='edit.php?id=$user_data[id]' class='font-bold'>Edit</a> | <a href='delete.php?id=$user_data[id]' class='text-red-500 font-bold hover:text-red-400'>Delete</a></td></tr>";
         }
      ?>
      </table>
   </section>

   <button class="flex justify-center mx-auto">
      <a href="add.php" class="flex flex-row w-36 p-2 bg-purple-500 hover:bg-purple-600 text-white text-center font-bold justify-around rounded-md">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor" class="">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
         </svg>
         <span class="">Create New</span>
      </a>
   </button>
   
</body>
</html>