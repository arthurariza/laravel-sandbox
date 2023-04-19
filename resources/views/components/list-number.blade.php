@props(['isEven'])

<div {{ $attributes->class(["w-full my-2 p-2", "font-bold bg-gray-200" => $isEven]) }}>
    {{ $slot }}
</div>
