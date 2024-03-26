<x-layout>
    <x-breadcrumbs class="mb-4"
    :links="['Jobs' => route('ads.index'), $ad->title => '#']" />
    <x-ad-card :$ad>
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($ad->description)) !!}
        </p>
    
        @can('apply', $ad)
            <x-link-button :href="route('ad.application.create', $ad)">
                Apply
            </x-link-button>
            @else
            <div class="text-center text-sm font-medium text-slate-500">You already applied to this job</div>
        @endcan
        
    </x-ad-card>
    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">More {{ $ad->employer->company_name }} jobs:</h2>
        <div class="text-sm text-slate-500">
            @foreach ($ad->employer->ads as $relatedAd)
            <div class="mb-4 flex justify-between">
                <div>
                    <div class="text-slate-700">
                        <a href="{{ route('ads.show', $relatedAd) }}">{{ $relatedAd->title }}</a>
                    </div>
                    <div>
                        {{ $relatedAd->created_at->diffForHumans() }}
                    </div>
                </div>
                <div class="text-xs">
                    ${{ number_format($relatedAd->salary) }}
                </div>
            </div>
                
            @endforeach
        </div>
    </x-card>
</x-layout>