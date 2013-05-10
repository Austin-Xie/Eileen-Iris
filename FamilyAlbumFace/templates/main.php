<!DOCTYPE html>
<html>
<head>
    <style>

        body
        {
            margin:0;
            padding:0;
            height: 800px;
        }
        .left-nav
        {
            float:left;
            width:200px;
            background-color:#b0e0e6;
            height: 100%;
        }
        .align-center
        {
            margin:auto;
            width:100%;
            background-color:#b0e0e6;
            height: 100%;
        }
        .working-zone
        {
            position:absolute;
            left:201px;
            top:40px;
            background-color:#b0e0e6;
        }
    </style>
</head>
<body>

<div id="container" class="align-center "  >

    <div id="header" style="background-color:#6666FF;">
        <h1 style="margin-bottom:0;">Main Title of Web Page</h1>
    </div>

    <div id="menu" class="left-nav">
        <b>Menu</b><br>
        HTML<br>
        CSS<br>
        JavaScript
    </div>

    <div id="content" class="working-zone">
        Content goes here
    </div>

    <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
        Copyright � W3Schools.com</div>

</div>

</body>
</html>

