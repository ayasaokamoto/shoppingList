<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div class="tabs">
                <a href="{{ route('dashboard') }}" class="tab {{ request()->routeIs('dashboard') || request()->routeIs('shopping') ? 'active' : '' }}">かいもの</a>
                <a href="{{ route('bought') }}" class="tab {{ request()->is('bought') ? 'active' : '' }}">かったもの</a>
                <a href="{{ route('usual') }}" class="tab {{ request()->is('usual') ? 'active' : '' }}">いつもの</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- タブ1ここから -->
                    @if(request()->is('dashboard'))
                        <!-- {{ __("itemの表示") }} -->
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
                    <!-- タブ2ここから -->
                    @elseif(request()->is('bought'))
                        <p>かったものの内容をここに表示</p>
                    <!-- タブ3ここから -->
                    @elseif(request()->is('usual'))
                        <p>いつもの内容をここに表示</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
