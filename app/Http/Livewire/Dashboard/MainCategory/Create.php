<?php

namespace App\Http\Livewire\Dashboard\MainCategory;

use Illuminate\Support\Facades\Storage;
use App\Models\MainCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $main_categorie_id;
    public $en_name;
    public $ar_name;
    public $icon;

    public function updatedEnName()
    {
        $this->validate([
            'en_name' => ['required', 'string', 'max:48'],
            'ar_name' => ['required', 'string', 'max:48'],
            'icon' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
        ]);
    }

    public function updatedArName()
    {
        $this->validate([
            'en_name' => ['required', 'string', 'max:48'],
            'ar_name' => ['required', 'string', 'max:48'],
            'icon' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
        ]);
    }

    public function updatedIcon()
    {
        $this->validate([
            'en_name' => ['required', 'string', 'max:48'],
            'ar_name' => ['required', 'string', 'max:48'],
            'icon' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
        ]);
    }
    public function Create()
    {
        $this->validate([
            'en_name' => ['required', 'string', 'max:48'],
            'ar_name' => ['required', 'string', 'max:48'],
            'icon' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
        ]);
        MainCategory::Create([
            'en_name' => $this->en_name,
            'ar_name' => $this->ar_name,
            'icon' => 'img/' . $this->icon->getClientOriginalName(),
        ]);
        if (Storage::disk('local')->exists('img/', $this->icon->getClientOriginalName())) {
            Storage::delete('img/', $this->icon->getClientOriginalName());
            $this->icon->storeAs('img', $this->icon->getClientOriginalName());
        }
        $this->icon->storeAs('img', $this->icon->getClientOriginalName());
        $this->clear();
        session()->flash('success', 'Name Created Successfully');
    }
    public function clear()
    {
        $this->main_categorie_id = null;
        $this->en_name = null;
        $this->ar_name = null;
        $this->icon = null;
    }
    public function render()
    {
        return view('livewire.dashboard.main-category.create');
    }
}
