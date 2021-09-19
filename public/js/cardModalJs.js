// let node = document.getElementById('card-container');
// let btn = document.getElementById('downloadDiv');

// let options = {
//   quality: 0.99,
//   width: 2000,
//   height: 2000,
// };

// function downloadDiv() {

//   domtoimage.toBlob(node, options)
//     .then(function (blob) {
//       var link=window.URL.createObjectURL(blob);
//       window.location=link;
//       // (blob, 'my-certification.png');
//     });
// }
document.querySelector("#card-form-title").value="";
let title = document.getElementById("card-form-title")
let cardTitle = document.getElementById("card-title")
title.addEventListener("keyup", (event) => {
    cardTitle.innerHTML = event.target.value;
})

function downloadDiv() {
    if (!document.querySelector("#card-form-title").checkValidity()) {
        document.querySelector("#card-form-title").reportValidity();
        return;
    }

    document.querySelector("#yukleniyor").removeAttribute("hidden");

    let node = document.getElementById('card-container');
    let clone = node.cloneNode(true);
    clone.setAttribute("id", "klonlanmis");
    clone.setAttribute("style", "background-image: url('/images/background.png');");
    clone.setAttribute("style", "width: 1000px; height: 1000px;");
    // border: 5px solid black")
    //  padding: 15px; border-image: url('../../images/border.png') 30 stretch;")
    //clone.setAttribute("style",  "border: 20px solid transparent; padding: 15px; border-image: url('/images/border.png') 30 stretch;")
    clone.children[0].setAttribute("style", "width: 720px; height: 480px;  display: block; margin-left: auto; margin-right: auto;");
    clone.children[1].setAttribute("style", "margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; display: block; margin-left: auto; margin-right: auto; width: 150px; height: 150px;");
    clone.children[3].setAttribute("style", "font-size: 25px; text-align:center;");
    clone.children[5].setAttribute("style", "width:100%;font-size: 25px;");
    clone.children[6].setAttribute("style", "width: 70px; height: 70px;");
    clone.children[7].setAttribute("style", "width: 1000px; height: 1000px;");


    // .forEach(element=>{
    //   element.style.fontSize = "25px"
    // })
    document.body.appendChild(clone);

    setTimeout(() => {}, 1000);
    domtoimage.toPng(document.getElementById("klonlanmis"))
        .then(function(dataUrl) {
            downloadURI(dataUrl, "Farkındalık Belgesi.png")
                //document.body.removeChild(clone)
                document.querySelector("#yukleniyor").setAttribute("hidden","");
        })
        .catch(function(error) {
            console.error('Hoppp, bir şeyler ters gitti!', error);
            document.querySelector("#yukleniyor").setAttribute("hidden","");
        });

}

function downloadURI(uri, name) {
    let link = document.createElement("a");
    link.download = name;
    link.href = uri;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    delete link;
}