<div class="container text-center">
    <div class="row mt-5">
        <div class="col">
            <h1>{{ $status }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($status==1)
            <button type="button" class="btn btn-danger" wire:click="decrement">LED OFF</button>
            @else
            <button type="button" class="btn btn-primary" wire:click="increment">LED ON</button>
            @endif
        </div>
    </div>
</div>