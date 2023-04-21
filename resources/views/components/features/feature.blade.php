@props(["feature", "even"])

@php
    $classes = [
            "yellow" => "border-l-yellow-400",
            "blue" => "border-l-blue-500",
            "green" => "border-l-green-500",
    ]
@endphp

<div
    @class(["p-2 border-l-4 rounded-l",
            "bg-gray-100" => $even,
            $classes[$feature->status->color()]
    ])
>
    {{ $feature->name }}
    {{ $feature->status->name }}
    {{ $feature->created_at->diffForHumans() }}
</div>
