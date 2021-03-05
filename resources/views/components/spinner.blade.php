@props(['size' => '64'])

<div {{ $attributes->merge([
    "class" => "loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-$size w-$size"
]) }}></div>