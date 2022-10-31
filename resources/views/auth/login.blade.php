<x-guest-layout>
    {{-- <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" />

        <x-splade-form action="{{ route('login') }}" class="space-y-4">
            <!-- Email Address -->
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="current-password" />
            <x-splade-checkbox id="remember_me" name="remember" :label="__('Remember me')" />

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <Link class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </Link>
                @endif

                <x-splade-submit class="ml-3" :label="__('Log in')" />
            </div>
        </x-splade-form>
    </x-auth-card> --}}


    <section class="bg-gray-100 flex h-screen w-full items-center justify-center">
        <article>
          <div class="max-w-7xl mx-auto pt-8 px-6 sm:px-10 pb-10 bg-white rounded-2xl">
            <div class="flex flex-col sm:flex-row mb-16 sm:mb-28 items-end sm:items-center justify-end gap-1">
              <span class="text-sm text-gray-800 font-light">
                Don't have an account?
            </span>
    
            <span class="font-bold text-indigo-500">
                Consult the admin
            </span>
    
              {{-- <Link href="{{ route('register') }}" class="inline-flex items-center font-medium text-green-900 hover:text-green-800">
                <span class="mr-2">Sign up</span>
                <svg width="14" height="11" viewbox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.89471 0L6.81484 0.972812L11.0771 4.8125L0 4.8125L0 6.1875L11.0771 6.1875L6.81484 10.0272L7.89471 11L14 5.5L7.89471 0Z" fill="currentColor"></path>
                </svg>
              </Link> --}}
            </div>
    
            <div >
              <h2 class="font-display font-heading text-4xl mb-16">Sign in. Be amazed.</h2>
    
              <div class="max-w-md lg:max-w-2xl 3xl:max-w-4xl mx-auto">
                <x-splade-form 
                    action="#" 
                    method="post"
                    class="space-y-5">
    
                    <section
                        class="flex flex-col sm:flex-row gap-3">
    
                        <x-splade-input 
                            id="email" 
                            type="email" 
                            name="email" 
                            :label="__('Email')"
                            autofocus />
                        
                        <x-splade-input 
                            id="password" 
                            type="password" 
                            name="password" 
                            :label="__('Password')" 
                            autocomplete="current-password" />
                    </section>
    
                    <x-splade-checkbox 
                        id="remember_me" 
                        name="remember" 
                        :label="__('Remember me')" />
    
                    <x-splade-submit class="transition" :label="__('Log in')" />
                </x-splade-form>
              </div>
    
              <div class="flex items-center justify-center gap-3 mt-12">
                @if (Route::has('password.request'))
                    <Link class="font-semibold text-sm text-gray-600 hover:text-indigo-600 transition" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                    </Link>
                @endif
              </div>
            </div>
          </div>
        </article>
      </section>
</x-guest-layout>
