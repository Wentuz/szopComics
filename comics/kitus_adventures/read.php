<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../../style/indexStyle.css">
    <link rel="stylesheet" type="text/css" href="../../style/style.css">

    <link rel="icon" href="../../img/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">

    <script src="../../script/navScript.js"></script>

    <script>
        let page = 1;
        let maxPages = 3;
        
        function directGo(){
            event.preventDefault();
            page = document.getElementById('pageNum').value;
            if( page > maxPages ){
                page = maxPages;
            }
            if( page <= 0 ){
                page = 1;
            }
            updateComicPage();
            //document.forms[0].submit();
        }
        
        var img = document.getElementById("comicImg");
        console.log(img);
        function nextPage(){
            page++;
            if (page > maxPages){
                page--;
            }
            updateComicPage();
        }
        function prevPage(){
            page--;
            if (page <= 0){
                page++;
            }
            updateComicPage();
        }
        function firstPage(){
            page = 1;
            updateComicPage();
        }
        function lastPage(){
            page = maxPages;
            updateComicPage();
        }
        function updateComicPage() {
            document.getElementById("whatPage").textContent = page;
            img = page + "/" + page + '.jpg';
            console.log(page)
            document.getElementById("comicImg").src = img;
        }
        
    </script>
    
    <title>Kitus Adventures</title>
</head>
<body>
    <div class="logoHolder">
        <img class="logo"src="../../img/logo.png" alt="logo">
        <h1 class="bigText">RACoomic !</h1>
    </div>

    <?php 
    include('../../contents/navbar.php');
    ?>
    
    <main>

    <div class="basic">
        <div class="centerDiv">
        <form class="centerDiv">
            <input type="number" id="pageNum" name="pageNum" value=""><br>
            <button type="button" onclick="directGo()" class="galButton">GO</button>
        </form>
        </div>
        <section class="gallery">
            <form action="" method="get">
                <button type="button" onclick="prevPage()" class="galButton"><</button>
                <button type="button" onclick="firstPage()" class="galButton"><<</button>
            </form>
            <div class="comicPage">
                <img src="1/1.jpg" alt="img" class="mainImg" id="comicImg">
            </div>
            <form action="" method="get">
                <button type="button" onclick="nextPage()" class="galButton">></button>
                <button type="button" onclick="lastPage()" class="galButton">>></button>
            </form>
        </section>
        <div class="centerDiv">
            <div id="whatPage">1</div>
        </div>
    </div>

    </main>

    <?php 
    include('../../contents/footer.php');
    ?>

</body>
</html>