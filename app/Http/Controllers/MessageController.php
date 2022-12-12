<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Traits\MessageTrait;
use App\Models\User;
use Kutia\Larafirebase\Facades\Larafirebase;

class MessageController extends Controller
{
    use MessageTrait;
    //
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => ['required', 'string'],
            'is_admin' => ['required', 'integer', 'in:0'],
            'read_state' => ['required', 'integer', 'in:0'],
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
        ]);
        $message = Message::Create([
            'message' => $request->message,
            'is_admin' =>  $request->is_admin,
            'read_state' => $request->read_state,
            'user_id' =>  auth()->user()['user_id'],
        ]);
        if ($message) {
            // Larafirebase::withTitle('New Message - رسالة جديدة')
            //     ->withBody($message->message)
            //     // ->withImage('https://firebase.google.com/images/social.png')
            //     ->withClickAction('admin/notifications')
            //     ->withPriority('high')
            //     ->sendNotification('eZm9--mjRHG8s5GQ8r1Gjg:APA91bHM6SWaCPs1MgMMHZSQAzXhObndU-2BP031eUKLyV_LMPR2Gdl06-gHjXcRtcKsLsReHJYbPaZhStXywE36azlrBqUKXUQsKmqG6G-EWq7YkFO5ZXmykvtekHdpoIE8JURsy1s2');
            return $this->success('Message', $message);
        } else {
            return $this->fails();
        }
    }

    public function receiveMessage(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
        ]);
        $user = User::where('user_id', auth()->user()['user_id'])->first();
        if ($user) {
            $chats = Message::where('user_id', auth()->user()['user_id'])->get();
            if ($chats) {
                return $this->success('Messages', $chats);
            } else {
                return $this->fails();
            }
        } else {
            return $this->fails();
        }
    }
}
