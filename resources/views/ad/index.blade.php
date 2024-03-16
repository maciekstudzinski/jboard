<x-layout>
    @foreach ($ads as $ad)
        <div>{{ $ad->title }}</div>
    @endforeach
</x-layout>