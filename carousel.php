<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body style="padding:0px; margin:0px; background-color:#fff;">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/dinson/image-slider.slider/=edit -->
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;
var MAX_HEIGHT = 280;

function ScaleSlider() {
    var containerElement = jssor_1_slider.$Elmt.parentNode;
    var containerWidth = containerElement.clientWidth;
    var containerHeight = containerElement.clientHeight;

    if (containerWidth) {
        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
        var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

        jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight);
    }
    else {
        window.setTimeout(ScaleSlider, 30);
    }
}

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        
        /*jssor slider loading skin double-tail-spin css*/
        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 102 css*/
        .jssorb102 .i {position:absolute;cursor:pointer;}
        .jssorb102 .i .ci {fill:#fff;}
        .jssorb102 .i .co {fill:#000;opacity:.2;}
        .jssorb102 .i:hover .co {fill:#ff9933;opacity: 1;}
        .jssorb101 .i:hover .ci {fill:#000;}
        .jssorb102 .iav .ci {fill:#000;stroke-width:0;}
        .jssorb102 .iav .co {fill:#ffba04;opacity: 1;}
        .jssorb102 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 055 css*/
        .jssora055 {display:block;position:absolute;cursor:pointer;}
        .jssora055 .a {fill:none;stroke:#fff;stroke-width:960;stroke-miterlimit:10;}
        .jssora055:hover {opacity:.8;}
        .jssora055.jssora055dn {opacity:.5;}
        .jssora055.jssora055ds {opacity:.3;pointer-events:none;}
    </style>
    <div class="carousel_height"  id="jssor_1" style="position:relative;margin-left:auto;margin-right:auto;margin-top:100px;top:0px;left:0px;height:280px;width:1400px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
        </div>
        <div class="carousel_height" data-u="slides" style="cursor:default;position:relative;height:280px;width:1400px;top:0px;left:0px;overflow:hidden;">
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.5;" src="images/1c.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/2c.jpg" />
            </div>
            <div>
                <img data-u="image" src="images/3c.jpg" />
            </div>
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.5;" src="images/4c.jpg" />
            </div>
            <!-- <div>
                <img data-u="image" src="images/5c.jpg" />
            </div> -->
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">responsive slider</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb102" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="co" cx="8000" cy="8000" r="5000"></circle>
                    <circle class="ci" cx="8000" cy="8000" r="3000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora055" style="width:45px;height:45px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora055" style="width:45px;height:45px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
</body>
</html>
