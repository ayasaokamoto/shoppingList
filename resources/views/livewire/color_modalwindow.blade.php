<div>
    @if(!$showColorModalwindow)
    <div class="select-color">
        <button wire:click="openColorModalwindow()" class="select-color-button" style="background-color: {{ $selectedColor }}"></button>
    </div>
    @else
    <div class="color-modal-overlay">
        <div class="color-modal">
            @if($colors)
                @foreach($colors as $color)
                    <button wire:click="selectColor('{{ $color }}')" class="color-icon" style="background-color: {{ $color }}"></button>
                @endforeach
            @endif
            @if(count($colors) < 5)
                <div class="color-picker-wrapper">
                    <div class="color-picker-wrapper">
                        <input type="color" class="color-picker" wire:model="selectedColor" wire:change="addColor($event.target.value)">
                        <div class="color-picker-text">+</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @endif
</div>
