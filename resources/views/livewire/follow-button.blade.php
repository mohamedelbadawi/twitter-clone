<div class="d-flex justify-content-center ">
    <a class="btn btn-primary text-light" wire:click="follow({{$user->id}})">{!!auth()->user()->isFollowing($user->id)?'Following <i class="fa-solid fa-check"></i>':'<i class="fa-solid fa-user-plus"></i> Follow'!!} </a>
</div>
