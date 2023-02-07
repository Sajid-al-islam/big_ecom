<div class="border border-danger p-5">
    {{-- Success is as dangerous as failure. --}}
    <input type="text" wire:keydown.enter="gotoResult" wire:model.debounce.500ms="search_key" class="form-control">
    {{ $search_key }}
</div>
