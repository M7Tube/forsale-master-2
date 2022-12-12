<?php

namespace App\Http\Livewire\Dashboard\SpcialAd;

use App\Models\SpcialAd;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;

class Create extends Component
{

    use WithFileUploads;

    public $spcial_ad_id;
    public $en_title;
    public $ar_title;
    public $en_desc;
    public $ar_desc;
    public $picture;
    public $is_golden;
    public $user_id;

    public function mount()
    {
        $this->user_id = auth()->user()['user_id'];
        $this->is_golden = 2;
    }


    // public function updatedEnTitle()
    // {
    //     $this->validate([
    //         'en_title' => ['required', 'string', 'max:72'],
    //         'ar_title' => ['required', 'string', 'max:72'],
    //         'en_desc' => ['required', 'string', 'max:288'],
    //         'ar_desc' => ['required', 'string', 'max:288'],
    //         'picture' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
    //         'is_golden' => ['required', 'integer', 'between:1,2'],
    //         'user_id' => ['required', 'integer', 'exists:users,user_id'],
    //     ]);
    // }

    // public function updatedArTitle()
    // {
    //     $this->validate([
    //         'en_title' => ['required', 'string', 'max:72'],
    //         'ar_title' => ['required', 'string', 'max:72'],
    //         'en_desc' => ['required', 'string', 'max:288'],
    //         'ar_desc' => ['required', 'string', 'max:288'],
    //         'picture' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
    //         'is_golden' => ['required', 'integer', 'between:1,2'],
    //         'user_id' => ['required', 'integer', 'exists:users,user_id'],
    //     ]);
    // }

    // public function updatedEnDesc()
    // {
    //     $this->validate([
    //         'en_title' => ['required', 'string', 'max:72'],
    //         'ar_title' => ['required', 'string', 'max:72'],
    //         'en_desc' => ['required', 'string', 'max:288'],
    //         'ar_desc' => ['required', 'string', 'max:288'],
    //         'picture' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
    //         'is_golden' => ['required', 'integer', 'between:1,2'],
    //         'user_id' => ['required', 'integer', 'exists:users,user_id'],
    //     ]);
    // }

    // public function updatedArDesc()
    // {
    //     $this->validate([
    //         'en_title' => ['required', 'string', 'max:72'],
    //         'ar_title' => ['required', 'string', 'max:72'],
    //         'en_desc' => ['required', 'string', 'max:288'],
    //         'ar_desc' => ['required', 'string', 'max:288'],
    //         'picture' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
    //         'is_golden' => ['required', 'integer', 'between:1,2'],
    //         'user_id' => ['required', 'integer', 'exists:users,user_id'],
    //     ]);
    // }

    // public function updatedIsGolden()
    // {
    //     $this->validate([
    //         'en_title' => ['required', 'string', 'max:72'],
    //         'ar_title' => ['required', 'string', 'max:72'],
    //         'en_desc' => ['required', 'string', 'max:288'],
    //         'ar_desc' => ['required', 'string', 'max:288'],
    //         'picture' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
    //         'is_golden' => ['required', 'integer', 'between:1,2'],
    //         'user_id' => ['required', 'integer', 'exists:users,user_id'],
    //     ]);
    // }

    // public function updatedPicture()
    // {
    //     $this->validate([
    //         'en_title' => ['required', 'string', 'max:72'],
    //         'ar_title' => ['required', 'string', 'max:72'],
    //         'en_desc' => ['required', 'string', 'max:288'],
    //         'ar_desc' => ['required', 'string', 'max:288'],
    //         'picture' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
    //         'is_golden' => ['required', 'integer', 'between:1,2'],
    //         'user_id' => ['required', 'integer', 'exists:users,user_id'],
    //     ]);
    // }

    public function Create()
    {
        $this->validate([
            'en_title' => ['required', 'string', 'max:72'],
            'ar_title' => ['required', 'string', 'max:72'],
            'en_desc' => ['required', 'string', 'max:288'],
            'ar_desc' => ['required', 'string', 'max:288'],
            'picture' => ['required', 'mimes:png,jpg,jpeg', 'max:10240'],
            'is_golden' => ['required', 'integer', 'between:1,2'],
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
        ]);
        $name = $this->picture->getClientOriginalName() . time() . '.jpg';
        $img = Image::make($this->picture)->resize(1920, 1080)->encode('jpg', 100)->interlace()->insert(storage_path('app/img/watermark.png'), 'center')->save(storage_path('app/img/' . $name));
        if ($this->is_golden == 1) {
            $old = SpcialAd::where('is_golden', 1)->update(['is_golden' => 2]);
        }
        SpcialAd::Create([
            'en_title' => $this->en_title ?? null,
            'ar_title' => $this->ar_title ?? null,
            'en_desc' => $this->en_desc ?? null,
            'ar_desc' => $this->ar_desc ?? null,
            'picture' => $name ?? 'defualt.png',
            'is_golden' => $this->is_golden ?? 2,
            'duration' => 5 ?? 5,
            'user_id' => $this->user_id ?? 1,
        ]);
        session()->flash('success', __('Spcial Ad Created Successfully'));
        $this->clear();
        return redirect()->route('web.crud.SpcialAd', app()->getLocale());
    }

    public function clear()
    {
        $this->spcial_ad_id = null;
        $this->en_title = null;
        $this->ar_title = null;
        $this->en_desc = null;
        $this->ar_desc = null;
        $this->picture = null;
        $this->is_golden = null;
        $this->user_id = null;
    }

    public function render()
    {
        return view('livewire.dashboard.spcial-ad.create');
    }
}
