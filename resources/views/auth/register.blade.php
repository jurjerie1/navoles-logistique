
<x-guest-layout>
    <x-auth-card >
        <x-slot name="logo" >
            <a href="/" style="margin-top: 100px;">
                <x-application-logo class="w-20 h-20 mt-12 text-gray-500 fill-current"   />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row flex-center-column">
                    <div class="col-12 ">
                        <h1 class="text-center h2 color-orange">Bienvenue chez navoles logistique, pour finaliser votre inscription, il nous manque quelques informations.</h1>
                    </div>
            <div class="col-6"> 
               
                
        <form method="post" action="{{ route('register.upload', ['token' => $user->create_compte]) }}">
            @csrf
            @method('PUT')
        
            <div>
                <x-input-label for="pseudo" :value="__('Pseudo')" />
        
                <x-text-input id="pseudo" class="form-control" type="text" name="pseudo" :value="old('pseudo')" required
                    autofocus placeholder="Jurjerie" />
            </div>
        
            <div class="mb-3">
                <x-input-label for="pseudoD" :value="__('Pseudo Discord (ex : Jurjerie#3294)')" />
        
                <x-text-input id="pseudoD" class="form-control" type="text" name="pseudoD" :value="old('pseudoD')" required
                    placeholder="Jurjerie#3298" />
            </div>
        
        
        
        
        
        
            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
        
                <x-text-input id="email" class="form-control" type="email" name="email" value="{{ $user->email }}" required
                    disabled />
            </div>
        
            <div class="mb-3">
                <x-input-label for="entreprise" :value="__('Entreprise')" />
        
                <x-text-input id="entreprise" class="form-control" type="text" name="entreprise"
                    value="{{ $user->entreprise->name }}" required disabled />
            </div>
        
            <div class="mb-3">
                <x-input-label for="tk" :value="__('Lien de votre profil Trucksbook')" />
        
                <x-text-input id="tk" class="form-control" type="text" name="tk" :value="old('tk')" required
                    placeholder="https://trucksbook.eu/profile/225114" />
            </div>
        
        
        
        
        
        
            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Mot de passe')" />
        
                <x-text-input id="password" class="form-control" type="password" name="password" required
                    autocomplete="new-password" />
            </div>
        
            <!-- Confirm Password -->
            <div class="mb-3">
                <x-input-label for="password_confirmation" :value="__('Confirmation mot de passe')" />
        
                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                    required />
            </div>
        
            <div class="d-flex flex-center justify-content-center col-12">
                <x-primary-button class="mt-12">
                    {{ __('Je valide mon inscription') }}
                </x-primary-button>
            </div>
        
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
