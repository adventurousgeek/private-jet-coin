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
                    <p>inquiry@privatejetcoin.io<br />
                        +1 (415) XXX XX XX
                     </p>
                    <p>3422 Old Capital Trail,<br />
                        Suite 700, Wilmington,<br />
                        DE 19808</p>
                    <img src="assets/images/logo-footer.png">
                </div>
                <div class="col-lg-6 text-center">
                    <div class="input-group">
                        <input id="txtsubsemail" type="email" class="form-control" placeholder="email@company.com">
                        <button id="subs_btn" class="btn btn-primary" type="button">Subscribe for Newsletter</button>
                    </div>
                    <ul class="list-inline text-center">
                        <li><a href="#"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a></li>
                        <li><a href="#"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a></li>
                        <li><a href="#"><svg class="icon icon-linkedin2"><use xlink:href="#icon-linkedin2"></use></svg></a></li>
                        <li><a href="#"><svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg></a></li>
                        <li><a href="#"><svg class="icon icon-bitcoin"><use xlink:href="#icon-bitcoin"></use></svg></a></li>
                        <li><a href="#"><svg class="icon icon-reddit"><use xlink:href="#icon-reddit"></use></svg></a></li>
                    </ul>
                    <p>© 2018 Private Jet Coin LLC - All Rights Reserved</p>
                </div>
                <div class="col-lg-3">
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
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
<script src="assets/js/spin.js"></script>
<script type="text/javascript">
    var opts = {
        lines: 13, // The number of lines to draw
        length: 38, // The length of each line
        width: 17, // The line thickness
        radius: 45, // The radius of the inner circle
        scale: 1, // Scales overall size of the spinner
        corners: 1, // Corner roundness (0..1)
        color: '#000000', // CSS color or array of colors
        fadeColor: 'transparent', // CSS color or array of colors
        speed: 1, // Rounds per second
        rotate: 0, // The rotation offset
        animation: 'spinner-line-fade-quick', // The CSS animation name for the lines
        direction: 1, // 1: clockwise, -1: counterclockwise
        zIndex: 2e9, // The z-index (defaults to 2000000000)
        className: 'spinner', // The CSS class to assign to the spinner
        top: '50%', // Top position relative to parent
        left: '50%', // Left position relative to parent
        shadow: '0 0 1px transparent', // Box-shadow for the lines
        position: 'absolute' // Element positioning
    };
    
    var target = document.getElementById('spinner');
    var spinner = new Spinner(opts).spin(target);
</script>
<!-- <script async src="src-assets/javascripts/components/home.js"></script> -->
<script src="src-assets/javascripts/components/home.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
<script src='src-assets/javascripts/components/counter.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pixi.js/2.0.0/pixi.js'></script>
<script type='text/javascript'>
    console.clear();

var width = window.innerWidth / 2;
var height = window.innerHeight / 2;
var stage = new PIXI.Stage(0x0, true);
var renderer = PIXI.autoDetectRenderer(width, height);
document.getElementById('mast-head').appendChild(renderer.view);

var uniforms = {
  iResolution: {
    type: "2f",
    value: {
      x: width,
      y: height
    }
  },
  iGlobalTime: {
    type: "1f",
    value: 0
  },
  iMouse: {
    type: "2f",
    value: {
      x: 0,
      y: 0
    }
  }
};

