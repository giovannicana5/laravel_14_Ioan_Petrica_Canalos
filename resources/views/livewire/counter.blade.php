<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2>Sono un componente essenziale</h2>
            </div>
        </div>
    </div>
    <div class="display-3">{{$count}}</div>
    <button wire:click="increment" class="btn btn-success">+</button>
    <button wire:click="decrement" class="btn btn-danger">-</button>
    <button wire:click="incrementByNum({{$myNum}})" class="btn btn-info">+{{$myNum}}</button>
    <button wire:click="decrementByNum({{$myNum}})" class="btn btn-primary">-{{$myNum}}</button>
</div>
