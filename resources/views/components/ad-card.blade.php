<x-card class="mb-4">
        
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $ad->title }}</h2>
        <div class="text-slate-500">${{ number_format($ad->salary) }}</div>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div>{{ $ad->employer->company_name }}</div>
            <div> {{ $ad->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag><a href="{{ route('ads.index', ['experience' => $ad->experience]) }}">{{ Str::ucfirst($ad->experience )}}</a></x-tag>
            <x-tag><a href="{{ route('ads.index', ['category' => $ad->category]) }}">{{ $ad->category }}</a></x-tag>
        </div>
    </div>
    {{ $slot }}
    
  </x-card>