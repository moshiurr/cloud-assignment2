<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <a href="{{ route('register-trademark') }}">
                            <div class="p-6">
                                Register new Trademark
                            </div>
                        </a>
                        <a href="{{route('view-trademark')}}">
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                View your Trademark
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

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
                    <p class="text-center">There are no trademarks.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
