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
    console.log('document ready....');
    
    $('header').removeClass('hide');
    $('main').removeClass('hide');
    $('footer').removeClass('hide');
    $('#spinner').addClass('hide');

    $(window).scrollTop(0);
    // var pploader = new ZipLoader('Pre-Pose.zip');
    // for (i = 0; i <= 104; i++) { //getting loop ending value from html element "$('#load').attr('data-images')"
    //     if(i<10)
    //         images.push(pploader.loadImage('Pre-Pose.zip://1_0000' + i + '.png'));
    //     else if(i<100)
    //         images.push(pploader.loadImage('Pre-Pose.zip://1_000' + i + '.png'));
    //     else
    //         images.push(pploader.loadImage('Pre-Pose.zip://1_00' + i + '.png'));
    // }

    // pploader = new ZipLoader('Pose.zip');
    // for (i = 0; i <= 149; i++) {
    //     if(i<10)
    //         images.push(pploader.loadImage('Pose.zip://2_0000' + i + '.png'));
    //     else if(i<100)
    //         images.push(pploader.loadImage('Pose.zip://2_000' + i + '.png'));
    //     else
    //         images.push(pploader.loadImage('Pose.zip://2_00' + i + '.png'));
    // }

    // var pploader = new ZipLoader('Landing.zip');
    // for (i = 0; i <= 149; i++) {
    //     if(i<10)
    //         images.push(pploader.loadImage('Landing.zip://3_0000' + i + '.png'));
    //     else if(i<100)
    //         images.push(pploader.loadImage('Landing.zip://3_000' + i + '.png'));
    //     else
    //         images.push(pploader.loadImage('Landing.zip://3_00' + i + '.png'));
    // }
    $(images).each(function () {
          $('<img />')[0].src = this;
      });
      var icounter = 0;
      function nextImage() {
              icounter++;
              $('#jet-animate').attr('src', images[icounter]);
              if(icounter<104)
                  setTimeout(nextImage, 15);
      }
      setTimeout(nextImage, 15);
      $('#jet-animate').attr('src', images[icounter]);

        //getting current section
    //     var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;

    //     var a= document.getElementsByTagName('section');
    //     if(wd < 0) {
    //         for(var i = 0 ; i < a.length ; i++) {
    //         var t = a[i].getClientRects()[0].top;
    //         if(t >= 40) break;
    //         }
    //     }
    //     else {
    //         for(var i = a.length-1 ; i >= 0 ; i--) {
    //         var t = a[i].getClientRects()[0].top;
    //         if(t < -20) break;
    //         }
    //     }
    //     if(i >=0 && a[i].id == "mast-head")
    //     {
    //         var icounter = 0;
    //         function nextImage() {
    //                 icounter++;
    //                 $('#jet-animate').attr('src', images[icounter]);
    //                 if(icounter<104)
    //                     setTimeout(nextImage, 15);
    //         }
    //         setTimeout(nextImage, 15);
    //         $('#jet-animate').attr('src', images[icounter]);
    //     }
    //     if(i >=0 && a[1].id == "pjc-service")
    // {
    //     var icounter = 105;
    //     function nextImage() {
    //         icounter++;
    //         $('#jet-animate').attr('src', images[icounter]);
    //         if(icounter<=255)
    //             setTimeout(nextImage, 15);
    //    }
    //    setTimeout(nextImage, 15);
    //    $('#jet-animate').attr('src', images[icounter]);
    // }
    // if(i >=0 && a[1].id == "pjc-ecosystem")
    // {
    //     var icounter = 105;
    //     function nextImage() {
    //         icounter++;
    //         $('#jet-animate').attr('src', images[icounter]);
    //         if(icounter<=404)
    //             setTimeout(nextImage, 15);
    //    }
    //    setTimeout(nextImage, 15);
    //    $('#jet-animate').attr('src', images[icounter]);
    // }

});


var delay = false;

