$(".khusus_angka").keypress(
    function(e){
        var chr = String.fromCharCode(e.which);
        if("1234567890".indexOf(chr) < 0) return false;
    }
)

$(".khusus_abjad").keypress(
    function(e){
        var chr = String.fromCharCode(e.which);
        if("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz. '`".indexOf(chr) < 0) return false;

    }
)

$(".khusus_abjad2").keypress(
    function(e){
        var chr = String.fromCharCode(e.which);
        if("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.,&/`' -_".indexOf(chr) < 0) return false;
    }
)