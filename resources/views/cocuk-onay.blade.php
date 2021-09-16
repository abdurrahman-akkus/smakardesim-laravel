<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Onaysızlar</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.v3.3.7.min.css') }}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trumbowyg.colors.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
    @include('dashboard-menu')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Çocuğa Ait Bilgiler</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/dashboard">< Geri Dön</a>
                    </div>
                    <div class="panel-body">
                        <div class="px-2">
                            <label for="">İşlemini Yapmak İstediğiniz Çocuğu Seçiniz:</label>
                            <select name="" id="cocuk_id" class="form-control" onchange="bilgileriCek();">
                                <option value="">Yeni Kayıt</option>
                                @foreach ($cocuklar as $cocuk)
                                    <option value="{{$cocuk->encryptedId}}">{{ $cocuk->ad }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="row mt-4">
                            <h3 style="margin-left: 1rem;"> Genel Bilgiler</h3>
                            <div class="col-lg-6">
                                <table class="ozet-tablo">
                                    <tr>
                                        <th>Çocuğun Adı: </th> <td id="ad"></td>
                                    </tr>
                                    <tr>
                                        <th>SMA Tipi</th> <td id="sma_tip"></td>
                                    </tr>
                                    <tr>
                                        <th>Yetkili Adı</th> <td id="yetkili_adi"></td>
                                    </tr>
                                    <tr>
                                        <th>Yetkili Soyadı</th> <td id="yetkili_soyadi"></td>
                                    </tr>
                                    <tr>
                                        <th>Faaliyet Kodu</th> <td id="faaliyet_no"></td>
                                    </tr>
                                    <tr>
                                        <th>Telefon No</th> <td id="iletisim"></td>
                                    </tr>
                                    <tr>
                                        <th>Valilik İzin Başlangıcı</th> <td id="valilik_izin_baslangic"></td>
                                    </tr>
                                    <tr>
                                        <th>Valilik İzin Başlangıcı</th> <td id="valilik_izin_bitis"></td>
                                    </tr>
                                    <tr>
                                        <th>Toplanacak</th> <td id="toplanacak"></td>
                                    </tr>
                                    <tr>
                                        <th>Toplanan</th> <td id="toplanan"></td>
                                    </tr>
                                    <tr>
                                        <th>Para Birimi</th> <td id="birim"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="ozet-tablo">
                                    <tr>
                                        <th>Kısa Açıklama</th> <td id="kisa_aciklama"></td>
                                    </tr>
                                    <tr>
                                        <th>Açıklama</th> <td id="aciklama"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <h3 style="margin-left: 1rem;"> Belgeler</h3>
                            <div class="col-lg-6">
                                <label>Fotoğraf</label>
                                <img id="fotograf" style="width:100%;" src="" alt="">
                                    
                                <label id="hastalik_raporu_etiketi">Hastalık Raporu</label>
                            </div>
                            <div class="col-lg-6">
                                <label id="valilik_izni_etiketi">Valilik İzni</label>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row" style="padding-right: 15px;padding-left: 15px;">
                            <div class="col-12" >
                                <table id="banka_tablosu" class="table table-striped table-info">
                                    <thead>
                                        <tr>
                                            <th>Banka Adı</th>
                                            <th>Para Birimi</th>
                                            <th>IBAN No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

    <div id="secim_paneli_buton_kapsayici">
        <button class="bg-secondary" data-toggle="collapse" data-target="#secim_paneli"><i class="fa fa-caret-down"></i></button>
    </div>
    <div id="secim_paneli" class="show collapse in">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Çocuğun Adı</th>
                    <th>Yetkili Adı</th>
                    <th>Faaliyet No</th>
                    <th><em>f<sub>x</sub></em></th>
                    <th>Durum</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cocuklar as $cocuk)
                    <tr style="cursor:pointer;" onclick="listedenBilgileriCek('{{$cocuk->encryptedId}}')">
                        <td class="cocugun-adi">{{$cocuk->ad}}</td>
                        <td><span class="yetkili-adi">{{$cocuk->yetkili_adi}}</span> <span class="yetkili-soyadi">{{$cocuk->yetkili_soyadi}}</span></td>
                        <td class="faaliyet-no">{{$cocuk->faaliyet_no}}</td>
                        <td><button class="btn btn-info" onclick="listedenIzinKontrol($(this))" data-toggle="modal" data-target="#valilik_izni_modal">SORGULA</button></td>
                        <td class="durum">
                            @if($cocuk->aktif_mi==0)<span class="gosterge gosterge-kirmizi"></span>@endif
                            @if($cocuk->aktif_mi==1)<span class="gosterge gosterge-yesil"></span>@endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <!-- /#page-wrapper -->
