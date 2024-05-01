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
        </div>
    </div>
    @endif
</div>
