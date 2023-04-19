<x-layout>
    <h1>Blade Components</h1>
    <div class="md:grid md:grid-cols-6">
        @foreach(range(1, 17) as $number)
            <x-card
                :highlighted="$loop->first"
                class="{{ $loop->iteration < 4 ? 'md:col-span-3' : 'md:col-span-2' }}"
            />
        @endforeach
    </div>
        <x-category-dropdown />


        @foreach(range(1, 20) as $number)
            <x-list-number :is-even="$loop->even">
                {{ $number }}
            </x-list-number>
        @endforeach
</x-layout>