</div>

    <!-- Modal -->
    <div class="modal fade" id="valilik_izni_modal" tabindex="-1" role="dialog" aria-labelledby="valilikIzniLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Valilik İzin Detayı</h4>
                </div>
                <div class="modal-body scrollable" style="overflow:scroll">
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
<style>
#page-wrapper {
    height:calc(100vh - 50px);
    overflow: scroll;
}
#secim_paneli {
    background-color: grey;
    position: fixed;
    top:50px;
    left:250px;
    width:calc(100% - 250px);
    height:calc(100% - 50px);
    z-index: 99;
    overflow: scroll;
}
#secim_paneli_buton_kapsayici{
    background-color:lightgrey;
    position: absolute;
    top:40px;
    left:250px;
    width:calc(100% - 250px);
    z-index: 100;
    display:flex;
    justify-content:center;
}
#secim_paneli_buton_kapsayici button{
    height: 20px;
    width:50px;
}
.rounded {
    border-radius: 50%;
}

.p-0 {
    padding: 1px;
}

.my-btn {
    border: unset;

}

#kisa_aciklama_blogu .trumbowyg-editor,
#kisa_aciklama_blogu .trumbowyg-box {
    min-height: 10px !important;
}

.form-control {
    line-height: 1.42857143 !important;
}

.gosterge {
    border-radius:50%;
    width:20px;
    height:20px;
    display:block;
}

.gosterge-kirmizi {
    background-color:red;
}

.gosterge-yesil {
    background-color:green;
}

.ozet-tablo {
    width:100%;
}

.ozet-tablo td,
.ozet-tablo th {
    border:1px solid darkgrey;
}

