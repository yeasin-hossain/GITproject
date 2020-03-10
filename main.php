<?php



    // if press post button  data will israt in the file
    if(isset($_POST['write'])){
        
    $opinion = "opinion.txt";
    $post = $_POST['fname'];

    if(!empty($post)){
        $filecontent = fopen($opinion, 'w+');

    fwrite($filecontent, $post);
    fclose($filecontent);
    } 

    header('location: index.php');

}


// if press contribute button, data will add in with exiting data


if(isset($_POST['edit'])){

    $opinion = "opinion.txt";
    $post = $_POST['fname'];


    if(!empty($post)){
        $filecontent = fopen($opinion, 'a');

    fwrite($filecontent, $post);
    fclose($filecontent);
    } 

    header('location: index.php');

}








