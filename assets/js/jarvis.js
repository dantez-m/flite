$.noConflict();
jQuery(document).ready(function($){
    const btnPop=$(".btnPop");
    const btnX=$(".btnX");
    const col_1=$(".col--1")

    btnPop.on("click",function(){
        col_1.css({
            transform:"translateX(0)",
            opacity:"1",
        })
        btnPop.css({
            display:"none",
        })
    })
    btnX.on("click", function(){
        col_1.css({
            transform:"translateX(-150px)",
            opacity:"0",
        })
        btnPop.css({
            display:"block",
        })
    })
})
