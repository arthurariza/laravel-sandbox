<x-dashboard-layout>
    <x-slot:title>Features</x-slot:title>

    <x-features.statuses/>

    <div class="m-4 rounded-xl bg-white p-4 space-y-4">
        {{ $features->links() }}
        @foreach($features as $feature)
            <x-features.feature :feature="$feature" :even="$loop->even"/>
        @endforeach
    </div>

</x-dashboard-layout>
