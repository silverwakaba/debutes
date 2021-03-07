<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FrontLivewire extends Component{
    // Public Variable
    public $isOpen = NULL;

    // Rendering Livewire View
    public function render(){
        return view('livewire.index')->extends('layouts.front');
    }

    // Close any View to Default
    public function closeInput(){
        $this->isOpen = NULL;
    }

    // Open Biodata
    public function openBiodata(){
        $this->isOpen = 'biodata';
    }

    // Open Timeline
    public function openTimeline(){
        $this->isOpen = 'timeline';
    }

    // Open Hobby
    public function openHobby(){
        $this->isOpen = 'hobby';
    }

    // Open More
    public function openMore(){
        $this->isOpen = 'more';
    }

    // Open Content
    public function openContent(){
        $this->isOpen = 'content';
    }

    // Open Credit
    public function openCredit(){
        $this->isOpen = 'credit';
    }

    // Open Request
    public function openRequest(){
        $this->isOpen = 'request';
    }

    // Open Goal
    public function openGoal(){
        $this->isOpen = 'goal';
    }

    // Open Maro
    public function openMaro(){
        $this->isOpen = 'maro';
    }
}
