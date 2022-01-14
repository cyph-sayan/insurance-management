<?php
include 'conn.php';
if(isset($_POST['done']))
{
 $id= $_GET['id'];
 $name=$_POST['name'];
 $dob=$_POST['dob'];
 $adh=$_POST['adhar'];
 $phno=$_POST['phno'];
 $email=$_POST['email'];
 $sal=$_POST['sal']; 
 $doj=$_POST['doj'];   
 $branch=$_POST['brn'];
 $q="update agent set name='$name', date_of_birth='$dob', adhar_no='$adh', phone='$phno', email_id='$email', salary='$sal', join_date='$doj', branch_id='$branch' where agent_id='$id' ;";
 mysqli_query($con,$q);
 header('location:agentData.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body,html
        {
            height: 100%;
        }
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image:url("002.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            font-family:sans-serif;
            margin-top: 40px;
        }
        .cusreg{
            width: 800px;
            background-color: rgba(0,0,0,0.5);
            margin: auto;
            color: #f3f3f3;
            padding: 15px;
            text-align: center;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .main{
            background-color: rgb(0,0,0,0.4);
            width: 800px;
            margin: auto;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        form{
            padding: 40px;
            margin: 20px;
        }
        label{
            margin-left: 80px;
            font-family: sans-serif;
            color: aliceblue;
            display:block;
        }
        input{
            margin-left: 80px;
            width: 500px;
            border-radius: 20px;
            height: 30px;
        }
         button{
             border-color:  blanchedalmond;
             background-color: rgba(112, 112, 219, 0.4);
             align-self: center;
             display: block;
             width: 200px;
             height: 50px;
             margin-left: 250px;
             border-radius: 10px;
             border-color: rgb(9, 10, 70);
             text-align: center;
             color:aliceblue;
             box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
         }
         button:hover {
          cursor: pointer;
          }
    </style>
    <title>Agent Registration</title>
</head>
<body>
    <div class="cusreg"><h1>Enter Udpated Agent Details</h1> </div><br>
    <div class="main">
        <form method="post">
        <label class="full_name">Full Name</label>
        <input class="name" type="text" name="name"><br><br>
        <label class="dobl">Date Of Birth</label>
        <input class="dob" type="date" name="dob"><br><br>
        <label class="adharl">Adhar Number</label>
        <input class="adhar" type="number" name="adhar"><br><br>
        <label class="phnol">Phone Number</label>
        <input class="phno" type="number" name="phno"><br><br>
        <label class="emaill">Email Id</label>
        <input class="email" type="email" name="email"><br><br>
        <label class="sal">Salary</label>
        <input class="sal" type="number" name="sal"><br><br>
        <label class="brn">Branch Id</label>
        <input class="brn" type="number" name="brn"><br><br>
        <label class="doj">Date of Joining</label>
        <input class="doj" type="date" name="doj"><br><br>
        <button class="btn btn-success" type="submit" name="done">Submit</button>

        </form>



    </div>
</body>
</html>