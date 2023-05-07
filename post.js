const linkI = document.getElementById("link");
const priceI = document.getElementById("price");
const reviewI = document.getElementById("review");

submit.onclick = function () {
    let xhr = new XMLHttpRequest();
    let url = "data.php";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    const post = {link:linkI.value, price:priceI.value, review:reviewI.value};
    errorHTML = document.getElementById("invalid"); 
    if(!(/^[a-zA-Z]+$/.test(post.link))) {
        console.log("Invalid Link");
        errorHTML.innerHTML = "<em class=\"text-danger\">Invalid part. Letters only.</em>";
        return;
    }

    if(!(/^\d+.\d\d$/.test(post.price))) {
        console.log("Invalid Link");
        errorHTML.innerHTML = "<em class=\"text-danger\">Invalid price.</em>";
        return;
    }

    if(!(true)) {
        console.log("Invalid Link");
        errorHTML.innerHTML = "<em class=\"text-danger\">Invalid review.</em>";
        return;
    }
    var data = JSON.stringify(post);
    xhr.send(data);
}