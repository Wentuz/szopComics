
let page = 1;

let maxPages = 3;

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
    document.getElementById("comicImg").src = img;

    alert()
}