<?php

namespace App\Http\Livewire\Website;

use App\Models\Favorite;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class MyFavorite extends Component
{
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user_id;
    public $readyToLoad = false;

    public function boot()
    {
        $this->user_id = session()->get('WebLoggedIn', [])['user_id'];
    }

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view(
            'livewire.website.my-favorite',
            [
                'data' => $this->readyToLoad
                    ? Favorite::where('user_id', $this->user_id)->with('car', 'real_estate', 'job','mobile')->paginate(10)
                    : [],
            ],
        );
    }
}
