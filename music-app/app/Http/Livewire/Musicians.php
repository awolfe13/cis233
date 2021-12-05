<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Musicians extends Component
{
    use WithPagination;
    
    public $sortBy = '';
    public $direction = 'asc';
    public $numOfMusicians = 10;
    public $search = '';
    protected $queryString = [
        'search' => ['except' => ''],
        'sortBy' => ['except' => ''],
        'direction' => ['except' => ''],
    ];

    public function mount() {
       $this->search = request()->query('search', $this->search);
    }

    public function doSort($field, $dir) {
        $this->sortBy = $field;
        $this->direction = $dir;
    }


    public function render() {
        $musicians = \App\Musician::where('first_name', 'like', '%'.$this->search.'%')
                                    ->orWhere('last_name', 'like', '%'.$this->search.'%')
                                    ->orWhere('instrument','like', '%'.$this->search.'%')
                                    ->orderBy($this->sortBy, $this->direction)
                                    ->paginate($this->numOfMusicians);
        $allMusicians = \App\Musician::count();
                                    
                                     
        return view('livewire.musicians', ['musicians' => $musicians, 'allMusicians' => $allMusicians]);
    }
}