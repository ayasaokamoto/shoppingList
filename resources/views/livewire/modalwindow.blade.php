<div>
    @if(!$showModalwindow)
        <button wire:click="openModalwindow()" type="button" class="modal-button">
            <img src="img/dot.png" alt="">
        </button>
    @else
        <div class="modal-overlay">
            <div class="modal">
                <button wire:click="closeModalwindow()" type="button" class="modal-button">閉じる</button>
                <button wire:click="closeModalwindow()" type="button" class="modal-button">購入済み</button>
                <button wire:click="closeModalwindow()" type="button" class="modal-button">削除</button>
            </div>
        </div>
    @endif
</div>


