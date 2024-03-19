<x-layout>
  <x-breadcrumbs class="mb-4"
    :links="['Jobs' => route('ads.index')]" />

    {{-- filters --}}
    <x-card class="mb-4 text-sm">
      <form action="{{ route('ads.index') }}" method="GET">

        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <div class="mb-1 font-semibold">Search</div>
            <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text" />
          </div>
          <div>
            <div class="mb-1 font-semibold">Salary</div>
            <div class="flex space-x-2">
              <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From:" />
              <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To:" />
            </div>
          </div>
          <div>
            <div class="mb-1 font-semibold">Experience</div>
            <x-radio-group name="experience" :options="\App\Models\Ad::$experience"/>
          </div>
          <div>4</div>
        </div>
        <button class="w-full">Filter</button>
      </form>
    </x-card>

    @foreach ($ads as $ad)
      <x-ad-card class="mb-4" :ad="$ad">
        <div>
            <x-link-button :href="route('ads.show', compact('ad'))">Show</x-link-button>
        </div>
      </x-ad-card>
    @endforeach
</x-layout>