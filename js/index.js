var doing = 0,present = 0,no = 0,previous = 0,pre = 0,pond = 0;
document.getElementById('a' + present).style.color = 'rgb(10,10,10)';
$('.menu-toggle').click(function() {
    $('.site-nav').toggleClass('site-nav--open');
    $(this).toggleClass('open');
    pond = 0;
});
$(document).click(function() {
    if (pond == 1) {
        pond == 0;
        $('.site-nav').toggleClass('site-nav--open');
        $(this).toggleClass('open');
    }
});
function sd() {
    setTimeout(function() {
        if (doing == 0 && no == 0) {
            present = present % 8;
            doing = 1;
            if (present == 7) {
                document.getElementById(previous).style.visibility = 'hidden';
                document.getElementById(previous).style.zIndex = '0';
            }
            if (present == 5) {
                document.getElementById('b' + pre).style.visibility = 'hidden';
                document.getElementById('b' + pre).style.zIndex = '0';
            }
            document.getElementById('a' + present).style.color = '';
            var f = document.getElementById('p' + present);
            var d = document.getElementById('p' + (present + 1) % 8);
            d.style.zIndex = '0';
            d.style.visibility = 'visible';
            f.className += " animated slideOutUp";
            setTimeout(function() {
                d.style.zIndex = '1';
                f.style.zIndex = '0';
                f.style.visibility = 'hidden';
                f.className = 'pages';
                doing = 0;
            }, 1500);
            present++;
            present = present % 8;
            document.getElementById('a' + present).style.color = 'rgb(10,10,10)';
        }
    }, 10);
}
function dd() {
    setTimeout(function() {
        if (doing == 0) {
            present = present % 8;
            doing = 1;
            if (present == 7) {
                document.getElementById(previous).style.visibility = 'hidden';
                document.getElementById(previous).style.zIndex = '0';
            }
            if (present == 5) {
                document.getElementById('b' + pre).style.visibility = 'hidden';
                document.getElementById('b' + pre).style.zIndex = '0';
            }
            document.getElementById('a' + present).style.color = '';
            var f = document.getElementById('p' + present);
            var d = document.getElementById('p' + (present + 1) % 8);
            d.style.zIndex = '0';
            d.style.visibility = 'visible';
            f.className += " animated slideOutUp";
            setTimeout(function() {
                d.style.zIndex = '1';
                f.style.zIndex = '0';
                f.style.visibility = 'hidden';
                f.className = 'pages';
                doing = 0;
            }, 1500);
            present++;
            present = present % 8;
            document.getElementById('a' + present).style.color = 'rgb(10,10,10)';
        }
    }, 10);
}
function nonnn() {
    no = 1;
    console.log('no');
}
function yes() {
    no = 0;
    console.log('yes');
}
function go(i) {
    if (doing == 0 && i != present) {
        present = present % 8;
        if (present == 7) {
            document.getElementById(previous).style.visibility = 'hidden';
            document.getElementById(previous).style.zIndex = '0';
        }
        if (present == 5) {
            document.getElementById('b' + pre).style.visibility = 'hidden';
            document.getElementById('b' + pre).style.zIndex = '0';
        }
        doing = 1;
        document.getElementById('a' + present).style.color = '';
        var f = document.getElementById('p' + present);
        var d = document.getElementById('p' + i % 8);
        d.style.zIndex = '0';
        d.style.visibility = 'visible';
        f.className += " animated slideOutUp";
        setTimeout(function() {
            f.style.zIndex = '0';
            d.style.zIndex = '1';
            f.style.visibility = 'hidden';
            d.style.visibility = 'visible';
            f.className = 'pages';
            doing = 0;
            present = i;
            document.getElementById('a' + present).style.color = 'rgb(10,10,10)';
        }, 1500);
    }
}
function su() {
    console.log('su');
    setTimeout(function() {
        if (doing == 0 && no == 0) {
            present = present % 8;
            if (present == 7) {
                document.getElementById(previous).style.visibility = 'hidden';
                document.getElementById(previous).style.zIndex = '0';
            }
            if (present == 5) {
                document.getElementById('b' + pre).style.visibility = 'hidden';
                document.getElementById('b' + pre).style.zIndex = '0';
            }
            doing = 1;
            document.getElementById('a' + present).style.color = '';
            var f = document.getElementById('p' + present),
                d = document.getElementById('p' + (present + 7) % 8);
            f.style.zIndex = '0';
            d.style.zIndex = '1';
            d.style.visibility = 'visible';
            d.className += " animated slideInDown";
            setTimeout(function() {
                d.style.zIndex = '1';
                f.style.visibility = 'hidden';
                f.className = 'pages';
                doing = 0;
            }, 1000);
            present--;
            if (present == -1) {
                present = 7;
            }
            document.getElementById('a' + present).style.color = 'rgb(10,10,10)';
        }
    }, 10);
}
function uu() {
    setTimeout(function() {
        if (doing == 0 && no == 0) {
            present = present % 8;
            if (present == 7) {
                document.getElementById(previous).style.visibility = 'hidden';
                document.getElementById(previous).style.zIndex = '0';
            }
            if (present == 5) {
                document.getElementById('b' + pre).style.visibility = 'hidden';
                document.getElementById('b' + pre).style.zIndex = '0';
            }
            doing = 1;
            document.getElementById('a' + present).style.color = '';
            var f = document.getElementById('p' + present),
                d = document.getElementById('p' + (present + 7) % 8);
            f.style.zIndex = '0';
            d.style.zIndex = '1';
            d.style.visibility = 'visible';
            d.className += " animated slideInDown";
            setTimeout(function() {
                d.style.zIndex = '1';
                f.style.visibility = 'hidden';
                f.className = 'pages';
                doing = 0;
            }, 1000);
            present--;
            if (present == -1) {
                present = 7;
            }
            document.getElementById('a' + present).style.color = 'rgb(10,10,10)';

        }
    }, 10);
}
function club() {
    document.getElementById(previous).style.visibility = 'hidden';
    document.getElementById(previous).style.zIndex = '0';
    previous = document.getElementById('abbu').value;
    document.getElementById(previous).style.visibility = 'visible';
    document.getElementById(previous).style.zIndex = '1';
}
function cs() {
    document.getElementById('b' + pre).style.visibility = 'hidden';
    document.getElementById('b' + pre).style.zIndex = '0';
    pre = document.getElementById('abba').value;
    document.getElementById('b' + pre).style.visibility = 'visible';
    document.getElementById('b' + pre).style.zIndex = '1';
}
function mess() {
    var n = document.getElementById('abbba').value;
    messing(n);
}
function messing(n) {
    if (n == 7) {
        var ddd = new Date();
        n = ddd.getDay();
    }
    var a;
    if (n == 0) {
        a = "Masala Dosa with Sambhar,Nariyal Chutney- Aloo Tamater Gravy,  Chana dal , Aloo, Mix Veg & Paneer Paratha with Imli Chutney ,Lassi - Aloo Soyabeen, Mix Dal Finger Chips  Extra: Chicken Biryani    ";
    } else if (n == 1) {
        a = "Burger/ Pav Bhaji Extra :Cheese-Kadhi Tadka, Aloo Achari Roohafza Extra :Afgani Paneer - Veg Kofta, Arhar Dal";
    } else if (n == 2) {
        a = "Paratha: Aloo, Onion & Mix Veg with Imli Chutni -Mix Veg, Arhar Palak dal ,Chhach -Mater Paneer, Masoor Dal, Plain Paratha ";
    } else if (n == 3) {
        a = "Matar Kachauri With Aloo Sabji  -Kaddu, Razma, Boondi Raita, Nimboo Pani Extra:Egg Curry-  Bhindi Fry,Arher Dal Extra: Chicken Butter Masala/ Chicken Roasted";
    } else if (n == 4) {
        a = "Idli / Wada (2pcs.),  Sambhar / Uttapam With Nariyal Chutney.-Aloo Baigan Dry/Aloo Cabbage Mater, Moong Dal, Lassi Extra : Paneer Butter Masala- Chhole, Bhatoora/Kulche Plain Roti, Custurd / Sewai";
    } else if (n == 5) {
        a = "Veg Cutlet , Green  Chutney- Lauki Masala, Arhar Dal , Chhach Extra: Paneer Jhal Freji- Aloo Mater Tamatar Gravy, Plain Puri, Palak Puri, Lemon Rice, Lal Masoor Dal, Kheer";
    } else if (n == 6) {
        a = "Jalebi With Curd , Poha Extra : Namkeen-Aloo Parwal Dry, Dal Makhani  Aam Pana Extra :Veg Biryani-Paneer Makhana, Arhar dal, Nan Roti,Tandoori Roti Jeera Rice,Garlic Naan Sweet: Gulab Jamun,";
    }
    var bbbb = a.split('-');
    document.getElementById('bbbb').innerHTML = "<div style='font-family:rio;font-size:2vh; background-color:rgba(0,0,0,0.3);padding:1vh;'>Mess menu</div>Breakfast : " + bbbb[0] + "<br><br><hr>Lunch : " + bbbb[1] + "<br><br><hr>Dinner:" + bbbb[2];
}
window.addEventListener('wheel', function(e) {
    if (e.deltaY < 0) {
        su();
    }
    if (e.deltaY > 0) {
        sd();
    }
});
var last = null;
$(document).ready(function() {
    messing(7);
    $("#flip").click(function() {
        if (last != null && last != $("#panel")) {
            last.slideToggle("slow");
        }
        last = $("#panel");
        $("#panel").slideToggle("slow");
    });
    $("#fli").click(function() {
        if (last != null && last != $("#pane")) {
            last.slideToggle("slow");
        }
        last = $("#pane");
        $("#pane").slideToggle("slow");
    });
    $("#fl").click(function() {
        if (last != null && last != $("#pan")) {
            last.slideToggle("slow");
        }
        last = $("#pan");
        $("#pan").slideToggle("slow");
    });

    $("#flii").click(function() {
        if (last != null && last != $("#pann")) {
            last.slideToggle("slow");
        }
        last = $("#pann");
        $("#pann").slideToggle("slow");
    });
    $("#fliii").click(function() {
        if (last != null && last != $("#pannn")) {
            last.slideToggle("slow");
        }
        last = $("#pannn");
        $("#pannn").slideToggle("slow");
    });
    $("#fliiii").click(function() {
        if (last != null && last != $("#pannnn")) {
            last.slideToggle("slow");
        }
        last = $("#pannnn");
        $("#pannnn").slideToggle("slow");
    });
    $("#antirag").click(function() {
        $("#antpdf").slideToggle("slow");
    });
    $("#guidelines").click(function() {
        $("#guidepdf").slideToggle("slow");
    });
});
var lastY;
$(document).on("pagecreate", function(event) {
    $(window).on("orientationchange", function(event) {
        alert("Orientation changed to: " + event.orientation);
    });
});
var img = new Image();
img.src = 'images/other/download.png';
var CanvasXSize = 800;
var CanvasYSize = 200;
var speed = 30;
var scale = 1.05;
var y = -4.5;
var dx = 0.75;
var imgW;
var imgH;
var x = 0;
var clearX;
var clearY;
var ctx, cty;
img.onload = function() {
    imgW = img.width * scale;
    imgH = img.height * scale;
    if (imgW > CanvasXSize) {
        x = CanvasXSize - imgW;
    }
    if (imgW > CanvasXSize) {
        clearX = imgW;
    } else {
        clearX = CanvasXSize;
    }
    if (imgH > CanvasYSize) {
        clearY = imgH;
    } else {
        clearY = CanvasYSize;
    }
    ctx = document.getElementById('canvas').getContext('2d');
    cty = document.getElementById('canva').getContext('2d');

    return setInterval(draw, speed);
}
function draw() {
    ctx.clearRect(0, 0, clearX, clearY);
    cty.clearRect(0, 0, clearX, clearY);
    if (imgW <= CanvasXSize) {
        if (x > (CanvasXSize)) {
            x = 0;
        }
        if (x > (CanvasXSize - imgW)) {
            ctx.drawImage(img, x - CanvasXSize + 1, y, imgW, imgH);
            cty.drawImage(img, x - CanvasXSize + 1, y, imgW, imgH);
        }
    } else {
        if (x > (CanvasXSize)) {
            x = CanvasXSize - imgW;
        }
        if (x > (CanvasXSize - imgW)) {
            ctx.drawImage(img, x - imgW + 1, y, imgW, imgH);
            cty.drawImage(img, x - imgW + 1, y, imgW, imgH);
        }
    }
    ctx.drawImage(img, x, y, imgW, imgH);
    cty.drawImage(img, x, y, imgW, imgH);
    x += dx;
}
$(document).keydown(function(e) {
    switch (e.which) {
        case 37:
        case 38:
            uu();
            break;

        case 39:
        case 40:
            dd();
            break;
        default:
            return;
    }
    e.preventDefault();
});
