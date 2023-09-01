<div>
    <div wire:ignore.self class="modal" id="calendarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Szczegóły zamówienia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="$emit('closeOrderModal')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <!-- Dodaj inne informacje o zamówieniu -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="$emit('closeOrderModal')">Zamknij</button>
                </div>
            </div>
        </div>
    </div>
</div>