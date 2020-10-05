<?php

namespace App\Repository\Eloquent;

use App\Models\Message;
use App\Repository\MessageRepositoryInterface;
use Illuminate\Support\Collection;

class MessageRepository implements MessageRepositoryInterface
{
    public function all(): Collection {
        return Message::with('replies')->get();
    }

    public function create($message_content, $user_name, $user_email): Message {
        $message = new Message;
        $message->message = $message_content;
        $message->user_name = $user_name;
        $message->user_email = $user_email;
        $message->save();
        return $message;
    }

}
