
function nextInfo(divhide,divshow) {
    $('#'+divhide).toggleClass("hide");
    $('#'+divshow).toggleClass("hide");
}

function prevInfo(divhide,divshow) {
    $('#'+divhide).toggleClass("hide");
    $('#'+divshow).toggleClass("hide");
}

//------Uploading zip and jet animation section Below------

 var loader = new ZipLoader('Pre-Pose.zip');
debugger;
// // THIS SETS UP THE INITIAL ARRAY VARIABLE
// // Array of images to swap between
 var images = [];

// // THIS LOOKS AT THE DATA ATTRIBUTES IN THE load element AND GENERATES 
// // THE IMAGE NAMES BASED ON A GIVEN RANGE 
// // THEN PUSHES THEM INTO THE ARRAY
 for (i = 20; i <= $('#load').attr('data-images'); i++) {
     if(i<10)
         images.push(loader.loadImage('Pre-Pose.zip://1_0000' + i + '.png'));
     else if(i<100)
        images.push(loader.loadImage('Pre-Pose.zip://1_000' + i + '.png'));
        else
        images.push(loader.loadImage('Pre-Pose.zip://1_00' + i + '.png'));
 }


// // THIS TAKES EACH IMAGE NAME FROM THE ARRAY AND CREATES A CLUSTER OF
// // PRELOADED HIDDEN IMAGES ON THE PAGE USING JQUERY
 $(images).each(function () {
     $('<img />')[0].src = this;
 });


  var totalImages = images.length;

  var pageHeight = $(document).height() - $(window).height();

// // Work out how often we should change image (i.e. how far we scroll between changes)
 var scrollInterval = Math.floor(pageHeight / totalImages);

 var viewport = $(window),
     slowdown;
 viewport.on('scroll', function () {
     // Which one should we show at this scroll point?
     i = Math.floor($(this).scrollTop() / scrollInterval);

     // Show the corresponding image from the array
     $('img').attr('src', images[i]);
     //$('b').text('Frame: ' + i);

 });