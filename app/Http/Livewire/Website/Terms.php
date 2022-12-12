<?php

namespace App\Http\Livewire\Website;

use App\Models\Terms as ModelsTerms;
use Livewire\Component;

class Terms extends Component
{
    public $term;

    public function mount()
    {
        $this->term = ModelsTerms::first(['en_terms_conditions', 'ar_terms_conditions']);
    }

    public function render()
    {
        return view('livewire.website.terms');
    }
}
