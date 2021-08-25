<!DOCTYPE html>
<html lang="tr">
<head>
	<title>SMA Kardeşim·Yönetim</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/images/smaKardesimLogo.svg"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
    <link rel="stylesheet" href="{{ asset('css/admin/material-design-iconic-font.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/admin/index-util.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/admin/index-main.css') }}" media="screen">
</head>
<body style="position:relative">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/background.png');">
			<div class="wrap-login100">
                <img src="../images/smaKardesimLogo.svg" class="login100-form-logo" >

                <span class="login100-form-title p-b-34 p-t-27">
                    SMA Kardeşim Yönetim Girişi
                </span>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

        <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf

                    <div class="wrap-input100 validate-input" data-validate = "Kullanıcı Adı bilgisi boş geçilemez...">
                        <input id="email" class="input100 block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Eposta"/>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input " data-validate="Şifre bilgisi boş geçilemez...">
                        <input id="password" class="input100 block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Beni Hatırla') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" name="submit" value="submit">Giriş</button>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-dark" href="{{ route('password.request') }}">
                                {{ __('Şifremi Unuttum') }}
                            </a>
                        @endif
                    </div>
                </form>
			</div>
		</div>
	</div>

</body>
</html>