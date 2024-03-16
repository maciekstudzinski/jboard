<x-layout>
    @foreach ($ads as $ad)
      <x-card class="mb-4">
        {{ $ad->title }}
      </x-card>
    @endforeach
</x-layout>