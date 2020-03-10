<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-blue-600"> 
    <!-- session code section -->
<?php 
        session_start();

        if(isset($_SESSION['username'])) 
        
?>

<!-- logion warning section -->
<p class="bg-red-700 text-center text-3xl antialiased uppercase text-gray-900">
                    <?php
                    if(isset($_SESSION['message'])){
                        
                        echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                    ?>
</p>



<div class="container mx-auto mt-10 flex justify-center ">
    <div class="w-full max-w-xs">

            <!-- from section -->

        <form action="loginSupport.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
            <!-- user input feild -->
                <input
                    name="userName"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="username">
            </div>

            <div class="mb-6">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
            <!-- password input feild -->
                <input
                    name="password"
                    class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="******************">

            </div>
            <div class="flex items-center justify-between">
                <!-- buttton feild -->
                <button

                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" name="singin">
                    
                    Sign In
                </button>
   
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
       
    </div>

    </div>

</body>

</html>