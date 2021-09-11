<?php
use App\Utils\Cryptologist;
?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="+500, 800, +300">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <meta name="generator" content="Nicepage 3.15.3, nicepage.com">
    <meta property="og:title" content="Anasayfa">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:url" content="index.php">
    <link rel="icon" type="image/png" href="images/smaKardesimLogo.svg"/>
    <title>Anasayfa</title>
    <link rel="canonical" href="index.php">
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/anasayfa.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "SMA Kardeşim",
        "url": "index.php",
        "logo": "images/default-logo.png"
    }
    </script>
</head>

<body data-home-page="index.php" data-home-page-title="Anasayfa" class="u-body">
    <main>
        @include('header')
        <section class="u-clearfix u-section-1" id="carousel_4587">
            <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-xl u-sheet-1">
                <div id="carousel-8d1d" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
                    <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                        @for ($s = 1; $s <= sizeof($sliderCocuklar); $s++ )
                            <li data-u-target="#carousel-8d1d" @class(['u-active'=>($s==1),'u-active-palette-1-base u-hover-palette-1-base u-palette-1-light-2 u-shape-circle']) data-u-slide-to="{{$s-1}}" style="width: 10px; height: 10px;"></li>
                        @endfor 
                    </ol>
                    <div class="u-carousel-inner" role="listbox">
                        <?php
                            $counter = 1;
                            foreach ($sliderCocuklar as $sCocuk) {
                        ?>
                        <div class='<?php if($counter==1) echo "u-active"; ?> u-carousel-item u-container-style u-slide'>
                            <div class="u-container-layout u-valign-top u-container-layout-1">
                                <div class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-20 u-shape-round u-white u-group-1">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <h3 class="u-text u-text-palette-1-base u-text-1"><a href="cocugumuz/{{Cryptologist::encrypt($sCocuk->id)}}">{{$sCocuk->ad}} <i class="far fa-arrow-alt-circle-right"></i></a></h3>
                                        <p class="u-text u-text-palette-1-base u-text-2">{!!$sCocuk->kisa_aciklama!!}&nbsp;</p>
                                    </div>
                                </div>
                                <img src="{{$sCocuk->resim_url}}" alt="{{$sCocuk->ad}}'e ait fotoğraf" class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-round u-radius-20 u-image-1" data-image-width="1000" data-image-height="1500">
                            </div>
                        </div>
                        <?php $counter++;} ?>
                    </div>
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-spacing-5 u-text-palette-1-base u-carousel-control-1" href="#carousel-8d1d" role="button" data-u-slide="prev">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 256 256">
                                <g>
                                    <polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
                                </g>
                            </svg>
                        </span>
                        <span class="sr-only">
                            <svg viewBox="0 0 256 256">
                                <g>
                                    <polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-spacing-5 u-text-palette-1-base u-carousel-control-2" href="#carousel-8d1d" role="button" data-u-slide="next">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 306 306">
                                <g id="chevron-right">
                                    <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
                                </g>
                            </svg>
                        </span>
                        <span class="sr-only">
                            <svg viewBox="0 0 306 306">
                                <g id="chevron-right">
                                    <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
                <a href="/cocuklarimiz" class="u-align-center u-btn u-button-style u-hover-white u-palette-1-base u-btn-1">Tüm çocuklarımız<br>
                </a>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-color-scheme-custom-color-scheme-1 u-color-style-multicolor-1 u-section-2" id="sec-5772">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        <div class="u-align-center u-border-2 u-border-white u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img src="images/boy.svg" class="counter-icon">
                                <h1 class="u-text u-title u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="2000">{{$cocukSayisi}}</h1>
                                <p class="u-text u-text-2">Çocuğumuz</p>
                            </div>
                        </div>
                        <div class="u-align-center u-border-2 u-border-white u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-2">
                                <img src="images/volunteer.svg" class="counter-icon">
                                <h1 class="u-text u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="2000">{{$gonulluler}}</h1>
                                <p class="u-text u-text-4">Gönüllü Kardeşimiz</p>
                            </div>
                        </div>
                        <div class="u-align-center u-border-2 u-border-white u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-3">
                                <img src="images/peace.svg" class="counter-icon">
                                <h1 class="u-text u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="2000">{{$tamamlananlar}}</h1>
                                <p class="u-text u-text-6">İlacına Kavuşan Çocuklarımız</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-clearfix u-section-3" id="sec-468f">
            <h1 class="u-text u-title u-text-5">HEDEFE YAKLAŞANLAR</h1>
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="u-list u-list-1">
                    <div class="cocuklar">
                        <?php 
                            foreach ($hedefeYaklasanlar as $hCocuk) {
                        ?>
                        <a href="/cocugumuz/{{Cryptologist::encrypt($hCocuk->id)}}" class="cocuk-link">
                            <div class="cocuk">
                                <div class="badge-container">
                                    <span class="badge rounded-pill bg-info">{{$hCocuk->sma_tip}}</span>
                                </div>
                                <div class="u-container-style back-img-container u-list-item u-repeater-item u-shading" data-image-width="2000" data-image-height="1333">
                                    <img src="{{$hCocuk->resim_url}}" class="back-img">
                                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                        <h3 class="u-text u-text-1">{{$hCocuk->ad}}</h3>
                                        <span class="cocuk-aciklama">{!!$hCocuk->kisa_aciklama!!}</span>
                                    </div>
                                </div>
                                <div style="margin-top: -5px">
                                    <div class="a-progress orange">
                                        <div class="a-progress-bar" val="{{$hCocuk->yuzde}}" style="width: {{$hCocuk->yuzde}}%; background:#f7810e;">
                                            <div class="a-progress-value"><span>{{$hCocuk->yuzde}}</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-clearfix u-section-3" id="sec-468f">
            <h1 class="u-text u-title u-text-5">YENİ BAŞLAYANLAR</h1>
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="u-list u-list-1">
                    <div class="cocuklar">
                        <?php 
                            foreach ($yeniBaslayanlar as $yCocuk) {
                        ?>
                        <a href="/cocugumuz/{{Cryptologist::encrypt($yCocuk->id)}}" class="cocuk-link">
                            <div class="cocuk">
                                <div class="badge-container">
                                    <span class="badge rounded-pill bg-info">{{$yCocuk->sma_tip}}</span>
                                    <span class="badge rounded-pill bg-secondary" hidden=""><i class="fas fa-sync-alt"></i> 4g</span>
                                </div>
                                <div class="u-container-style back-img-container u-list-item u-repeater-item u-shading" data-image-width="2000" data-image-height="1333">
                                    <img src="{{$yCocuk->resim_url}}" class="back-img">
                                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                        <h3 class="u-text u-text-1">{{$yCocuk->ad}}</h3>
                                        <span class="cocuk-aciklama">{!!$yCocuk->kisa_aciklama!!}</span>
                                    </div>
                                </div>
                                <div style="margin-top: -5px">
                                    <div class="a-progress orange">
                                        <div class="a-progress-bar" val="{{$yCocuk->yuzde}}" style="width: {{$yCocuk->yuzde}}%; background:#f7810e;">
                                            <div class="a-progress-value"><span>{{$yCocuk->yuzde}}</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <footer class="u-align-left u-clearfix u-footer" id="sec-0463">
            <div class="u-clearfix u-sheet u-sheet-1"></div>
        </footer>
    </main>
    <style>
        .cocuk-link {
            text-decoration: none;
        }
    </style>
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    
    <!-- Progress bar için -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
    function isElementInView(element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }


    $(window).scroll(function() {
        $('.a-progress-bar').each(function() {
            var isElementView = isElementInView($(this), false);
            if (isElementView && $(this).hasClass('a-progress-animate')) {
                return;
            } else if (isElementView && !$(this).hasClass('a-progress-animate')) {
                animate($(this));
            } else {
                $(this).removeClass('a-progress-animate');
            }
        });
    });

    function animate(arg) {
        arg.addClass('a-progress-animate');
        let progressSpan = arg.find('.a-progress-value > span');
        progressSpan.text(progressSpan.parents(".a-progress-bar").attr('val'))
        progressSpan.prop('Counter', 0).animate({
            Counter: progressSpan.text()
        }, {
            duration: 1500,
            easing: 'swing',
            step: function(now) {
                progressSpan.text(Math.ceil(now));
            }

            /*for (var i =  0; i <= $(this).parents('.a-progress-bar').attr('val'); i++) {
              $(this).text(Math.ceil(i));
              sleep(10);
            }*/
        });
    }
    $(document).ready(function() {});

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    </script>
</body>

</html>