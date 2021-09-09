<!DOCTYPE html>
<html lang="tr">
<head>
	<title>SMA Kardeşim·Yönetim</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/smaKardesimLogo.svg"/>
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
				
                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="wrap-input100 validate-input" data-validate = "Kullanıcı Adı bilgisi boş geçilemez...">
                                <input id="name" class="input100 block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Kullanıcı Adı"/>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>


                            <div class="wrap-input100 validate-input">
                                <input id="email" class="input100 block mt-1 w-full" type="email" name="email" :value="old('email')" required  placeholder="E-Posta"/>
                                <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                            </div>


                            <div class="wrap-input100 validate-input">
                                <input id="password" class="input100 block mt-1 w-full" type="password" name="password" required autocomplete="new-password"  placeholder="Şifre"/>
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="wrap-input100 validate-input " data-validate="Şifre bilgisi boş geçilemez...">
                                <input id="password_confirmation" class="input100 block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Şifre(Tekrar)"/>
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <span class="ml-2">
                                                {!! __(':terms_of_service and :privacy_policy\'nı kabul ediyorum.', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-dark float-right">'.__('Hizmet Koşulları').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-dark float-right">'.__('Gizlilik Politikası').'</a>',
                                                ]) !!}
                                            </span>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn" type="submit" name="submit" value="submit">Kayıt Ol</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a class="underline text-sm text-light float-right" href="{{ route('login') }}">
                                    {{ __('Giriş Yap') }}
                                </a>
                            </div>

                    </form>
</div>
		</div>
	</div>

<script src="../js/jquery.js"></script>

</body>
</html>