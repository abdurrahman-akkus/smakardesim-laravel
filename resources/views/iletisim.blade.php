<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Bize Ulaşın">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="icon" type="image/png" href="images/smaKardesimLogo.svg"/>
    <title>İLETİŞİM</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/iletisim.css" media="screen">
    <link rel="stylesheet" href="css/custom.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.15.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "SMA Kardeşim",
        "url": "index.php",
        "logo": "images/default-logo.png"
    }
    </script>
    <meta property="og:title" content="İLETİŞİM">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
</head>

<body class="u-body text-light" onload="temizle()">
    <main>
        @include('header')
        <section class="u-align-center u-clearfix u-section-1" id="sec-9da2">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <h1 class="u-text u-text-1">Bize Ulaşın</h1>
                <div class="u-form u-form-1">
                    <form  method="post" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form validate-form" style="padding: 10px" source="custom" name="form" id="iletisim_form">
                        <div class="u-form-group u-form-name">
                            <input type="text" placeholder="Adınız" id="name-3b9a" name="name" class="u-border-2 u-border-black border-light u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1 validate-input" required="" data-validate="İsim Bilgisi Boş Geçilemez.">
                        </div>
                        <div class="u-form-email u-form-group">
                            <input type="email" placeholder="E-Posta" id="email-3b9a" name="email" class="u-border-2 u-border-black border-light u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2 validate-input" required="" data-validate="Mail Bilgisi Boş Geçilemez.">
                        </div>
                        <div class="u-form-group u-form-message">
                            <textarea placeholder="Mesajınız" rows="4" cols="50" id="message-3b9a" name="message" class="u-border-2 u-border-black border-light u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3 validate-input" required="" data-validate="Mesaj Bilgisi Boş Geçilemez."></textarea>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit">
                            <a href="#" class="u-border-2 u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-1 border-light">gönder</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                    </form>
                    <div id="message_return" class="message-return d-none"></div>
                </div>
            </div>
        </section>
        <footer class="u-align-left u-clearfix u-footer" id="sec-0463">
            <div class="u-clearfix u-sheet u-sheet-1"></div>
        </footer>
    </main>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/iletisim.js"></script>
</body>

</html>