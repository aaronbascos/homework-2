<?php
    $name="Aaron Bascos";
    $des1 = "I'm from: ";
    $des2 = "My Hobbies are: ";
    $des3 = "My Favorite Foods Are: ";
    $des4 = "My Favorite Colors are: ";
    $imgURL = "wallpaper.jpg";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .profile-photo {
            max-height: 200px;
            max-width: 200px;
            border-radius: 50%;
            overflow: hidden;
            align-self: center;
            
        }
        h1 {
            color: white;
            text-align: center;
            margin-top: 10px !important;
            font-weight: bold !important;
            font-size: 24px !important;
        }
        
        .first p{   
            color: white;
            text-align: center;
            font-size: 16px !important;
        }
        

        body::after{
            background-color: black;
            opacity: 50%;
            position: fixed;
            height: 100vh;
            width: 100vw;
        }

        .alert{
            background: white;
            color: seagreen;
            font-size: 24px ;
            font-weight: bold;
        }

        .address p {
            
            color: white;
            text-align: center;
            font-size: 24px !important;
            margin-left: 1cm !important;
        }
        
        .address h2 {
            color: white;
            font-weight: bold !important;
            text-align: center !important;
            font-size: 36px !important;
            
        }
        
    </style>
</head>
<body style="background: url(<?php echo $imgURL; ?>");>
    <div class="overlay"></div>
        <div class="alert" style="position: fixed; top: 0px; width: 100%; height: 50px;">
            <marquee behavior="scroll" direction="left">
                Attention: I'm looking for a Web Development Job!
            </marquee>
        </div>
    
    <div class="h-screen w-screen flex items-center justify-center">
        <div class="first">
            <center>
                <img class="profile-photo" src= "profile.jpg" alt="">
            </center>
            <h1>Hi, I'm <?php echo $name ?> </h1>
            <p>I'm a Junior Web Developer</p>                               
            <div class="address" style="margin-top: 1cm">
                <h2>My Address</h2>
                <p><?php echo $des1?> <span style="color: #72f35b">Santiago City, Isabela </span> </p>
                <hr style="width: 110% !important">
                <div>
                    <h2>Hobbies</h2>
                    <p><?php echo $des2?><span style="color: #72f35b">Playing Games, Eating, & Watching</span></p>
                    <hr style="width: 110% !important">
                        <h2 style="color: white; font-weight: bold; text-align: center; font-size: 36px">Favorite Foods</h2>
                        <p style="color: white; font-size:24px !important"><?php echo $des3?><span style="color: #72f35b">Pork Sinigang, Pork Adobo, & Beef Broccoli</span> </p>
                        <hr style="width: 110% !important">
                        <h2 style="color: white; font-weight: bold; text-align: center; font-size: 36px">Favorite Colors</h2>
                        <p style="color: white; font-size:24px !important"><?php echo $des4?><span style="color: hsl(0, 0%, 29%)">Black</span> and <span style="color: #fff">White</span> </p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
