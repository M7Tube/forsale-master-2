<?php

namespace App\Http\Livewire\Website;

use App\Models\Message;
use Livewire\Component;

class ContactWithManger extends Component
{
    public $user_id;
    public $messageText;

    public function boot()
    {
        if (!session()->get('WebLoggedIn', [])) {
            abort(403);
        }
        $this->user_id = session()->get('WebLoggedIn', [])['user_id'];
    }

    public function sendMessage()
    {
        $message = Message::Create([
            'message' => $this->messageText,
            'is_admin' => 0,
            'read_state' => 0,
            'user_id' => $this->user_id
        ]);
        $this->reset('messageText');
    }

    public function render()
    {
        $messages = Message::with('user')
            ->where('user_id', $this->user_id)
            ->latest()
            ->get()
            ->sortBy('message_id');
        foreach ($messages as $message) {
            $message->read_state = 1;
            $message->save();
        }
        return view('livewire.website.contact-with-manger', [
            'messages' => $messages
        ]);
    }
}
