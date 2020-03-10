<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-purple-900">
<?php
        session_start();
        if(isset($_SESSION['username'])){

        }else{
            header('location: login.php');
        }

?>


    <div class="container mx-auto ">
        <!--  input area -->
        <form action="main.php" method="POST" class="mt-10 flex justify-center relative">
            <!-- input feild  -->
            <textarea name="fname" id="" cols="30" rows="10" placeholder="your opinion"
                class="border rounded-md p-5 resize-none ">
</textarea>

            <!-- button area -->
            <div class="absolute mt-64">

                <button type="submit" name="write"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    New Post
                </button>

                <button type="submit" name="edit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Contribute
                </button>
            </div>

            <!-- logout button -->
        
        </form>
        <a href="logout.php"
        class="bg-red-500 float-right hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
        >Logout</a>


        <?php 

    $opinion = "opinion.txt";
    $filecont = fopen($opinion, 'r');
    $data= fread($filecont, filesize($opinion));

        ?>
        <div class="h-auto bg-indigo-700 mt-10 text-center w-auto p-5">
            <h1 class="text-3xl text-yellow-400"><?php echo $data; ?></h1>
        </div>
        <?php fclose($filecont); ?>

    </div>
</body>

</html>