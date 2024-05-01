<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('かう') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("ここにitemを表示する") }} -->
                    <div class="shopping-form">
                        @foreach ($items as $item)
                        <div class="item">
                            <div class="item-detail">
                                <div class="item-left">
                                    @livewire('color_modalwindow')
                                    <input type="text" name="list-content" placeholder="" value="{{ $item->contents }}">
                                    <input type="hidden" name="id" value="">
                                </div>
                                <div>
                                @livewire('modalwindow', ['itemId' => $item->id])
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @livewire('add-item')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
