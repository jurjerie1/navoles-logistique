<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="form-text color-white">
            {{ __('Vous avez oublié votre mot de passe, ce n\'est pas un problème. Il nous faut juste votre adress email') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="d-flex flex-center justify-content-center col-12 mt-12">
                <x-primary-button>
                    {{ __('Envoyer un mail de modfication de mot de passe') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
