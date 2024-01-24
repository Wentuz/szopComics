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
    
    <title>HomePage</title>
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
            <h2 class="medText">Comic list</h2>
        </div>
        
        <section class="comicSection">
            <div class="centerDiv">
                <article class="homeArt fixUp">
                    <a class="comSel" href="comics/kitus_adventures/read.php"><h2>Kitus adventures</h2></a>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, in?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur</p>
                </article>
                <article class="homeArt" style="padding: 0; margin: 0;">
                    <p><img class="comicImg" src="img/logo1.jpg" alt="TestCat"></p>
                </article>
            </div>
        </section>

        <section class="comicSection">
            <div class="centerDiv">
                <article class="homeArt fixUp">
                    <a class="comSel" href="comics/AFJOR/read.php"><h2>A F$cking jar of RICE</h2></a>
                    <p>If you like bad humour, poorly drawn characters and dont mind stolen memes...</p>
                    <p>This might be just for you x3</p>
                </article>
                <article class="homeArt" style="padding: 0; margin: 0;">
                    <p><img class="comicImg" src="img/logo2.jpg" alt="AFJOR"></p>
                </article>
            </div>
        </section>

    </section>
    </div>

    </main>

    <?php 
    include('contents/footer.php');
    ?>

</body>
</html>