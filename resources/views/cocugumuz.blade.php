<?php
use App\Utils\Cryptologist;
?>

<?php
$orijinalFormat = 'Y-m-d';
$orijinalZamanDamgasiFormat = 'Y-m-d H:i:s'
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
    <link rel="icon" type="image/png" href="/images/smaKardesimLogo.svg"/>
    <title>{{$cocuk->ad}}</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/cocuklarimiz.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/anasayfa.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/card/main.css') }}" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <meta name="generator" content="Nicepage 3.15.3, nicepage.com">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "SMA Kardeşim",
            "url": "index.php",
            "logo": "/images/smaKardesimLogo.svg"
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>

    <meta property="og:title" content="Çocuklarımız">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
</head>

<body class="u-body">
    <main>
        @include('header')
        <section class="u-clearfix u-section-3" id="sec-468f">
            <h1 class="u-text u-title">{{$cocuk->ad}}</h1>
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{$cocuk->resim_url}}" class="w-100">
                        <div class="d-flex justify-content-between mt-2">
                            <!-- modal  -->
                            <!-- Button trigger modal -->

                            <button id="kardes-ol-butonu" onclick="kardesSayisiArttir()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">SMA Kardeşim Ol <i class="fas fa-heart text-danger"></i></button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog container-fluid">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Bana Kardeş Olduğun İçin Teşekkür Ederim</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <form class="mb-2">
                                                    <label for="card-form-title"><b>İsim Soyisim:</b></label>
                                                    <input type="text" id="card-form-title" class="form-control" name="card-form-title" minlength="3" required/>
                                                    <button id="save-button-card" type="button" class="btn btn-primary" onclick="downloadDiv()">Belgeyi İndir</button>
                                                    <span id="yukleniyor" class="text-primary" hidden>&nbsp;&nbsp;&nbsp;<i id="yukleniyor" class="fas fa-sync-alt fa-spin" ></i> Kart Oluşturuluyor</span>
                                                </form>
                                            </div>
                                            <div id="card-container" style="position:relative;">
                                                    <img id="card-image" class="img-fluid" src="{{$cocuk->resim_url}}" />
                                                    <img src="/images/smaKardesimLogo.svg" id="card-logo">
                                                    <br>
                                                    <span class="belge-baslik">FARKINDALIK BELGESİ</span>
                                                    <br>
                                                    <p id="card-msg">
                                                        Ben <span id="card-title" class="card-font text-center">*********</span> olarak
                                                        <span class="card-font">{{$cocuk->ad}}</span> isimli çocuğumuzu SMA KARDEŞİM
                                                        olarak seçtim ve destek vererek kardeş oldum. Sizde destek verip kardeş olmak istiyorsanız. <a class="card-font" href="smakardesim.com">smakardesim.com</a>'a giderek
                                                        çocuklarımıza destek vererek kardeş olabilirsiniz.
                                                    </p>
                                                    <img src="/images/qrCodesmakardesim.png" id="qr-code">
                                                    <img src="../../images/background.png" alt="" id="arkaplan">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- modal -->


                            <div class="p-2 rounded bg-info text-light">
                                <img src="/images/kardes.svg" width="20" height="20" alt="">
                                <span id="kardes_sayisi">{{$cocuk->kardes_sayisi}} </span> Kardeş
                            </div>
                        </div>

                        <label id="facebook_share_btn" class="btn btn-sm text-light mt-1" style="cursor:pointer">
                            <i class="fab fa-facebook"></i> Paylaş
                        </label>
                        <label class="btn btn-sm btn-info text-light mt-1" onclick="tweetle()">
                            <i class="fab fa-twitter"></i> Tweetle
                        </label>
                    </div>
                    <div class="col-md-6 hidden-scroll-bar">
                        <table class="table table-striped text-light">
                            <tr>
                                <td>Yetkili Adı</td>
                                <td><span id="yetkili_adi">{{$cocuk->yetkili_adi}}</span> <span id="yetkili_soyadi">{{$cocuk->yetkili_soyadi}}</span></td>
                            </tr>
                            <tr>
                                <td>Faaliyet No</td>
                                <td><span id="faaliyet_no">{{$cocuk->faaliyet_no}}</span> <button class="btn btn-info" onclick="valilikİzinKontrol()" data-toggle="modal" data-target="#valilik_izni_modal">SORGULA</button></td>
                            <tr>
                                <td>İletişim</td>
                                <td>{{$cocuk->iletisim}}</td>
                            </tr>
                            <tr>
                                <td>SMA Tipi</td>
                                <td>{{$cocuk->sma_tip}}</td>
                            </tr>
                            <tr>
                                <td>Valilik İzni Başlangıç-Bitiş Tarihi</td>
                                <td>{{DateTime::createFromFormat($orijinalFormat, $cocuk->valilik_izin_baslangic)->format("d.m.Y")
                                        . "-" . DateTime::createFromFormat($orijinalFormat, $cocuk->valilik_izin_bitis)->format("d.m.Y") }}</td>
                            </tr>
                            <tr>
                                <td>Toplanacak Miktar</td>
                                <td>{{$cocuk->toplanacak}}{{$cocuk->birim}}</td>
                            </tr>
                            <tr>
                                <td>Toplanan Miktar</td>
                                <td>{{$cocuk->toplanan}}{{$cocuk->birim}}
                                    <span class="badge {{ yuzdeRozeti($cocuk->yuzde)}}">{{ '%' . $cocuk->yuzde }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Son Güncelleme Tarihi</td>
                                <td>{{ DateTime::createFromFormat($orijinalZamanDamgasiFormat, $cocuk->guncelleme_ani)->format("d.m.Y H:i:s") }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><table class="table table-striped table-info">
                                        <thead>
                                            <tr>
                                                <th>Banka Adı</th>
                                                <th>Para Birimi</th>
                                                <th>IBAN No</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bankalar as $banka)
                                                <tr>
                                                    <td>{{ $banka->banka }}</td>
                                                    <td>{{ $banka->birim }}</td>
                                                    <td class="kopyalanabilir" data-bs-toggle="tooltip" data-bs-placement="top" title="Kopyalamak için tıklayınız" onload="tooltipTetikle($(this))">
                                                        <div class="d-flex iban-container" onclick="panoyaKopyala($(this))">
                                                            <!--input type="text" class="iban-input" value="{{ $banka->iban }}" readonly-->
                                                            <textarea row="1" class="iban-input" readonly>{{ $banka->iban }}</textarea>
                                                            <button class="btn btn-light d-inline kopyalanabilir"><i class="fas fa-copy"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="text-light mt-4 p-2">
                    @if (!empty($cocuk->hastalik_raporu_url) || !empty($cocuk->valilik_izni_url))
                        <h3 class="mt-4">Dokümanlar</h3>
                        <ul>
                            @if (!empty($cocuk->hastalik_raporu_url))
                                <li class="mx-4 belge-link"><a href="#hastalik_raporu">Hastalık Raporuna Git</a></li>
                            @endif

                            @if (!empty($cocuk->valilik_izni_url))
                                <li class="mx-4 belge-link"><a href="#valilik_izni">Valilik İzin Belgesi'ne Git</a></li>
                            @endif
                        </ul>
                    @endif

                    <h3 class="mt-4">Detaylı Bilgi</h3>
                    <article id="expalaination">{!! $cocuk->aciklama !!}</article>
                    @if (!empty($cocuk->hastalik_raporu_url))
                        <a href="{{ $cocuk->hastalik_raporu_url }}" class="mt-4" target="_blank">Hastalık Raporu <i class="fas fa-download"></i></a><!-- TODO: Telefonda indirmek istiyor -->
                        @if ($cocuk->hastalik_raporu_turu == "pdf")
                            <div style="height: 500px;margin-bottom: 50px;">
                                <object id="hastalik_raporu" data="{{ $cocuk->hastalik_raporu_url }}" width="100%" height="500px"></object>
                            </div>
                        @else
                            <img id="hastalik_raporu" src="{{ $cocuk->hastalik_raporu_url }}" alt="{{ $cocuk->ad }} Hastalık Raporu">
                        @endif
                    @endif

                    @if (!empty($cocuk->valilik_izni_url))
                        <a href="{{ $cocuk->valilik_izni_url }}" class="mt-4" target="_blank">Valilik İzin Belgesi <i class="fas fa-download"></i></a>
                        @if ($cocuk->valilik_izin_turu == "pdf")
                            <div style="height: 500px;margin-bottom: 50px;">
                                <object id="valilik_izni" data="{{ $cocuk->valilik_izni_url }}" width="100%" height="500px"></object>
                            </div>
                        @else
                            <img id="valilik_izni" src="{{ $cocuk->valilik_izni_url }}" alt="{{ $cocuk->ad }} Valilik İzni">
                        @endif
                    @endif
                </div>
            </div>
        </section>
        <footer class="u-align-left u-clearfix u-footer" id="sec-0463">
            <div class="u-clearfix u-sheet u-sheet-1"></div>
        </footer>



    </main>

    <!-- Modal -->
    <div class="modal fade show" id="valilik_izni_modal" tabindex="-1" role="dialog" aria-labelledby="valilikIzniLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Valilik İzin Detayı</h4>
                </div>
                <div class="modal-body scrollable">
                    <table class="table table-striped" id="valilik_sorgu_tablosu">
                        <thead>
                            <tr>
                                <th>Adı Soyadı</th>
                                <th>Faaliyet Kapsamı (İl-İlçe)</th>
                                <th>İzin Veren Makam</th>
                                <th>Yardım Toplama Amacı</th>
                                <th>Yardım Toplama Türü</th>
                                <th>Yardım Toplama Şekli</th>
                                <th>Yardım Toplama Başlangıç Tarihi</th>
                                <th>Yardım Toplama Bitiş Tarihi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.v3.3.7.min.js') }}" defer=""></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v11.0" nonce="0UA9fOjz"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '2801003133494146',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v11.0'
            });
        };

        document.getElementById('facebook_share_btn').onclick = function() {
            FB.ui({
                display: 'popup',
                method: 'share',
                href: 'http://127.0.0.1:8000/cocugumuz/{{Cryptologist::encrypt($cocuk->id)}}',
                quote: '{{ $cocuk->ad }} artık benim SMA Kardeşim. Sen de bize katılmak istersen SMA Kardesim sitesinden {{$cocuk->ad}}\'i kardeş seçerek tedavisine destek olabilirsin.',
                description: "Donate us, please",

            }, function(response) {});
        }

        function tweetle() {
            window.open('https://twitter.com/intent/tweet?text={{$cocuk->ad}} '+
            'artık benim SMA Kardeşim. Sen de bize katılmak istersen SMA Kardesim sitesinden {{$cocuk->ad}}\'i '+
            'kardeş seçerek tedavisine destek olabilirsin.&'+
            'url=https://smakardesim.com/cocugumuz/{{Cryptologist::encrypt($cocuk->id)}}','_blank');
        }

        function panoyaKopyala($arg) {
            let elm = $arg.find(".iban-input")[0];
            elm.select();
            elm.setSelectionRange(0, 99999);
            document.execCommand("copy");
            alert("Kopyalanan IBAN NO: " + elm.value);
        }


        function tooltipTetikle($arg) {
            var tooltip = new bootstrap.Tooltip($arg[0], {});
        }
    </script>

    <!-- Sma Kardeşim ol button fonksiyonu -->
    <script>
        function kardesSayisiArttir() {
            let cocuk_id = '{{Cryptologist::encrypt($cocuk->id)}}';
            fetch('/kardes-ol/'+cocuk_id, {
                    method: "GET",
                })
                .then(response => response.text())
                .then(data => {
                    if(data==1){
                        $("#kardes_sayisi").text($("#kardes_sayisi").text()*1+1);
                    }                    
                })
                .catch((error) => {
                    console.error('Error:', error);
                });

        }

        function valilikİzinKontrol() {
            $('#valilik_sorgu_tablosu tbody').html("<tr><td colspan='8' class='text-center'><i>Veriler Çekiliyor. Lütfen Bekleyiniz!</i></td></tr>");
            fetch('/valilik-izin', {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        "_token": "{{ csrf_token() }}",
                        islem: "izin_kontrol",
                        dataList: JSON.stringify({
                            "FaliyetNo": $('#faaliyet_no').text(),
                            "Ad": $('#yetkili_adi').text(),
                            "Soyad": $('#yetkili_soyadi').text()
                        })
                    })
                })
                .then(response => response.json())
                .then(data => {

                    $('#valilik_sorgu_tablosu tbody').html("");
                    if(data.Data==null||data.Data.length==0) {
                        $('#valilik_sorgu_tablosu tbody').html("<tr>"+
                            "<td colspan='8' class='text-center'><i>Maalesef Böyle Bir Kayıt Bulunamadı.</i>"+
                            "<a href='/iletisim'>Lütfen Bildiriniz!</a></td></tr>");
                        return;
                    }
                    for (datum of data.Data) {
                        $('#valilik_sorgu_tablosu tbody').append(
                            "<tr>" +
                            "<td>" + datum.YardimToplayanAd + "</td>" +
                            "<td>" + datum.FaaliyetKapsamiStr + "</td>" +
                            "<td>" + datum.IzinVerenMakamIlIlce + "</td>" +
                            "<td>" + datum.FaaliyetAmaciStr + "</td>" +
                            "<td>" + datum.YardimToplamaTuruStr + "</td>" +
                            "<td>" + datum.YardimToplamaSekliStr + "</td>" +
                            "<td>" + tarihFormatla(parseInt(datum.DtBaslangic.substring(6, 19))) + "</td>" +
                            "<td>" + tarihFormatla(parseInt(datum.DtBitis.substring(6, 19))) + "</td>" +
                            "</tr>"
                        );

                        console.log(datum.DtBaslangic.substring(6, 19));
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                    $('#valilik_sorgu_tablosu tbody').html("<tr><td colspan='8' class='text-center'><i>Veriler Çekilemedi. Bir Sorun Var Gibi Görünüyor!</i></td></tr>");
                });
        }

        function tarihFormatla(tarih) {
            tarih = new Date(tarih);
            return sifirEkleme(tarih.getDate()) +
                "/" + (sifirEkleme(tarih.getMonth() + 1)) +
                "/" + tarih.getFullYear() +
                " " + sifirEkleme(tarih.getHours()) +
                ":" + sifirEkleme(tarih.getMinutes()) +
                ":" + sifirEkleme(tarih.getSeconds());
        }

        function sifirEkleme(n) {
            return n > 9 ? "" + n : "0" + n;
        }
    </script>
    <!-- Sma Kardeşim ol button fonksiyonu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('js/cardModalJs.js') }}" defer=""></script>

    <style>
        #facebook_share_btn {
            background: #2d4485;
        }

        #twitter_share_btn {
            background: #1da1f2;
        }

        .share-btn {
            border: none;
            border-radius: 3px;
            color: white;
        }

        #expalaination {
            text-align: justify;
        }

        .iban-container {
            cursor: pointer;
            justify-content: space-between;
        }
        
        .iban-input,.iban-input:focus ,.iban-input:focus-visible {
            background-color:transparent;
            border-color: transparent;
            outline:transparent;
        }

        textarea.iban-input {
            resize: none;
            line-height: 1; 
            font-size: 1rem; border: none;
            overflow-y:scroll;
        }

        a,
        .belge-link {
            color: #6e0dbf;
            text-decoration: none;
            font-style: italic;
        }

        .scrollable {
            overflow: scroll;
        }
    </style>
</body>

</html>