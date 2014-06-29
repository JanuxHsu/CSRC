(function ($) {
    $(document).ready(function () {
        var pictureURLs = ["<?=base_url();?>asset/img/1.jpg", "<?=base_url();?>asset/img/2.jpg", "<?=base_url();?>asset/img/3.jpg", "<?=base_url();?>asset/img/4.jpg", "<?=base_url();?>asset/img/5.jpg", "<?=base_url();?>asset/img/6.jpg"];
        var index = 0;
        function swtich(num){
            //console.log(num);
            $("#banner-pic").fadeOut(function(){
                $("#banner-pic").prop("src", pictureURLs[num]);
                $("#banner-pic").fadeIn();
            });     
        }

        loop = function(){
            timer = setTimeout(function(){
            index++;
            swtich(index%6);
            loop();
          }, 5000);
        }
        
        loop();
    });        
}(jQuery));