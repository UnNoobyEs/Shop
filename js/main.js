$(".menu-btn").on("click", (event) => {
    event.stopPropagation();
    $(".overlay").toggleClass("open");
});

$(document).on("click", () => {
    $(".overlay").removeClass("open");
});

$(".overlay").on("click", (event) => {
    event.stopPropagation();
});

    $(".login a").on("click",function () {
        $(".formReg").css("display","flex");
});

$(".formReg").on("click",function(){
    $(this).css("display","none");
});

$(".reg").on("click", (event) => {
   event.stopPropagation();
});

$(".logBTN").on("click",function(){
    $("#regForm").css("display","none");
    $("#logForm").css("display","block");
    $(this).addClass("active");
    $(".RegBTN").removeClass("active")
});

$(".RegBTN").on("click",function(){
    $("#logForm").css("display","none");
    $("#regForm").css("display","block");
    $(this).addClass("active");
    $(".logBTN").removeClass("active")
});

$(".LoginInfo").on("click",(event) => {
    event.stopPropagation();
   $(".infoAcc").toggleClass("active");
});

$(document).on("click",() => {
    $(".infoAcc").removeClass("active");
});

$(".infoNav").on("click",(event)=>{
    event.stopPropagation();
});