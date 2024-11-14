<?php

namespace App\Livewire\Guest\TechShare;

use App\Models\TechShare;
use Livewire\Component;
use Livewire\WithPagination;

class Record extends Component
{
    use WithPagination;
    
    public function render()
    {
        $TechShare = TechShare::orderBy('id', 'DESC')->paginate(6);

        return view('livewire.guest.TechShare.record', [
            'TechShare' => $TechShare
        ])->layout('layouts.guest');
    }
}