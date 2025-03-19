<x-guest-layout>
    <div
        class="flex flex-col items-center justify-center w-full py-8 px-4 bg-gradient-to-r from-blue-100 to-blue-300 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Forgot Your Password?</h2>

        <div class="mb-4 text-sm text-gray-600 text-center">
            {{ __('No worries! Just let us know your email address, and we will send you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="w-full max-w-sm">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email"
                    class="block mt-1 w-full border border-blue-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    type="email" name="email" :value="old('email')" required autofocus
                    placeholder="Enter your email address" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex justify-center">
                <x-primary-button
                    class="w-full py-3 text-center bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-xl flex items-center justify-center">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <small class="text-gray-600">Remember your password? <a href="{{ route('login') }}"
                    class="text-blue-600 hover:underline">Back to Login</a></small>
        </div>
    </div>
</x-guest-layout>
