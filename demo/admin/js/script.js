$(document).ready(function(){
    $("#buslink").click(function(){
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    $("#editbus").click(function(){
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    $("#busprofile").click(function(){
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    var notification = $(".notification").text();

    if (notification == '') {

        $(".notification").css("display","none")

    }else{
        function fade(){
            $(".notification").fadeOut(2000);
        }
        setInterval(fade,3000);
    };

    $(".close").click(function(){
        $(".aboutModal").hide(100);
    });

    $(".aboutshow").click(function(){
        $(".aboutModal").show(100);
    });

    $('#myTable').Tabledit({
    columns: {
    identifier: [0, 'ID'],                    
    editable: [[0, 'ID'], [1, 'bName'],[2, 'bFrom'], [3, 'bTo'], [4, 'aTime'],[5, 'dTime'],[6, 'price']]
}

});
})