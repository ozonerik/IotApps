<div class="container text-center">
    <div class="row mt-5">
        <div class="col">
            <h1>{{ $statusled->status }}</h1>
        </div>
    </div>
    <form class="form-floating" method="post" enctype="multipart/form-data" autocomplete="off" wire:submit="save">
    <div class="row">
        <div class="col">
            <input type="text" wire:model="serialno" name="serialno" class="form-control" id="serialno" placeholder="1234" value="1234">
            <label for="serialno">Input Serial Number</label>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($status==1)
            <button type="submit" class="btn btn-danger" wire:click="led_off">LED OFF</button>
            @else
            <button type="submit" class="btn btn-primary" wire:click="led_on">LED ON</button>
            @endif
        </div>
    </div>
    </form>
</div>