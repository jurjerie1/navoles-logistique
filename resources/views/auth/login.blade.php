
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />


                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                <div id="emailHelp" class="form-text color-white">Vos indentifiants vous ont était comununiqué par votre entreprise.</div>
            </div>
            

            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            

            
            <div>

                <x-primary-button class="d-flex flex-center justify-content-center col-12">
                    {{ __('Se connecter') }}
                </x-primary-button>
            </div>
            <div class="mt-12">
                @if (Route::has('password.request'))
                    <a class="link mt-12" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
