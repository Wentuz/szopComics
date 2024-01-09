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

    <script src="script/navScript.js"></script>
    
    <title>Selector</title>
    <script>
        //window.location.href = 'comics/kitus_adventures/read.php';
    </script>


</head>
<body>
    <div class="logoHolder">
        <img class="logo"src="img/logo.png" alt="logo">
        <h1 class="bigText">RACoomic !</h1>
    </div>

    <?php 
    include('contents/navbar.php');
    ?>
    
    <main>

    <div class="basic">
    <section>
        <div class="centerDiv">
            <ul>
                <li>
                    <a class="comSel" href="comics/kitus_adventures/read.php"><h2>Kitus adventures</h2></a>
                </li>
            </ul>
        </div>
        </section>
    </div>

    </main>

    <?php 
    include('contents/footer.php');
    ?>

</body>
</html>