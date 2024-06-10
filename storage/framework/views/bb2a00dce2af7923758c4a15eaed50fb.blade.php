<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['field','labelSrOnly'])
<x-filament-forms::field-wrapper :field="$field" :label-sr-only="$labelSrOnly" >

{{ $slot ?? "" }}
</x-filament-forms::field-wrapper>