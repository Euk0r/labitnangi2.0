$(document).ready(function () {
    $("img").each(function() {
        var $this = $(this);
        var src = $this.attr("src");
        $this.attr( "data-src", src );
        $this.removeAttr("src");
        $this.removeAttr("srcset");
        //$(this).lazyLoadXT();
    });
    $(function(){

        $("img.lazyImg").lazyload({
            effect: "fadeIn"
        });
    });
})
