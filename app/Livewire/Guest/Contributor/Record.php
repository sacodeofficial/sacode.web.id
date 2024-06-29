<?php

namespace App\Livewire\Guest\Contributor;

use App\Models\Contributor;
use Livewire\Component;
use Livewire\WithPagination;

class Record extends Component
{
    use WithPagination;
    
    public function render()
    {
        $Contributor = Contributor::all();

        return view('livewire.guest.Contributor.record', [
            'Contributor' => $Contributor
        ])->layout('layouts.guest');
    }
}
