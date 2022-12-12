<?php

namespace App\Http\Livewire\Dashboard\Filter;

use App\Models\FilterType;
use App\Models\MainCategory;
use Livewire\Component;

class Create extends Component
{

    public $filter_id;
    public $name;
    public $values;
    public $filter_type_id;
    public $main_categorie_id;

    public $filterTypes;
    public $categoris;
    public $modals;

    public $selectedCategory;
    public $selectedType;


    function getModels($path)
    {
        $out = [];
        $results = scandir($path);
        foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            $filename = $result;
            if (is_dir($filename)) {
                $out = array_merge($out, getModels($filename));
            } else {
                $out[] = substr($filename, 0, -4);
            }
        }
        $del_val = [
            'AccountType',
            'AdStatus',
            'AdType', 'Ad', 'Favorite', 'Wallet', 'Terms', 'User', 'Notifcation', 'PushNotification', 'Rate', 'SpcialAd', 'Filter', 'FilterType'
        ];
        foreach ($del_val as $value) {
            if (($key = array_search($value, $out)) !== false) {
                unset($out[$key]);
            }
        }
        return $out;
    }

    // dd(getModels($path));

    public function mount()
    {
        $path = app_path() . "\Models";
        $this->categoris = MainCategory::all();
        $this->filterTypes = FilterType::all();
        $this->modals = $this->getModels($path);
    }

    public function clear()
    {
        $this->filter_id = null;
        $this->name = null;
        $this->values = null;
        $this->filter_type_id = null;
        $this->main_categorie_id = null;
    }

    public function Create()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:48'],
            'values' => ['required'],
            'filter_type_id' => ['required', 'integer', 'exists:filter_types,filter_type_id'],
            'main_categorie_id' => ['required', 'integer', 'exists:main_categories,main_categorie_id'],
        ]);

        ModelsFilter::Create([
            'name' => $this->name,
            'values' => $this->values,
            'filter_type_id' => $this->filter_type_id,
            'main_categorie_id' => $this->main_categorie_id,
        ]);
        session()->flash('message', 'Filter Created Successfully');
    }

    public function render()
    {
        return view('livewire.dashboard.filter.create');
    }
}
