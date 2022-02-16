@extends('layouts.front')
@section('content')
    <div class="feed__header">
        <h2>Home</h2>
    </div>
@livewire('create-tweet')
@livewire('load-tweets')

<livewire:scripts />

</script>
@endsection
