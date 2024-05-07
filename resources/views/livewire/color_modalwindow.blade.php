@unless($showColorModalwindow)
    <!-- カラーボタン表示 -->
    <div class="select-color" >
        <button wire:click="openColorModalwindow()" class="select-color-button" style="background-color: {{ $selectedColor }}"></button>
    </div>
@endunless

@if($showColorModalwindow)
    <!-- カラーモーダル -->
    <div class="color-modal-overlay">
    <div class="color-modal">
        <!-- カラーが1~4個の時: カラーボタン、カラー追加ボタン、deleteボタン表示 -->
        @if(count($colors) < 5)
            <!-- カラーボタン -->
            @foreach($colors as $color)
                <div class="color-item">
                    <button wire:click="selectColor('{{ $color }}')" class="color-icon" style="background-color: {{ $color }}"></button>
                    <!-- deleteボタンが押された時、各カラーに×を表示 -->
                    @if($showDeleteButton)
                        <button class="delete-icon" wire:click="delete('{{ $color }}')">×</button>
                    @endif
                </div>
            @endforeach

            <!-- カラー追加ボタン -->
            @if(!$showColorDeleteButton)
                <div class="color-icon">
                    <div class="color-picker-wrapper">
                        <input type="color" class="color-picker" wire:model="selectedColor" wire:change="addColor($event.target.value)">
                        <div class="color-picker-text">+</div>
                    </div>
                </div>
            @endif

            <!-- deleteボタン -->
            @if(count($colors) > 0)
                @unless($showColorDeleteButton)
                    <button class="color-edit-button" wire:click="colorDelete">color delete</button>
                @endunless
            @endif
        @endif

        <!-- カラーが5つある時: カラーボタン、deleteボタン表示 -->
        @if(count($colors) == 5)
            <!-- カラーボタン -->
            @foreach($colors as $color)
                <div class="color-item">
                    <button wire:click="selectColor('{{ $color }}')" class="color-icon" style="background-color: {{ $color }}"></button>
                    <!-- deleteボタンが押された時、各カラーに×を表示 -->
                    @if($showDeleteButton)
                        <button class="delete-icon" wire:click="delete('{{ $color }}')">×</button>
                    @endif
                </div>
            @endforeach

            <!-- deleteボタン表示 -->
            @if(count($colors) > 0)
                @unless($showColorDeleteButton)
                    <button class="color-edit-button" wire:click="colorDelete">color delete</button>
                @endunless
            @endif
        @endif

        <!-- deleteボタンが押されている時はOKボタンを表示 -->
        @if($showDeleteOkButton)
            <button class="color-edit-button" wire:click="deletionComplete">OK</button>
        @endif
        </div>
    </div>
@endif
