<?php

namespace App\Livewire\Guest\Merchandise;

use App\Models\Merchandise;
use Livewire\Component;
use Livewire\WithPagination;

class Record extends Component
{
    use WithPagination;
    
    public function render()
    {
        $Merchandise = Merchandise::latest()->paginate(6);

        return view('livewire.guest.Merchandise.record', [
            'Merchandise' => $Merchandise
        ])->layout('layouts.guest');
    }
}
