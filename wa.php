<?php
if ($_SERVER['HTTP_REFERER'] == 'http://localhost/index.php') {
    
} else {
    header("Location: http://localhost/index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div>
            <h1 style="text-align:center">
                Team Hacker Egypt
            </h1>




            <p id="demo" style="text-align:center" class="demo"> </p>

            <script>
            var i = 0;
            var txt =
                'Data is being uploaded and decrypted now please wait till finish or contact team hacker egypt admin from here  ';
            var speed = 50;

            function typeWriter() {
                if (i < txt.length) {
                    document.getElementById("demo").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }

            window.onload = typeWriter();
            </script>
            <a href="https://www.facebook.com/team.hacker.egypt.official">Team Hacker Egypt</a>
    </body>

</html>
