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

    // public $CodingCourses;

    public function render(): View
    {
        $CodingCourses = CodingCourses::paginate(10);
        // $CodingCourses = CodingCourses::get();

        // dd($CodingCourses);  

        return view('livewire.guest.CodingCourses.record', 
                        [
                            'CodingCourses' => $CodingCourses
                        ]
                    )->layout('layouts.guest');
    }
}
