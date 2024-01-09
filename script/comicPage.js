let page = 1;
var img = document.getElementById("comicImg");
//img.src = page + '.jpg';
console.log(img);
function nextPage(){
    page++;
    document.getElementById("whatPage").textContent = page;
    img = "./comics/kitus_adventures/" + page + '.jpg';

    if (page > 2){
        page--;
    }

    document.getElementById("comicImg").src = img;
}
function prevPage(){
    page--;
    if (page < 1){
        page++;
    }
    document.getElementById("whatPage").textContent = page;
    img = "./comics/kitus_adventures/" + page + '.jpg';
    document.getElementById("comicImg").src = img;
}