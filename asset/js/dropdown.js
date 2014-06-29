(function ($) {
    $(document).ready(function () {
        var begin = '<div class="dropdownMenu">';
        var ending = '</div>';

        function dropdown(content){
            return '<div class="dropdownMenu">' + content + '</div>';
        }

        function extension(content){
            return '<div class="extensionMenu">' + content + '</div>';
            console.log(content);
        }

        function assembleMenu(target){
            target.children("span").append(dropdown(target.find(".dropdown-options").html()));
        }


        function assembleExtension(target){
            target.children("span").append(extension(target.find(".dropdown-extensions").html()));
        }

        function removeMenu(target){
            target.find(".dropdownMenu").remove();
        }

        function removeExtension(target){
            target.find(".extensionMenu").remove();
        }

        $(".dropdown").hover(function(){
            var cursor = $(this);
            assembleMenu(cursor);
            $(".extension").hover(function(){
                var cursor = $(this);
                assembleExtension(cursor);
            }, function(){
                var cursor = $(this);
                removeExtension(cursor);
            });
                
        }, function(){
            var cursor = $(this);
            removeMenu(cursor);
        });

    });
}(jQuery));