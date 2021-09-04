<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yönetim Paneli</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.v3.3.7.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/metisMenu.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <h1 class="page-header">Hoşgeldin {{$kullanici->name}}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
            @if($kullanici->role > 0)  
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <i class="fa fa-heart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $cocukSayisi ?? '' ?></div>
                                    <div>Yönetimizdeki Çocuklar</div>
                                </div>
                            </div>
                        </div>
                        <a href="kayit">
                            <div class="panel-footer">
                                <span class="pull-left">Detaylar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endif

                
            @if($kullanici->role > 1)
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <i class="fab fa-wpforms fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $onaysizCocukSayisi ?? '' ?></div>
                                    <div>Onaysız Kayıtlar</div>
                                </div>
                            </div>
                        </div>
                        <a href="kayit">
                            <div class="panel-footer">
                                <span class="pull-left">Detaylar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/bootstrap.v3.3.7.min.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/metisMenu.min.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/sb-admin-2.min.js') }}" defer=""></script>


</body>

</html>