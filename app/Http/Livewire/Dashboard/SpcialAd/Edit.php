<?php

namespace App\Http\Livewire\Dashboard\SpcialAd;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\SpcialAd;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $spcial_ad_id;
    public $en_title;
    public $ar_title;
    public $en_desc;
    public $ar_desc;
    public $picture;
    public $Oldpicture;
    public $user_id;

    public function mount()
    {
        $this->spcial_ad_id = request('id');
        $ad = SpcialAd::find($this->spcial_ad_id);
        $this->en_title = $ad->en_title;
        $this->ar_title = $ad->ar_title;
        $this->en_desc = $ad->en_desc;
        $this->ar_desc = $ad->ar_desc;
        $this->picture = null;
        $this->Oldpicture = $ad->picture;
        $this->user_id = $ad->user_id;
    }

    public function clear()
    {
        $this->spcial_ad_id = null;
        $this->en_title = null;
        $this->ar_title = null;
        $this->en_desc = null;
        $this->ar_desc = null;
        $this->picture = null;
        $this->Oldpicture = null;
        $this->user_id = null;
    }

    public function update()
    {
        $this->validate([
            'en_title' => ['string', 'max:72'],
            'ar_title' => ['string', 'max:72'],
            'en_desc' => ['string', 'max:288'],
            'ar_desc' => ['string', 'max:288'],
            // 'picture' => ['sometimes', 'max:10240', 'mimes:png,jpg,jpeg'],
            'user_id' => ['integer', 'exists:users,user_id'],
        ]);
        // if ($this->picture != null) {
        //     if (Storage::disk('local')->exists($this->picture) && $this->picture != null) {
        //         Storage::delete($this->picture);
        //         $pic = $this->picture->storeAs('img', $this->picture->getClientOriginalName());
        //         // $request->file('img')->move(public_path('images'), $this->picture);
        //         // $request->file('img')->move(public_path('images'), $this->picture = uniqid() . $request->file('img')->getClientOriginalName());
        //     }
        //     $pic = $this->picture->storeAs('img', $this->picture->getClientOriginalName());
        //     // $pic = $this->picture->storeAs('img', $this->picture->getClientOriginalName());
        // }
        // $this->Oldpicture = $this->picture->getClientOriginalName();

        $ad = SpcialAd::find($this->spcial_ad_id);
        if ($ad) {
            $ad->update([
                'en_title' => $this->en_title,
                'ar_title' => $this->ar_title,
                'en_desc' => $this->en_desc,
                'ar_desc' => $this->ar_desc,
                // 'picture' => $this->picture->getClientOriginalName(),
            ]);
            session()->flash('message', 'Spcial Ad Updated Successfully');
        } else {
            session()->flash('message', 'You Can Not Edit This Spcial Ad');
        }
        // $this->reset('picture');
        $this->clear();
        return redirect()->route('web.crud.SpcialAd', app()->getLocale());
        // $this->emit('SpcialAdUpdated');
    }

    public function delete()
    {
        SpcialAd::where('spcial_ad_id', $this->spcial_ad_id)->delete();
        return redirect()->route('web.crud.SpcialAd', app()->getLocale());
    }
    public function render()
    {
        return view('livewire.dashboard.spcial-ad.edit');
    }
}
