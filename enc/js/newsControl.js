(function ($) {
    $(document).ready(function () {
        var flag = true;
        $('.CB-item').click(function(){
            if(flag){
                $(this).find(".CB-item-content").show(function(){
                    flag = false;
                });
            }else{
                $(this).find(".CB-item-content").hide(function(){
                    flag = true;
                });
            }
        });
    });        
}(jQuery));