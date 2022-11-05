<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register New Trademark') }}
        </h2>
    </x-slot>

    <div class="flex flex-col items-center pt-6 bg-gray-100">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('store-trademark') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="trademark_name" :value="__('Trademark name')" />

                <x-input id="trademark_name" class="block mt-1 w-full" type="text" name="trademark_name" :value="old('trademark_name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="category_id" :value="__('Category')" />

            </div>

            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}" >{{ $category['name'] }}</option>
                @endforeach
            </select>

            <div class="mt-4">
                <x-label for="registration" :value="__('Registration Date')" />

                <x-input id="registration" class="block mt-1 w-full" type="date" name="registration" :value="old('registration')" required />
            </div>

            <div class="mt-4">
                <x-label for="expiration" :value="__('Expiration Date')" />

                <x-input id="expiration" class="block mt-1 w-full" type="date" name="expiration" :value="old('expiration')" required />
            </div>

            <input name="owner_id" id="owner_id" type="hidden" value="{{auth()->id()}}"/>


            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>

</x-app-layout>
