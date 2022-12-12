<?php

namespace App\Http\Livewire\Dashboard\ManufacturingYear;

use App\Models\ManufacturingYear;
use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{
    use LivewireWithPagination;

    public $year_id;
    public $from;
    public $to;

    // public $orderBy = 'from';
    // public $orderAsc = true;
    // public $search = '';

    public function Create()
    {
        $this->validate([
            'from' => ['required', 'integer'],
            'to' => ['required', 'integer'],
        ]);
        ManufacturingYear::Create([
            'from' => $this->from,
            'to' => $this->to,
        ]);
        $this->clear();
        session()->flash('message', 'Manufacturing Year Created Successfully');
        $this->emit('ManufacturingYearCreated');
    }

    public function edit($id)
    {
        $mY = ManufacturingYear::where('year_id', $id)->first();
        if ($mY) {
            $this->year_id = $mY->year_id;
            $this->from = $mY->from;
            $this->to = $mY->to;
        } else {
            return session()->flash('WrongManufacturingYear', 'You Can Not Edit This Manufacturing Year');
        }
    }
    public function clear()
    {
        $this->year_id = null;
        $this->from = null;
        $this->to = null;
    }
    public function update()
    {
        $this->validate([
            'from' => ['integer'],
            'to' => ['integer'],
        ]);
        $mY = ManufacturingYear::find($this->year_id);
        if ($mY) {
            $mY->update([
                'from' => $this->from,
                'to' => $this->to,
            ]);
            session()->flash('message', 'Manufacturing Year Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This Manufacturing Year');
        }
        $this->clear();
        $this->emit('ManufacturingYearUpdated');
    }

    public function delete()
    {
        ManufacturingYear::where('year_id', $this->year_id)->delete();
        session()->flash('message', 'Manufacturing Year Deleted Successfully');
        $this->emit('ManufacturingYearUpdated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.manufacturing-year.index',
            [
                'mY' => ManufacturingYear::simplePaginate(5),
            ]
        );
    }
}
