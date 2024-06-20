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
        $TechShare = TechShare::latest()->paginate(6);

        return view('livewire.guest.TechShare.record', [
            'TechShare' => $TechShare
        ])->layout('layouts.guest');
    }
}
