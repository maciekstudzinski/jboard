<x-layout>
    <x-breadcrumbs class="mb-4"
    :links="['Jobs' => route('ads.index'), $ad->title => route('ads.show', $ad), 'Apply' => '#']" />

    

    <x-ad-card  :$ad/>

    <x-card>

        <h2 class="mb-4 text-lg font-medium">Your job application</h2>

        <form action="{{ route('ad.application.store', $ad) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="expected_salay" class="mb-2 block text-sm font-medium text-slate-900">Expected Salary</label>
                <x-text-input type="number" name="expected_salary" />
            </div>

            <x-button class="w-full">Apply</x-button>
        </form>

    </x-card>
</x-layout>