<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_in</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body{
           
           
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://assets.nflxext.com/ffe/siteui/vlv3/f1c3c4eb-2fea-42c7-9ebd-1c093bd8a69d/a87e547c-fabd-4bd3-9bce-7959225d33ee/EG-en-20230403-popsignuptwoweeks-perspective_alpha_website_large.jpg);
                align-items: center;
                justify-content: center;
                
        }
        #div1, #div2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            color: #ccc;
            font-size:  20px; ;
            margin: 10px;
            margin-left: 550px;
          
        }
        #div2{
            margin-top: 50px;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        label, input, button {
            width: 100%;
            margin: 10px 0;

        }
        input, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #ccc;
       
        }
        button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div id="div2" >
       <p>sign in</p>
    </div>
    <div id="div1" >
     


        <form  method="post" action="index.php">
            <label for="email" id="e"> email</label>    
            <input type="email" placeholder="Inter your email " name="email" class="inp" id="email"  ><br><br>

            <label for="pass" id="pass"> password</label> 
            <input type="password" placeholder="Inter your password " name="pass" class="inp" id="password" ><br><br>
            
            <button id="btn" name="sub"  type="submit">sign in</button>
        </form>
          
        <a href="index.php"> cancel</a>
    </div>


    <script src="validation.js"></script>

</body>
</html>

<?php
require_once 'conn.php';

if(isset($_POST['sub'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query="SELECT email,password FROM users ";
    $q1=$conn->prepare($query);
    $q1->execute();
    $res=$q1->fetchAll(PDO::FETCH_ASSOC);
    if($res){
        foreach($res as $re){
            if($email==$re['email']&& $pass==$re['password']){
                // header('Location: ');
            }
        }
    }
    }
?>