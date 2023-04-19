@props(["highlighted" => false])

<article
        {{ $attributes->class([
            "mx-2 my-4 overflow-hidden transition-colors duration-300 hover:bg-gray-50 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl shadow-lg",
            "md:col-span-6 md:flex" => $highlighted
        ]) }}
    >
    <div>
        <img
            @class(["h-40 w-full object-cover", "md:h-full" => $highlighted])
            src="http://via.placeholder.com/300x300"
            alt="placeholder"
        />
    </div>

    <div @class(["border border-gray-200 p-4 space-y-4", "md:flex-1 flex flex-col justify-between" => $highlighted])>
        <header>
            <h2 class="text-2xl font-bold">Lorem Ipsum Dolor Sit</h2>
            <span class="text-xs font-bold text-gray-400">
                {{ now()->subMinute(5)->diffForHumans() }}
            </span>
        </header>

        <p class="text-justify">
            Lorem ipsum dolor sit amet. Qui itaque quisquam sit velit reprehenderit qui galisum quasi 33 mollitia cumque et dolores corporis et fuga sunt. Eum quis...
        </p>

        <footer class="text-sm font-bold text-blue-500">
            Read More
        </footer>
    </div>
</article>
