<div class="d-flex flex-row justify-content-center" wire:poll>

    <div class="d-flex flex-column align-content-center m-4 ">
        <h4>Following</h4>
        <h5 class="text-center" style="color: #4a5568;opacity: .8">{{$user->following->count()}}</h5>
    </div>
    <div class="d-flex flex-column align-content-center m-4 ">
        <h4>Followers</h4>
        <h5 class="text-center " style="color: #4a5568;opacity: .8">{{$user->followers->count()}}</h5>
    </div>
</div>
