<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: ../zx/editor.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>-->
    <title>Admin</title>
    <link rel="icon" href="http://orj6ooggn.bkt.clouddn.com/icon.png">
    <link rel="stylesheet" href="../css/zhang.css"/>
    <style>
        *{
            margin: 0;
            padding: 0;}
        body{
           
            width:100%;
            color:black;
            background: url("http://os8hd0fib.bkt.clouddn.com/admin.jpg") ;
            background-size: cover; 

        }
        
        /*左边栏*/

        .holder{
            position: absolute;left:50px;top:50px;
            width:300px;
            height:90%;
            border-radius: 10px;
            background: linear-gradient(45deg, #DDD6D6, #7F7373);
            opacity: 0.7;
        }
        .holder div{
            margin:50px;

        }
        .holder span{
            cursor: pointer;
        }

        /*左边栏*/

        /*内容*/
        #contains{
            position: absolute;left:400px;top:50px;
            width: 70%;
            min-width: 800px;
            height:90%;
            border-radius: 10px;
            background: linear-gradient(45deg, #DDD6D6, #7F7373);
            opacity: 0.7;


        }
        /*内容*/

    </style>
</head>
<body>

<!-- 左边栏-->

<div class="holder">

    <div id="music">Music
        <div><span>音乐管理</span></div>
    </div>
    <div id="blog">Blog
        <div><span>博客管理</span></div>
    </div>
    <div id="audio">Audio
        <div><span>视频管理</span></div>
    </div>
    <div id="god">Zhangss
        <div><span>超电磁炮</span></div>
    </div>
</div>

<!-- 左边栏-->

<!--内容-->
<div id="contains">
    <div class="c-music">

    </div>
    <div class="c-blog">

    </div>
    <div class="c-audio">

    </div>
    <div class="c-god">

    </div>
</div>
<!--内容-->


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>

</script>

</body>
</html>