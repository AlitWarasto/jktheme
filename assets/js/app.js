$.fn.extend({
    replaceTag: function (newTagObj, keepProps) {
        // "return" suggested by ColeLawrence
        return this.each(function () {
            jQuery.replaceTag(this, newTagObj, keepProps);
        });
    },
});
$(document).ready(function () {
    $("iframe").on("contextmenu", function (e) {
        e.preventDefault();
    });
    if ($(window).width() > 980) {
        $("marquee").replaceTag("<div>", true);
    }
    $(".box_item_ads_popup div.close-button").on("click", function (e) {
        $(this).parent().remove();
        return false;
    });
    setTimeout(function () {
        $(".box_item_ads_popup div.close-button").click();
        clearInterval(auto_close_tampilan);
    }, 6000);
    var counter = 5;
    var auto_close_tampilan = setInterval(function () {
        $("#counter_tampilan_tambahan").html(counter);
        --counter;
    }, 1000);
});

document.onkeydown = function (e) {
    e = e || window.event;
    if (e.keyCode == 123 || e.keyCode == 18) {
        return false;
    }
};

window.addEventListener("keydown", function (e) {
    if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {
        e.preventDefault();
    }
});
document.keypress = function (e) {
    if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {
    }
    return false;
};

function mousedwn(e) {
    try {
        if (event.button == 2 || event.button == 3) return false;
    } catch (e) {
        if (e.which == 3) return false;
    }
}
document.oncontextmenu = function () {
    return false;
};
document.ondragstart = function () {
    return false;
};
document.onmousedown = mousedwn;