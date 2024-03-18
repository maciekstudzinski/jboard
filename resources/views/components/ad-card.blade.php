<x-card class="mb-4">
        
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $ad->title }}</h2>
        <div class="text-slate-500">${{ number_format($ad->salary) }}</div>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-4">
            <div>Company Name</div>
            <div> {{ $ad->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag>{{ Str::ucfirst($ad->experience )}}</x-tag>
            <x-tag>{{ $ad->category }}</x-tag>
        </div>
    </div>
    {{ $slot }}
    
  </x-card>