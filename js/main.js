function countPower() {
    var a = 0, b = 0;
    $("[name^='p']").each(function() {
        var b = $(this).attr("power");
        void 0 !== b && (a += parseInt(b)), $("[name='team_power']").val(a);
    }), $("[name^='ep']").each(function() {
        var a = $(this).attr("power");
        void 0 !== a && (b += parseInt(a)), $("[name='enemy_power']").val(b);
    }), team_change_percentage = parseFloat(a / (a + b) * 100).toFixed(0), enemy_change_percentage = parseFloat(100 - team_change_percentage).toFixed(0), 
    $(".team_change_win").text(team_change_percentage + "%"), $(".enemy_change_win").text(enemy_change_percentage + "%");
}

function setCoreItem(a, b) {
    var c = a.next().find(".core-item");
    c.empty();
    $.ajax({
        url: "connection/getData.php?action=get_core_item&hero=" + b,
        success: function(a) {
            c.append(a);
        }
    });
}

function setCounterHero(a, b) {
    var c = a.next().find(".counter-hero");
    c.empty();
    $.ajax({
        url: "connection/getData.php?action=get_counter_hero&hero=" + b,
        success: function(a) {
            c.append(a);
        }
    });
}

function setCounterItem(a, b) {
    var c = a.next().find(".counter-item");
    c.empty();
    $.ajax({
        url: "connection/getData.php?action=get_counter_item&hero=" + b,
        success: function(a) {
            c.append(a);
        }
    });
}

$("[name^='p'],[name^='ep']").click(function() {
    $("#ModalHero").modal("toggle"), $(this).attr("active", !0);
}); 

$("#HeroTabs").tabs({
    active: 0
}); 

$(".hero_img").click(function() {
    var a = $(this).attr("power"), b = $(this).attr("name");
    $("[name^='p'][active='true'],[name^='ep'][active='true']").attr("power", a).text(b), 
    countPower(), setCoreItem($("[name^='p'][active='true'],[name^='ep'][active='true']"), b), 
    setCounterHero($("[name^='p'][active='true'],[name^='ep'][active='true']"), b), 
    setCounterItem($("[name^='p'][active='true'],[name^='ep'][active='true']"), b), 
    $("#ModalHero").modal("hide");
}); 

$("#ModalHero").on("hidden.bs.modal", function() {
    $("[name^='p'],[name^='ep']").removeAttr("active");
});

$("#ModalInsight").modal({
    backdrop: "static",
    keyboard: !1
});

$(".btnAsyiap").click(function() {
    $("#ModalInsight").modal("hide");
    $("#ModalEkspektasi").modal("toggle");
});

$('#ModalEkspektasi').on('hidden.bs.modal', function () {
    $("#ModalOpenReq").modal("toggle");    
});

$(".btnSudahPernah").click(function(){
    $('#ModalEkspektasi').modal("hide");
});

$(".btnFinish").click(function(){
    $("#ModalOpenReq").modal("hide");    
});

$(".btnMantap").click(function(){
    var email = $(".et_email").val();
    var expect = $(".ta_ekspektasi").val();

    var words = $. trim(expect). split(" ");
    if(
        expect == ""
        ||
        email == ""
        ){
        alert("Masih kosong tuh kak inputan [email atau ekspektasi] nya :)");
    }else if(words.length < 5){
        alert("Lebih panjang ya kak Ekspektasi dan Sarannya [minimal 5 kata], biar aku tau maksud kakak :)");
    }else{
        // Hit ajax to store data to database
        $.ajax({
            url: "connection/storeData.php",
            data: {"email": email, "expect": expect, "action":"store_expectation"},
            type: "POST",
            success: function(res) {
                $(".btnSudahPernah").click();
            }
        });
    }
});

/* Circular Menu */
$('.trigger').on('click', function(){
    $('.cn-wrapper li').toggleClass('slideout');
});

// $('.trigger').on('blur', function(){
//     $('.trigger').click();
// });

