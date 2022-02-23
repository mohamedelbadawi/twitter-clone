<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTweet extends Component
{
    use WithFileUploads;

    public $content;
    public $image_name;



    public function resetInputField()
    {
        $this->content = '';
        $this->image_name='';
    }

    public function store()
    {
        $data = $this->validate([
            'content' => 'required',
            'image_name'=>'nullable|file'
        ]);
        $data['user_id'] = auth()->id();
        if ($this->image_name!='' && $this->image_name!=null){
        $data['image_name'] = $this->image_name->store('images','public');
        }
        Tweet::create($data);
        $this->resetInputField();
        $this->emit('tweetCreated');


    }

    public function render()
    {
        return view('livewire.create-tweet');
    }
}
