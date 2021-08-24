<?php
use App\Utils\Cryptologist;
?>
<?php

function yuzdeRozeti($value)
{
    if ((int) $value <= 30) {
        return "bg-danger";
    } elseif ((int) $value <= 60) {
        return "bg-warning";
    } else {
        return "bg-success";
    }
}

?> 
<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <link rel="icon" type="image/png" href="images/smaKardesimLogo.svg"/>
      <title>Çocuklarımız</title>

      <meta name="generator" content="Nicepage 3.15.3, nicepage.com">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}" media="screen">
      <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
      <link rel="stylesheet" href="{{ asset('css/cocuklarimiz.css') }}" media="screen">

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
      <meta property="og:title" content="Çocuklarımız">
      <meta property="og:type" content="website">
      <meta name="theme-color" content="#478ac9">
      <link rel="canonical" href="index.php">
      <meta property="og:url" content="index.php">
   </head>
   <body class="u-body">
      <main>
         @include('header')
         <div class="content home">
            <h3 class="baslik">TÜM ÇOCUKLARIMIZ</h3>
            <div class="arama row">
               <div class="col-lg-4"><input type="text" id="ara" class="form-control" placeholder="Ara" ></div>
               <!--<button class="fas fa-search btn btn-circle btn-warning arama-butonu">Ara</button>-->
               <div class="col-lg-4">
               <div class="input-group">
                  <select name="" class="form-control" id="siralama_secenekleri" style="z-index: 99;">
                     <option selected="" disabled="">Sıralama Seçiniz</option>
                     <option <?php if ($param=="ad-ASC") { echo "selected"; } ?> value="ad-ASC">İsim(Alfabetik)</option>
                     <option <?php if ($param=="ad-DESC") { echo "selected"; } ?> value="ad-DESC">İsim(Ters)</option>
                     <option <?php if ($param=="sma_tip-ASC") { echo "selected"; } ?> value="sma_tip-ASC">SMA Tipi(Artan)</option>
                     <option <?php if ($param=="sma_tip-DESC") { echo "selected"; } ?> value="sma_tip-DESC">SMA Tipi(Azalan)</option>
                     <option <?php if ($param=="yuzde-ASC") { echo "selected"; } ?> value="yuzde-ASC">Toplanan Yüzde(Artan)</option>
                     <option <?php if ($param=="yuzde-DESC") { echo "selected"; } ?> value="yuzde-DESC">Toplanan Yüzde(Azalan)</option>
                     <option <?php if ($param=="valilik_izin_bitis-ASC") { echo "selected"; } ?> value="valilik_izin_bitis-ASC">Kampanya Bitiş Tarihi(Artan)</option>
                     <option <?php if ($param=="valilik_izin_bitis-DESC") { echo "selected"; } ?> value="valilik_izin_bitis-DESC">Kampanya Bitiş Tarihi(Azalan)</option>
                  </select>
                  <i class="fas fa-sort-amount-down-alt bg-primary text-light sirala" disabled></i>
               </div>
               </div>
            </div>
            <div class="cocuklar">
               @foreach ($cocuklar as $cocuk)
                  <a href="/cocugumuz/{{Cryptologist::encrypt($cocuk->id)}}" data-title="{{$cocuk->ad}}" class="cocuk-class">
                     <img src="{{$cocuk->resim_url}}" alt="" data-id="{{Cryptologist::encrypt($cocuk->id)}}" data-title="{{$cocuk->ad}}" width="450" height="300">
                     <span class="cocuk cocuk-ad badge">{{$cocuk->ad}}</span>
                     <div class="cocuk-sma-tipi">
                        <span class="badge badge-pill bg-info">{{$cocuk->sma_tip}}</span>
                        <span class="badge badge-pill {{yuzdeRozeti($cocuk->yuzde)}}">%{{$cocuk->yuzde}}</span>
                        <span class="badge badge-pill bg-secondary">{{$cocuk->valilik_izin_bitis}}</span>
                     </div>
                     <span class="cocuk cocuk-aciklama">{!!$cocuk->kisa_aciklama!!}</span>
                  </a>
               @endforeach
            </div>
         </div>
         <footer class="u-align-left u-clearfix u-footer" id="sec-0463">
            <div class="u-clearfix u-sheet u-sheet-1"></div>
         </footer>
      </main>
      <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
      <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
      <script>
         $(function() {
             $('#ara').keyup(function() {
                 var val = $(this).val().toLowerCase();

                 $(".cocuk-class").hide();

                 $(".cocuk-class").each(function() {
                     var text = $(this).attr("data-title").toLowerCase();
                     if (text.indexOf(val) != -1) {

                         $(this).show();
                     }
                 });
             });
         });

         $('select').on('change', function () {
            window.location.href="/cocuklarimiz/"+this.value;
         });
      </script>
   </body>
</html>

