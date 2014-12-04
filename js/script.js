jQuery(function(){
    var kKeys = [];
    function Kpress(e){
        kKeys.push(e.keyCode);
        if (kKeys.toString().indexOf("38,38,40,40,37,39,37,39,66,65,13") >= 0) {
            jQuery(this).unbind('keydown', Kpress);
            kExec();
            kKeys.empty();
        }
    }
    jQuery(document).keydown(Kpress);
});

function kExec(){
   alert("KONAMI CODE !!");
   $("#ensisa").attr('src', 'img/jonathan.jpg');
   $("#gameLogo").attr('src', 'img/baniere.jpg');
   $("#zik").attr('src', 'music/TNT.mp3');
}

