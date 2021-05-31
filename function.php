<html>
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <?php 
    $str = "Write a short pitch about
    what you do and why
    I help you create a home you love, so
    you can relax and refresh in a pure
    and simple space.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php 
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php 
    echo nl2br($str);
    ?>
    </body>
</html> 