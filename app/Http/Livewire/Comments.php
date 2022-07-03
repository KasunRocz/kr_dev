<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{

    public $newComment;
    public $comments=[
        [
            'title'=>'Comments',
            'content'=>'Traning Livewire',
            'created_at'=>'3 min ago'
        ]
    ];
    public function addComment(){
        if($this->newComment==[]){
            return;
        }
        array_unshift($this->comments,[
            'title'=>$this->newComment,
            'content'=>'Traning Livewire',
            'created_at'=>Carbon::now()->diffForHumans()]
        );
        $this->newComment = [];
    }
    public function newComment(){

    }
    public function render()
    {
        return view('livewire.comments');
    }
}
