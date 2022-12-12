<?php

namespace App\Http\Livewire\Website;

use App\Models\Cars;
use App\Models\Favorite;
use App\Models\Jobs;
use App\Models\RealEstate;
use App\Http\Traits\MessageTrait;
use App\Models\Mobiles;
use Livewire\Component;

class Ad extends Component
{
    use MessageTrait;
    protected $ad;
    protected $shareComponent;
    public $is_favorite;
    public $user_id;
    public $checkFav;

    public function boot()
    {
        if (session()->get('WebLoggedIn', [])) {
            $this->user_id = session()->get('WebLoggedIn', [])['user_id'] ?? 0;
            if (request('category') == 1) { //cars
                $this->checkFav = Favorite::where([['car_id', request('id')], ['user_id', $this->user_id]])->first();
            } else if (request('category') == 2) { //real estate
                $this->checkFav = Favorite::where([['real_estate_id', request('id')], ['user_id', $this->user_id]])->first();
            } else if (request('category') == 3) { //job
                $this->checkFav = Favorite::where([['job_id', request('id')], ['user_id', $this->user_id]])->first();
            } else if (request('category') == 4) { //mobiles
                $this->checkFav = Favorite::where([['mobile_id', request('id')], ['user_id', $this->user_id]])->first();
            }
            if ($this->checkFav) {
                $this->is_favorite = true;
            } else {
                $this->is_favorite = false;
            }
        }
        $this->shareComponent = \Share::currentPage()->facebook()->twitter()->telegram()->whatsapp();

        if (request('category') == 1) { //cars
            $ad = Cars::find(request('id'));
            if ($ad) {
                // if ($ad->manger_accept == 2) {
                $this->ad = $ad;
                $ad->watch_count++;
                $ad->save();
                // } else {
                //     abort(404, __('This Ad Is Not Active Yet'));
                // }
            } else {
                abort(404);
            }
        } else if (request('category') == 2) { //real estate
            $ad = RealEstate::find(request('id'));
            if ($ad) {
                // if ($ad->manger_accept == 2) {
                $this->ad = $ad;
                $ad->watch_count++;
                $ad->save();
                // } else {
                //     abort(404, __('This Ad Is Not Active Yet'));
                // }
            } else {
                abort(404);
            }
            // $this->ad = $ad;
        } else if (request('category') == 3) { //job
            $ad =  Jobs::find(request('id'));
            if ($ad) {
                // if ($ad->manger_accept == 2) {
                $this->ad = $ad;
                $ad->watch_count++;
                $ad->save();
                // } else {
                //     abort(404, __('This Ad Is Not Active Yet'));
                // }
            } else {
                abort(404);
            }
            // $this->ad = $ad;
        } else if (request('category') == 4) { //Mobiles
            $ad =  Mobiles::find(request('id'));
            if ($ad) {
                // if ($ad->manger_accept == 2) {
                $this->ad = $ad;
                $ad->watch_count++;
                $ad->save();
                // } else {
                //     abort(404, __('This Ad Is Not Active Yet'));
                // }
            } else {
                abort(404);
            }
            // $this->ad = $ad;
        }
    }

    public function ATF($category, $id)
    {

        if ($category == 1) { //car ad
            $check = Favorite::where([['car_id', $id], ['user_id', $this->user_id]])->first();
            if ($check) {
                $check->delete();
                $this->success('Favorite', 'Deleted Successfully');
            } else {
                $data = Favorite::Create([
                    'car_id' => $id ?? 0,
                    'real_estate_id' => 0,
                    'job_id' => 0,
                    'mobile_id' => 0,
                    'user_id' => $this->user_id,
                ]);
            }
        } else if ($category == 2) { //real estate ad
            $check = Favorite::where([['real_estate_id', $id], ['user_id', $this->user_id]])->first();
            if ($check) {
                $check->delete();
                $this->success('Favorite', 'Deleted Successfully');
            } else {
                $data = Favorite::Create([
                    'car_id' => 0,
                    'real_estate_id' => $id ?? 0,
                    'job_id' => 0,
                    'mobile_id' => 0,
                    'user_id' => $this->user_id,
                ]);
            }
        } else if ($category == 3) { //job ad
            $check = Favorite::where([['job_id', $id], ['user_id', $this->user_id]])->first();
            if ($check) {
                $check->delete();
                $this->success('Favorite', 'Deleted Successfully');
            } else {
                $data = Favorite::Create([
                    'car_id' => 0,
                    'real_estate_id' => 0,
                    'job_id' => $id ?? 0,
                    'mobile_id' => 0,
                    'user_id' => $this->user_id,
                ]);
            }
        } else if ($category == 4) { //mobile ad
            $check = Favorite::where([['mobile_id', $id], ['user_id', $this->user_id]])->first();
            if ($check) {
                $check->delete();
                $this->success('Favorite', 'Deleted Successfully');
            } else {
                $data = Favorite::Create([
                    'car_id' => 0,
                    'real_estate_id' => 0,
                    'job_id' => 0,
                    'mobile_id' => $id ?? 0,
                    'user_id' => $this->user_id,
                ]);
            }
        } else {
            $this->fails();
        }
        return redirect(request()->header('Referer'));
        // return redirect()->route('website.myFavorite', app()->getLocale());
        // if ($category == 1) {
        //     $fav = Favorite::Create([
        //         'user_id' => 1,
        //         'car_id' => $id,
        //         'real_estate_id' => 0,
        //         'job_id' => 0,
        //     ]);
        // }
    }

    public function render()
    {
        return view(
            'livewire.website.ad',
            [
                'ad' => $this->ad,
                'shareComponent' => $this->shareComponent,
            ]
        );
    }
}
