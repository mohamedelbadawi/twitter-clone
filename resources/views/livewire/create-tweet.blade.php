<div class="tweetBox">
    <form wire:submit.prevent="store" enctype="multipart/form-data">

        <div class="tweetbox__input">
            <img
                src="{{asset("images/".auth()->user()->image_name)}}"
                alt=""
            />
            <input type="text" placeholder="What's happening?" wire:model="content" />
            <input type="file" id="image" style="display: none;visibility: hidden" wire:model="image_name">
        </div>
        <div class="d-flex justify-content-center">
          <label for="image" class="ml-5 mt-4 mr-0"><i class="fa-solid fa-image"></i></label>
        <button type="submit" class="tweetBox__tweetButton">Tweet</button>
        </div>
    </form>
</div>
@if($errors->any())
    @foreach($errors as $error)
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">

        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{$error}}
    </div>
</div>
    @endforeach
@endif
