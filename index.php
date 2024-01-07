<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style/indexStyle.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">


    <script>
        function navFunc(where) {
        fetch('contents/' + where + '.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById("whereAmI").innerHTML = data;
            })
        }
    </script>

    <title>HomePage</title>
</head>
<body>

    <?php 
    include('contents/navbar.php');
    ?>
    
    <section id="whereAmI">
        <?php 
            include('contents/home.php');
        ?>
    </section>

    <?php 
    include('contents/footer.php');
    ?>
</body>
</html>