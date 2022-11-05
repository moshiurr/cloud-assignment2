<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Trademarks') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if($trademarks->count())
                @foreach($trademarks as $trademark)
                    <div class="ml-4 border-b-2">
                        <div class="mt-2">
                            <a href="" class="font-semibold">{{$trademark->user->name}}</a> <span class="text-gray-600 text-sm">{{$trademark->created_at->diffForHumans()}}</span>
                        </div>
                        <div class="mt-2 mb-4">
                            <p class="font-semibold">Trademark name: {{$trademark->trademark_name}}</p>
                            <p class="">Registration date: {{$trademark->registration}}</p>
                            <p class="">Expiration date: {{$trademark->expiration}}</p>
                        </div>

                    </div>
                @endforeach
                <div class="ml-4">
                    {{$trademarks->links()}}
                </div>
            @else
                <p class="text-center">{{Auth::user()->name}} has no trademarks.</p>
            @endif
        </div>
    </div>

</x-app-layout>
