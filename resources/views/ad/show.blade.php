<x-layout>
    <x-breadcrumbs class="mb-4"
    :links="['Jobs' => route('ads.index'), $ad->title => '#']" />
    <x-ad-card :$ad>
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($ad->description)) !!}
        </p>
    
        
    </x-ad-card>
</x-layout>