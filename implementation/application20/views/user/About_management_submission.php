<!DOCTYPE html>
<html>
<head>

    <title>Sign in page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style type="text/css">
        body{
            background-color: whitesmoke;
        }
        .header{

            background-color: teal;
            height: 150px;
            width: 100%;
            /*position: sticky;*/
        }
        .help_center
        {

            font-size: 20px;
            font-family: "Courier New", Courier, monospace;
            color: white;
            position: relative;
            top: 60px;


        }
        .help_center:hover
        {
            text-decoration: none;
            color: white;
        }
        .assign_groups
        {
            font-size: 20px;
            font-family: "Courier New", Courier, monospace;
            color: white;
            position: relative;
            top: 60px;
            left: 650px;
        }
        .assign_groups:hover
        {
            text-decoration: none;
            color: white;
        }

        .main{
            position: absolute;
            left: 200px;
            right: 200px;
            /* height: 700px;*/
            /*height: 530px;*/
            width: 70%;
            top: 100px;
            /* left: 400px;*/
            z-index: 1;
            background-color: wheat;
            /*border: 1px solid black;*/
        }
        #written
        {
            position: relative;
            top: 50px;
            /*left: 10px;*/
            padding: 2px;
            font-size: 20px;
            font-weight: 400;
            text-align: justify;
        }
        .check{
            font-size: 16px;
            text-align: justify
            line-height:1.6;
        }

    </style>

</head>
<body>
<div class="header">

    <a class="help_center" href="Gethelp" style="text-decoration: none" target="_self">Assignment management Help center</a>
    <a class="assign_groups" href="#" style="text-decoration: none" target="_self">Assignment Groups</a>

</div>

<div class="main">
    <h1 style="text-align: center">How to submit assignments</h1>
        <br/><br>
        <ol class="check">
            <li>
                At first you need to log in with your account. </li><br>
                <li>Then you select your group that you
                want to enter.
            </li><br/>
            <li>
                Click on submit assignment button to submit the assignment.Now you can attach your assignment
                and submit it.
            </li><br/>
            <li>
                If your submitted assignment cover all the requirements of assignment submission then the assignment
                submitted successfully.
            </li><br/>
            <li>
               You can edit or delete the submission and resubmit it.
            </li><br/>
            <li>
                You can view whether you submitted your assignments intime or not.
            </li><br/>

        </ol>
</div>



</body>

</html>