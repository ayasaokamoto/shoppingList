<div>
    @if(!$showModalwindow)
        <button wire:click="openModalwindow()" type="button" class="modal-button">
            <img src="img/dot.png" alt="">
        </button>
    @else
        <div class="modal-overlay">
            <div class="modal">
                <button wire:click="checkPurchased({{ $itemId }})" type="button" class="modal-button">購入ずみに移動</button>
                <button wire:click="delete({{ $itemId }})" type="button" class="modal-button">削除</button>
                <button wire:click="closeModalwindow()" type="button" class="modal-button">キャンセル</button>
            </div>
        </div>
    @endif
</div>


