<?php

namespace App\Livewire\Guest\CodingCourses;

use Livewire\Component;

use App\Models\CodingCourses;
use Livewire\Attributes\On;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Record extends Component
{
    use WithPagination;

    public function render(): View
    {
        $CodingCourses = CodingCourses::latest()->paginate(6);

        return view('livewire.guest.codingcourses.record', 
                        [
                            'CodingCourses' => $CodingCourses
                        ]
                    )->layout('layouts.guest');
    }
}
