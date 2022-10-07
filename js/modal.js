var modal = document.getElementById('id01');


function getProb(param){
    document.getElementById('id01').style.display='block'
    document.getElementById("modalloc").value = param;
    // //var location = document.getElementById("p1").value;
    // var location = param;
    // document.cookie = "loc = " + location;
    // console.log(param);
   
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}