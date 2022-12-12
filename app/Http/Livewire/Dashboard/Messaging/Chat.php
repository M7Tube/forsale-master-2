<?php

namespace App\Http\Livewire\Dashboard\Messaging;

use App\Models\Message;
use Kutia\Larafirebase\Facades\Larafirebase;
use Livewire\Component;

class Chat extends Component
{
    public $userId;
    public $messageText;

    public function mount()
    {
        $this->userId = request()->query('id');
    }
    public function sendMessage()
    {
        $message = Message::Create(
            [
                'message' => $this->messageText,
                'user_id' => $this->userId,
                'is_admin' => 1,
                'read_state' => 0,
            ]
        );
        //TODO adjust fcm token
        // Larafirebase::withTitle('New Message - رسالة جديدة')
        //     ->withBody($message->message)
        //     // ->withImage('https://firebase.google.com/images/social.png')
        //     ->withClickAction('admin/notifications')
        //     ->withPriority('high')
        //     ->sendNotification('eZm9--mjRHG8s5GQ8r1Gjg:APA91bHM6SWaCPs1MgMMHZSQAzXhObndU-2BP031eUKLyV_LMPR2Gdl06-gHjXcRtcKsLsReHJYbPaZhStXywE36azlrBqUKXUQsKmqG6G-EWq7YkFO5ZXmykvtekHdpoIE8JURsy1s2');
        $this->reset('messageText');
    }
    public function render()
    {
        $messages = Message::with('user')
            ->where('user_id', $this->userId)
            ->latest()
            ->get()
            ->sortBy('message_id');
        foreach ($messages as $message) {
            if ($message->is_admin != 1) {
                $message->read_state = 1;
                $message->save();
            }
        }
        return view('livewire.dashboard.messaging.chat', compact('messages'));
    }
}
