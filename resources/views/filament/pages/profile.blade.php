<x-filament::page xmlns:x-filament="http://www.w3.org/1999/html">
    <form wire:submit.prevent="submit" class="space-y-6">
        {{ $this->form }}

        <div class="flex flex-wrap items-center gap-4 justify-start">
            <input type="text" name="name"/>
            <input type="image" name="image"/>

            <x-filament::button type="submit">
                Save
            </x-filament::button>

            {{--            <x-filament::button type="button" color="secondary" tag="a" :href="$this->cancel_button_url">--}}
            {{--                Cancel--}}
            {{--            </x-filament::button>--}}
        </div>
    </form>
</x-filament::page>