/*$(document).on('mousewheel DOMMouseScroll', function(event) {
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
    
    setTimeout(() => {
        $('#jet-animate').attr('src', '');
        if(a[i].id == "pjc-service")
        {   
            var icounter = 0;
            function nextImage() {
                icounter++;
                $('#jet-animate').attr('src', images[icounter]);
                if(icounter<=104)
                    setTimeout(nextImage, 15);
        }
        setTimeout(nextImage, 15);
        $('#jet-animate').attr('src', images[icounter]);
        }
        if(a[i].id == "pjc-service")
        {   
            
            var icounter = 105;
            function nextImage() {
                icounter++;
                $('#jet-animate').attr('src', images[icounter]);
                if(icounter<=255)
                    setTimeout(nextImage, 15);
        }
        setTimeout(nextImage, 15);
        $('#jet-animate').attr('src', images[icounter]);
        }
        if(a[i].id == "pjc-ecosystem")
        {
            var icounter = 256;
            function nextImage() {
                icounter++;
                $('#jet-animate').attr('src', images[icounter]);
                if(icounter<=404)
                    setTimeout(nextImage, 15);
        }
        setTimeout(nextImage, 15);
        $('#jet-animate').attr('src', images[icounter]);
        }
    }, 250);
  }
});*/

$(document).on('mousewheel DOMMouseScroll', function(event) {
    event.preventDefault();
    console.log('inside mousewheel.....');
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
        console.log('scroll ended....');
        console.log(wd);

        if(i >= 3) 
            $('#jet-animate').addClass('hide');
        if(i < 3) 
            $('#jet-animate').removeClass('hide');
        
        var mastHeadTimeOut;
        var pjcServiceTimeOut;
        var pjcEcoSysTimeOut;
        
        $('#jet-animate').attr('src', '');
        if(a[i].id == "mast-head") {
            var icounter = 0;
            clearTimeout(pjcServiceTimeOut);
            clearTimeout(pjcEcoSysTimeOut);
            
            function nextImage() {
                    icounter++;
                    $('#jet-animate').attr('src', images[icounter]);
                    if(icounter<104)
                        mastHeadTimeOut = setTimeout(nextImage, 15);
            }
            setTimeout(nextImage, 15);
            $('#jet-animate').attr('src', images[icounter]);
        }
        if(a[i].id == "pjc-service")
        {   
            
            var icounter = 105;
            clearTimeout(mastHeadTimeOut);
            clearTimeout(pjcEcoSysTimeOut);
            function nextImage() {
                icounter++;
                $('#jet-animate').attr('src', images[icounter]);
                if(icounter<=255)
                    pjcServiceTimeOut = setTimeout(nextImage, 15);
            }
            setTimeout(nextImage, 15);
            $('#jet-animate').attr('src', images[icounter]);
        }
        if(a[i].id == "pjc-ecosystem")
        {
            var icounter = 256;
            clearTimeout(mastHeadTimeOut);
            clearTimeout(pjcServiceTimeOut);
            
            function nextImage() {
                icounter++;
                $('#jet-animate').attr('src', images[icounter]);
                if(icounter<=404)
                    pjcEcoSysTimeOut = setTimeout(nextImage, 15);
            }
            setTimeout(nextImage, 15);
            $('#jet-animate').attr('src', images[icounter]);
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

//------Uploading zip and jet animation section Below------

//   var loader = new ZipLoader('Pre-Pose.zip');
  // THIS SETS UP THE INITIAL ARRAY VARIABLE
  // Array of images to swap between
//   var images = [];
  // THIS LOOKS AT THE DATA ATTRIBUTES IN THE load element AND GENERATES 
  // THE IMAGE NAMES BASED ON A GIVEN RANGE 
  // THEN PUSHES THEM INTO THE ARRAY
//   for (i = 0; i <= $('#load').attr('data-images'); i++) {
    //   debugger;
    //  if(i<10)
        //  images.push(loader.loadImage('Pre-Pose.zip://1_0000' + i + '.png'));
    //  else if(i<100)
        //  images.push(loader.loadImage('Pre-Pose.zip://1_000' + i + '.png'));
    //  else
        //  images.push(loader.loadImage('Pre-Pose.zip://1_00' + i + '.png'));
//   }
  // THIS TAKES EACH IMAGE NAME FROM THE ARRAY AND CREATES A CLUSTER OF
  // PRELOADED HIDDEN IMAGES ON THE PAGE USING JQUERY
//   $(images).each(function () {
    //   $('<img />')[0].src = this;
//   });
//   var totalImages = images.length;
//   var pageHeight = $(document).height() - $(window).height();
  // Work out how often we should change image (i.e. how far we scroll between changes)
//   var scrollInterval = Math.floor(pageHeight / totalImages);
//   var viewport = $(window),
    //   slowdown;
//   viewport.on('scroll', function () {
      // Which one should we show at this scroll point?
    //   i = Math.floor($(this).scrollTop() / scrollInterval);
      // Show the corresponding image from the array
    //   $('#jet-animate').attr('src', images[i]);
      //$('b').text('Frame: ' + i);
//   });