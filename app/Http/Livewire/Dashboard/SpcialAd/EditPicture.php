<?php

namespace App\Http\Livewire\Dashboard\SpcialAd;

use App\Models\SpcialAd;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPicture extends Component
{
    use WithFileUploads;

    public $spcial_ad_id;
    public $picture;
    public $Oldpicture;

    public function mount()
    {
        $this->spcial_ad_id = request('id');
        $ad = SpcialAd::find($this->spcial_ad_id);
        $this->picture = null;
        $this->Oldpicture = $ad->picture;
    }

    public function clear()
    {
        $this->spcial_ad_id = null;
        $this->picture = null;
        $this->Oldpicture = null;
    }

    public function update()
    {
        $this->validate([
            'picture' => ['sometimes', 'max:10240', 'mimes:png,jpg,jpeg'],
        ]);
        if ($this->picture != null) {
            if (Storage::disk('local')->exists($this->picture) && $this->picture != null) {
                Storage::delete($this->picture);
                $pic = $this->picture->storeAs('img', $this->picture->getClientOriginalName());
                // $request->file('img')->move(public_path('images'), $this->picture);
                // $request->file('img')->move(public_path('images'), $this->picture = uniqid() . $request->file('img')->getClientOriginalName());
            }
            $pic = $this->picture->storeAs('img', $this->picture->getClientOriginalName());
            // $pic = $this->picture->storeAs('img', $this->picture->getClientOriginalName());
        }
        $this->Oldpicture = $this->picture->getClientOriginalName();

        $ad = SpcialAd::find($this->spcial_ad_id);
        if ($ad) {
            $ad->update([
                'picture' => $this->picture->getClientOriginalName(),
            ]);
            session()->flash('message', 'Spcial Ad Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This Spcial Ad');
        }
        $this->reset('picture');
        $this->clear();
        return redirect()->route('web.crud.SpcialAd', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.spcial-ad.edit-picture');
    }
}