var fragmentSrc = [
  "precision mediump float;",
  
  "uniform vec2 iResolution;",
  "uniform float iGlobalTime;",
  "uniform vec2 iMouse;",
  
  "float hash( float n ) {",
    "return fract(sin(n)*43758.5453);",
  "}",
  
  "float noise( in vec3 x ) {",
    "vec3 p = floor(x);",
    "vec3 f = fract(x);",
    "f = f*f*(3.0-2.0*f);",
    "float n = p.x + p.y*57.0 + 113.0*p.z;",
    "return mix(mix(mix( hash(n+  0.0), hash(n+  1.0),f.x),",
                   "mix( hash(n+ 57.0), hash(n+ 58.0),f.x),f.y),",
               "mix(mix( hash(n+113.0), hash(n+114.0),f.x),",
                   "mix( hash(n+170.0), hash(n+171.0),f.x),f.y),f.z);",
  "}",
  
  "vec4 map( in vec3 p ) {",
    "float d = 0.2 - p.y;",
    "vec3 q = p - vec3(1.0,0.1,0.0)*iGlobalTime;",
    "float f;",
    "f  = 0.5000*noise( q ); q = q*2.02;",
    "f += 0.2500*noise( q ); q = q*2.03;",
    "f += 0.1250*noise( q ); q = q*2.01;",
    "f += 0.0625*noise( q );",
    "d += 3.0 * f;",
    "d = clamp( d, 0.0, 1.0 );",
    "vec4 res = vec4( d );",
    "res.xyz = mix( 1.15*vec3(1.0,0.95,0.8), vec3(0.7,0.7,0.7), res.x );",
    "return res;",
  "}",
  
  "vec3 sundir = vec3(-1.0,0.0,0.0);",
  
  "vec4 raymarch( in vec3 ro, in vec3 rd ) {",
    "vec4 sum = vec4(0, 0, 0, 0);",
    "float t = 0.0;",
    "for(int i=0; i<64; i++) {",
      "if( sum.a > 0.99 ) continue;",

      "vec3 pos = ro + t*rd;",
      "vec4 col = map( pos );",
		
      "#if 1",
        "float dif =  clamp((col.w - map(pos+0.3*sundir).w)/0.6, 0.0, 1.0 );",
        "vec3 lin = vec3(0.65,0.68,0.7)*1.35 + 0.45*vec3(0.7, 0.5, 0.3)*dif;",
        "col.xyz *= lin;",
      "#endif",
		
      "col.a *= 0.35;",
      "col.rgb *= col.a;",
      "sum = sum + col*(1.0 - sum.a);	",

      "#if 0",
        "t += 0.1;",
      "#else",
        "t += max(0.1,0.025*t);",
      "#endif",
    "}",

    "sum.xyz /= (0.001+sum.w);",
    "return clamp( sum, 0.0, 1.0 );",
  "}",
  
  "void main(void) {",
    "vec2 q = gl_FragCoord.xy / iResolution.xy;",
    "vec2 p = -1.0 + 2.0*q;",
    "p.x *= iResolution.x/ iResolution.y;",
    "vec2 mo = -1.0 + 2.0*iMouse.xy / iResolution.xy;",
    
    // camera
    "vec3 ro = 4.0*normalize(vec3(cos(2.75-3.0*mo.x), 0.7+(mo.y+1.0), sin(2.75-3.0*mo.x)));",
    "vec3 ta = vec3(0.0, 1.0, 0.0);",
    "vec3 ww = normalize( ta - ro);",
    "vec3 uu = normalize(cross( vec3(0.0,1.0,0.0), ww ));",
    "vec3 vv = normalize(cross(ww,uu));",
    "vec3 rd = normalize( p.x*uu + p.y*vv + 1.5*ww );",

	
    "vec4 res = raymarch( ro, rd );",

    "float sun = clamp( dot(sundir,rd), 0.0, 1.0 );",
    "vec3 col = vec3(0.6,0.71,0.75) - rd.y*0.2*vec3(1.0,0.5,1.0) + 0.15*0.5;",
    "col += 0.2*vec3(1.0,.6,0.1)*pow( sun, 8.0 );",
    "col *= 0.95;",
    "col = mix( col, res.xyz, res.w );",
    "col += 0.1*vec3(1.0,0.4,0.2)*pow( sun, 3.0 );",
  
    "gl_FragColor = vec4( col, 1.0 );",
  "}"
];

var shader = new PIXI.AbstractFilter(fragmentSrc, uniforms);

var bg = PIXI.Sprite.fromImage("https://s3-us-west-2.amazonaws.com/s.cdpn.io/167451/test_BG.jpg");
bg.width = width;
bg.height = height;
bg.shader = shader;
stage.addChild(bg);

// var logo = PIXI.Sprite.fromImage("https://s3-us-west-2.amazonaws.com/s.cdpn.io/167451/pixiJsV2.png");
// logo.width = 472 / 3;
// logo.height = 174 / 3;
// logo.x = width - logo.width - 10;
// logo.y = height - logo.height - 10;
// stage.addChild(logo);

var count = 0;
var mouse;

function animate() {
  count += 0.01;
  mouse = stage.getMousePosition();
  
  shader.uniforms.iGlobalTime.value = count;
  if (mouse.x > 0 && mouse.y > 0) {  // If mouse is over stage
    // shader.uniforms.iMouse.value = {
    //   x: mouse.x,
    //   y: mouse.y
    // };
  }
   shader.syncUniforms();
    
  renderer.render(stage);
        
  requestAnimFrame(animate);
}

requestAnimFrame(animate);
</script>
</body>
</html>



