<div class="mx-4 flex items-center justify-between space-x-4">
    <div class="h-full w-full flex-1 rounded-xl bg-white p-4 text-center">
        <h2 class="text-left text-xs font-bold text-gray-600">Open</h2>
        <p class="mt-4 inline-block rounded-xl bg-yellow-400 p-2 text-5xl font-bold text-white">
            {{ $statuses->open }}
        </p>
    </div>
    <div class="h-full w-full flex-1 rounded-xl bg-white p-4 text-center">
        <h2 class="text-left text-xs font-bold text-gray-600">In Progress</h2>
        <p class="mt-4 inline-block rounded-xl bg-blue-500 p-2 text-5xl font-bold text-white">
            {{ $statuses->progress }}
        </p>
    </div>
    <div class="h-full w-full flex-1 rounded-xl bg-white p-4 text-center">
        <h2 class="text-left text-xs font-bold text-gray-600">Closed</h2>
        <p class="mt-4 inline-block rounded-xl bg-green-500 p-2 text-5xl font-bold text-white">
            {{ $statuses->closed }}
        </p>
    </div>
</div>
