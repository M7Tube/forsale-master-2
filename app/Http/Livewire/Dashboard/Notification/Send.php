<?php

namespace App\Http\Livewire\Dashboard\Notification;

use App\Models\Notifcation;
use Livewire\Component;
use Kutia\Larafirebase\Facades\Larafirebase;

class Send extends Component
{
    public $title;
    public $Body;
    public $message;

    public function clear()
    {
        $this->title = null;
        $this->Body = null;
    }

    public function Send()
    {
        $this->message = Larafirebase::withTitle($this->title)
            ->withBody($this->Body)
            ->withImage('https://firebase.google.com/images/social.png')
            ->withClickAction('admin/notifications')
            ->withPriority('high')
            ->sendNotification('eWzxpXJlTlKYwwCwfp133x:APA91bGbqjflaE0xBz-Ka2JSN3_nmlUo3-c_NXQWFfWlYhEy2ndM2wOhaoVGeSqm--bk7lJOSSCdGLsmouGNZo2sCmY11ZY8kK8exPCqdNedBWXFdtJnq5a1C9Bp2o3q68WxYA4iSp0n');
        if (json_decode($this->message)->success == 1) {
            Notifcation::Create([
                'title' => $this->title ?? '',
                'body' => $this->Body ?? '',
                'logo' => '',
                'user_id' => 6 ?? 0,
                'ad_id' => 6 ?? 0,
            ]);
            $this->clear();
        }
    }//
    public function render()
    {
        return view('livewire.dashboard.notification.send');
    }
}
