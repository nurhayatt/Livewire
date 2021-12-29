<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;
   public $title;
   public  $photo;
    
    public function render()
    {
        return view('livewire.files.upload');
    }
    public function fileUpload(){
     
        $this->photo->store('photos');
    }
}