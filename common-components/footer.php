<footer class="site-footer hide">

    <section class="pre-footer light-colors">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1>Aviation App</h1>
                    <h4>iOS & Android App Coming Soon!</h4>
                    <p>Get connected with us to get exclusive offers, and a private jet just a few taps away.</p>
                </div>
                <div class="col-lg-5">

                </div>
                <div class="col-lg-3">
                    <a><svg class="app-store-footer"><use xlink:href="#app-store-footer"></use></svg></a>
                    <a><svg class="play-store-icon-footer"><use xlink:href="#play-store-icon-footer"></use></svg></a>
                </div>
            </div>
        </div>
    </section>
    <section class="post-footer light-colors">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <p>inquiry@privatejetcoin.io</p>
                    <p>3422 Old Capital Trail<br />
                        Suite 700<br />
                        Wilmington, DE 19808</p>
                    <img src="assets/images/logo-header.png" width="73px">
                </div>
                <div class="col-lg-6 text-center">
                    <div class="input-group">
                        <input id="txtsubsemail" type="email" class="form-control" placeholder="please enter email address">
                        <button id="subs_btn" class="btn btn-primary" type="button">Click Here To Submit - Join The Community!</button>
                    </div>
                    <ul class="list-inline text-center">
                        <li><a target="_blank" href="https://twitter.com/PrivateJetCoin"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/privatejetcoin/"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/privatejetcoin/"><svg class="icon icon-linkedin2"><use xlink:href="#icon-linkedin2"></use></svg></a></li>
                        <li><a target="_blank" href="mailto:inquiry@privatejetcoin.io"><svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg></a></li>
                        <li><a target="_blank" href="https://t.me/privatejetcoin"><svg class="icon icon-envelop"><use xlink:href="#telegram-icon"></use></svg></a></li>
                        <li><a target="_blank" href="#"><svg class="icon icon-bitcoin"><use xlink:href="#icon-bitcoin"></use></svg></a></li>
                    </ul>
                    <p>© 2018 Private Jet Coin LLC - All Rights Reserved</p>
                </div>
                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li><a href="mailto:inquiry@privatejetcoin.io">Contact Us</a></li>
                        <li><a href="https://private-jet-coin.github.io/docs/privacy-policy" target="_blank">Privacy Policy</a></li>
                        <li><a type="button" data-toggle="modal" data-target="#myModal" href="#">Terms & Conditions</a></li>
                    </ul>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Terms & Conditions</h4>
                                </div>
                                <div class="modal-body">
                                    <p>By accessing this Site, you agree that your access to, and use of the Site will be subject to the conditions set forth in this legal notice and all applicable laws. If you do not agree and accept, without limitation or qualification, these terms, please exit the Site.</p>
                                    <p>This Site and all of its content, including, but not limited to, all text, graphics, logos, button icons, images, software, and the presentation contained herein, belongs to PrivateJetCoin LLC or its third party licensors. The design and layout of this Site (the look and feel of the Site) is the exclusive property of PrivateJetCoin LLC and may not be used, copied, distributed or displayed in any way. All trademarks, logos, or service marks, whether registered or unregistered, are proprietary to PrivateJetCoin LLC or its third party licensors. This Site may contain proprietary notices and copyright information, the terms of which must be observed and followed.</p>
                                    <p>PrivateJetCoin LLC grants you a limited license to make personal use of the Site. Except as noted, you are not conveyed any right or license by implication, estoppel, or otherwise, to use, reproduce, transmit, perform, publish, license, modify, rewrite, create derivative works from, transfer or sell any of the content or information contained within this Site, including but not limited to, any of PrivateJetCoin LLC’s intellectual property.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="language-icon-added">
                        <img src="assets/images/language-icon.png">
                        <span>English</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>
<!-- <script async src="assets/js/scripts.js"></script> -->
<script src="assets/js/scripts.js"></script>
<!-- <script async src="src-assets/javascripts/components/home.js"></script> -->
<script src="src-assets/javascripts/components/home.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
<script src='src-assets/javascripts/components/counter.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="assets/js/slick.js"></script>

<script>
    $(document).ready(function() {
       var screenSize=window.innerWidth<=1200?'small':'large';
       var slickCarousel=$('.carousel');
       slickCarousel.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow:'.left-span',
            nextArrow:'.right-span',
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
            ]
        });
        slickCarousel.on('breakpoint',function(event, slick, breakpoint){
            if(breakpoint===1200){
                screenSize='small';
            } else {
                screenSize='large';
            }
        });
        slickCarousel.on('beforeChange',function(event, slick, slide){
           if(screenSize==='small'){
               const currentSelected = $('.mobile-display-line');
               const currentId = currentSelected.attr('id');
              const currentIdNumber =currentId.replace('slider-item-','');
              $('.mobile-display-line').removeClass('mobile-display-line');
              $('#slider-item-'+((slide+1)%8)).addClass('mobile-display-line');
              
           }
           else if(screenSize==='large'){
               debugger;
               if(slide===0){
                $('#slider-item-0').addClass('inactive-quarter');
                $('#slider-item-1').addClass('inactive-quarter');
                $('#slider-item-2').addClass('inactive-quarter');
                $('#slider-item-3').addClass('inactive-quarter');
                $('#slider-item-4').removeClass('inactive-quarter');
                $('#slider-item-5').removeClass('inactive-quarter');
                $('#slider-item-6').removeClass('inactive-quarter');
                $('#slider-item-7').removeClass('inactive-quarter');
               }
                else if(slide===4){
                    $('#slider-item-0').removeClass('inactive-quarter');
                $('#slider-item-1').removeClass('inactive-quarter');
                $('#slider-item-2').removeClass('inactive-quarter');
                $('#slider-item-3').removeClass('inactive-quarter');
                $('#slider-item-4').addClass('inactive-quarter');
                $('#slider-item-5').addClass('inactive-quarter');
                $('#slider-item-6').addClass('inactive-quarter');
                $('#slider-item-7').addClass('inactive-quarter');
                }
               const currentSelected = $('.mobile-display-line');
               const currentId = currentSelected.attr('id');
              const currentIdNumber =currentId.replace('slider-item-','');
              $('.mobile-display-line').removeClass('mobile-display-line');
              $('#slider-item-'+((slide+1)%8)).addClass('mobile-display-line');
              
           }
            
        });
        
    });
</script>

</body>
</html>
