var images = [];
var pploader = new ZipLoader('Pre-Pose.zip');
for (i = 0; i <= 104; i++) { //getting loop ending value from html element "$('#load').attr('data-images')"
    if(i<10)
        images.push(pploader.loadImage('Pre-Pose.zip://1_0000' + i + '.png'));
    else if(i<100)
        images.push(pploader.loadImage('Pre-Pose.zip://1_000' + i + '.png'));
    else
        images.push(pploader.loadImage('Pre-Pose.zip://1_00' + i + '.png'));
}

pploader = new ZipLoader('Pose.zip');
for (i = 0; i <= 149; i++) {
    if(i<10)
        images.push(pploader.loadImage('Pose.zip://2_0000' + i + '.png'));
    else if(i<100)
        images.push(pploader.loadImage('Pose.zip://2_000' + i + '.png'));
    else
        images.push(pploader.loadImage('Pose.zip://2_00' + i + '.png'));
}

var pploader = new ZipLoader('Landing.zip');
for (i = 0; i <= 149; i++) {
    if(i<10)
        images.push(pploader.loadImage('Landing.zip://3_0000' + i + '.png'));
    else if(i<100)
        images.push(pploader.loadImage('Landing.zip://3_000' + i + '.png'));
    else
        images.push(pploader.loadImage('Landing.zip://3_00' + i + '.png'));
}
$( document ).ready(function() {
    
    $('header').removeClass('hide');
    $('main').removeClass('hide');
    $('footer').removeClass('hide');
    $('#spinner').addClass('hide');

    $(window).scrollTop(0);
    
    $(images).each(function () {
          $('<img />')[0].src = this;
      });
      var icounter = 0;
      function nextImage() {
              icounter++;
              $('#jet-animate_prepose').attr('src', images[icounter]);
              if(icounter<104)
                  setTimeout(nextImage, 15);
      }
      setTimeout(nextImage, 15);
      $('#jet-animate_prepose').attr('src', images[icounter]);

});


var delay = false;

$(document).on('mousewheel DOMMouseScroll', function(event) {
    event.preventDefault();
    if(delay) return;
    delay = true;
    setTimeout(function(){delay = false},500)

    var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;

    var a= document.getElementsByTagName('section');
    if(wd < 0) {
        for(var i = 0 ; i < a.length ; i++) {
        var t = a[i].getClientRects()[0].top;
        if(t >= 40) break;
        }
    }
    else {
        for(var i = a.length-1 ; i >= 0 ; i--) {
        var t = a[i].getClientRects()[0].top;
        if(t < -20) break;
        }
    }
    if(i >= 0 && i < a.length) {
        $('html,body').animate({
        scrollTop: a[i].offsetTop
        }, 500);
    }
    
    clearInterval(scrollTimeout);
    var scrollTimeout = setTimeout(function() {
        
        if(i >= 3) 
            $('#jet-animate_landing').addClass('hide');
        if(i < 3) 
            $('#jet-animate_landing').removeClass('hide');
        
        var mastHeadTimeOut;
        var pjcServiceTimeOut;
        var pjcEcoSysTimeOut;
        
        if(a[i].id == "mast-head") {
            var icounter = 0;
            clearTimeout(pjcServiceTimeOut);
            clearTimeout(pjcEcoSysTimeOut);

            $('#jet-animate_prepose').removeClass('hide');
            $('#jet-animate_pose').addClass('hide');
            $('#jet-animate_landing').addClass('hide');
            
            
            function nextImage() {
                    icounter++;
                    $('#jet-animate_prepose').attr('src', images[icounter]);
                    if(icounter<104)
                        mastHeadTimeOut = setTimeout(nextImage, 15);
            }
            setTimeout(nextImage, 15);
            $('#jet-animate_prepose').attr('src', images[icounter]);
        }
        if(a[i].id == "pjc-service")
        {   
            
            var icounter = 105;
            clearTimeout(mastHeadTimeOut);
            clearTimeout(pjcEcoSysTimeOut);

            $('#jet-animate_prepose').addClass('hide');
            $('#jet-animate_pose').removeClass('hide');
            $('#jet-animate_landing').addClass('hide');

            function nextImage() {
                icounter++;
                $('#jet-animate_pose').attr('src', images[icounter]);
                if(icounter<=255)
                    pjcServiceTimeOut = setTimeout(nextImage, 15);
            }
            setTimeout(nextImage, 15);
            $('#jet-animate_pose').attr('src', images[icounter]);
        }
        if(a[i].id == "pjc-ecosystem")
        {
            var icounter = 256;
            clearTimeout(mastHeadTimeOut);
            clearTimeout(pjcServiceTimeOut);
            
            $('#jet-animate_prepose').addClass('hide');
            $('#jet-animate_pose').addClass('hide');
            $('#jet-animate_landing').removeClass('hide');

            function nextImage() {
                icounter++;
                $('#jet-animate_landing').attr('src', images[icounter]);
                if(icounter<=404)
                    pjcEcoSysTimeOut = setTimeout(nextImage, 15);
            }
            setTimeout(nextImage, 15);
            $('#jet-animate_landing').attr('src', images[icounter]);
        }
    }, 250);
});  
function nextInfo(divhide,divshow) {
    $('#'+divhide).toggleClass("hide");
    $('#'+divshow).toggleClass("hide");
}

function prevInfo(divhide,divshow) {
    $('#'+divhide).toggleClass("hide");
    $('#'+divshow).toggleClass("hide");
}
