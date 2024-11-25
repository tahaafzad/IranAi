<x-layout heading="Pricing page">
    <x-nav-link href="/">Home page</x-nav-link>
    <x-slot:footer>
        @foreach($pricing as $price)
            <x-nav-link href="/pricing/{{$price['id']}}" class="text-blue-500 hover:underline">{{$price['title']}}
            </x-nav-link>
        @endforeach
    </x-slot:footer>
</x-layout>