@media screen  and (max-width: 767px) {
    
    #secim_paneli,
    #secim_paneli_buton_kapsayici {
        left:0;
        width:100%;
    }
}
</style>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.v3.3.7.min.js') }}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('js/metisMenu.min.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/trumbowyg.min.js') }}"></script>
<script src="{{ asset('js/trumbowyg.colors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tr.min.js') }}"></script>
<script>
    let MIME_TYPES = {
        pdf:".pdf",
        image:".jpg, .jpeg, .png"
    }
    
    function listedenBilgileriCek(param) {
        $('#cocuk_id').val(param);
        bilgileriCek();
        $('#secim_paneli').collapse('hide');
    }

    function bilgileriCek() {
        $("#genel_bilgiler td:nth-child(2)").text("");
        $(".yuklenen").remove();
        $('#banka_tablosu tbody').html("");
        cocugunBilgileriniCek();
        bankaBilgileriniCek();
    }

    function cocugunBilgileriniCek() {
        let id = $('#cocuk_id').val();
        if (id === "") return;
        
        fetch('cocuk/' + id, {
            method: 'GET', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if(data.error!==undefined){
                alert(data.error+": Bu çocuğun bilgisine erişme yetkiniz yok!");
            }
            $("#ad").text(data.ad);
            $("#yetkili_adi").text(data.yetkili_adi);
            $("#yetkili_soyadi").text(data.yetkili_soyadi);
            $("#faaliyet_no").text(data.faaliyet_no);
            $("#iletisim").text(data.iletisim);
            $("#sma_tip").text(data.sma_tip);
            $("#valilik_izin_baslangic").text(tarihFormatla(data.valilik_izin_baslangic));
            $("#valilik_izin_bitis").text(tarihFormatla(data.valilik_izin_bitis));
            $("#toplanacak").text(data.toplanacak);
            $("#toplanan").text(data.toplanan);
            $("#birim").text(data.birim);
            $("#kisa_aciklama").html(data.kisa_aciklama);
            $("#aciklama").html(data.aciklama);
            $('#fotograf').attr("src", data.resim_url);
            if(data.hastalik_raporu_turu=="image") {
                $('#hastalik_raporu_etiketi').after('<img class="yuklenen" src="' + data.hastalik_raporu_url + '" style="width:100%">');
            } else {
                $('#hastalik_raporu_etiketi').after('<br><object type="application/pdf" class="yuklenen" data="' + data.hastalik_raporu_url + '" style="width:100%;height:300px;">'+
                'Tarayıcınızda bu belge görüntülenmiyorsa <a href="'+data.hastalik_raporu_url+'">Link</a>\'e tıklayarak belgeye ulaşabilirsiniz.</object>');
            }
            if (data.valilik_izin_turu=="image") {
                $('#valilik_izni_etiketi').after('<img class="yuklenen" src="' + data.valilik_izni_url + '" style="width:100%">'); //file input elemanının sonrasına ekle
            } else {
                $('#valilik_izni_etiketi').after('<br><object type="application/pdf" class="yuklenen" data="' + data.valilik_izni_url + '" style="width:100%;height:300px;">'+
                'Tarayıcınızda bu belge görüntülenmiyorsa <a href="'+data.valilik_izni_url+'">Link</a>\'e tıklayarak belgeye ulaşabilirsiniz.</object>');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });

    }

    function bankaBilgileriniCek() {
        let cocuk_id = $('#cocuk_id').val();
        if (cocuk_id === "") return;

        fetch('/banka/'+cocuk_id, {
            method: 'GET', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            bankaTablosuDoldur(data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    function kabulTuruDegistir(_this, arg) {
        $(arg).attr("accept", MIME_TYPES[$('[name="' + _this.attr("name") + '"]:checked').val()]);
    }

    function bankaTablosuDoldur(data) {
        $('#banka_tablosu tbody').html("");
        for(datum of data){
            $('#banka_tablosu tbody').append("<tr>"
                +"<td class='id-satiri' hidden>"+datum.cryptedId+"</td>"
                +"<td class='banka-satiri'>"+datum.banka+"</td>"
                +"<td class='birim-satiri'>"+datum.birim+"</td>"
                +"<td class='iban-satiri'>"+datum.iban+"</td>"
                +"</tr>");
        }
    }

    function listedenIzinKontrol($arg) {
        $('#valilik_sorgu_tablosu tbody').html("<tr><td colspan='8' class='text-center'><i>Veriler Çekiliyor. Lütfen Bekleyiniz!</i></td></tr>");
        valilikİzinKontrol(JSON.stringify({
                    "FaliyetNo":$arg.parents("tr").find('.faaliyet-no').text(),
                    "Ad":$arg.parents("tr").find('.yetkili-adi').text(),
                    "Soyad":$arg.parents("tr").find('.yetkili-soyadi').text()
            })
            ).then((data)=>{
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
    }

    function kayittanIzinKontrol() {
        valilikİzinKontrol( JSON.stringify({
                    "FaliyetNo":$('#faaliyet_no').val(),
                    "Ad":$('#yetkili_adi').val(),
                    "Soyad":$('#yetkili_soyadi').val()
        })
        ).then((data)=>{
        });
    }

    function valilikİzinKontrol(dataList) {
        return new Promise((resolve,reject)=>{
            fetch('/valilik-izin', {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    "_token": "{{ csrf_token() }}",
                    islem: "izin_kontrol",
                    yetkili_id:{{$yetkiliId}},
                    dataList: dataList
                })
            })
            .then(response => response.json())
            .then(data => {
                resolve(data);
            })
            .catch((error) => {
                console.error('Error:', error);
            })
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
</body>
</html>