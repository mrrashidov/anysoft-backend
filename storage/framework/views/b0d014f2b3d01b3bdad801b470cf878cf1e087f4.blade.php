<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['darkMode','tag','wire:click','href','tooltip','target','disabled','color','label','icon','size','dusk','class'])
<x-forms::icon-button :dark-mode="$darkMode" :tag="$tag" :wire:click="$wireClick" :href="$href" :tooltip="$tooltip" :target="$target" :disabled="$disabled" :color="$color" :label="$label" :icon="$icon" :size="$size" :dusk="$dusk" :class="$class" >

{{ $slot ?? "" }}
</x-forms::icon-button>