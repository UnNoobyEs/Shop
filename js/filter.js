var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "flex") {
            panel.style.display = "none";
        } else {
            panel.style.display = "flex";
        }
    });
}

function outputUpdate(vol) {
    var output = document.querySelector('#volume');
    output.value = "$" + vol;
}

$(".openButton").on("click", (event) => {
    event.stopPropagation();
    $(".overlayF").toggleClass("open");
});

$(".colors a").on("click",function () {
    $(this).toggleClass("active");
});

$(document).on("click", () => {
    $(".overlayF").removeClass("open");
});

$(".QuickView").on("click",function (){
    $(".Quick").css("display","flex")
});

$(".Quick").on("click",function(){
    $(this).css("display","none");
});

$(".QuickFon").on("click",(event)=>{
    event.stopPropagation();
});
