<?php
include 'conn.php';
if(isset($_POST['done']))
{
 $pid=$_GET['id'];
 $cover=$_POST['cov'];
 $idate=$_POST['i_date'];
 $tprice=$_POST['tprice'];
 $deduc=$_POST['ded'];
 $q="update policy set coverage='$cover', issue_date='$idate', term_price='$tprice', deduciton='$deduc' where policy_no='$pid';";
 mysqli_query($con,$q);
 header('location:policyData.php');
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
    <title>Branch Registration</title>
</head>
<body>
    <div class="cusreg"><h1>Enter Branch Details</h1> </div><br>
    <div class="main">
        <form method="post">
        <label class="cov">Coverage</label>
        <input class="cov" type="text" name="cov"><br><br>
        <label class="i_date">Issue Date</label>
        <input class="i_date" type="date" name="i_date"><br><br>
        <label class="tprice">Term Price</label>
        <input class="tprice" type="text" name="tprice"><br><br>
        <label class="ded">Deduction</label>
        <input class="ded" type="text" name="ded"><br><br>
        <button class="btn btn-success" type="submit" name="done">Submit</button>

        </form>



    </div>
</body>
</html>