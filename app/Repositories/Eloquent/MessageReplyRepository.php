<?php

namespace App\Repository\Eloquent;

use App\Models\Message;
use App\Models\MessageReply;
use App\Repository\MessageReplyRepositoryInterface;
use Illuminate\Support\Collection;

class MessageReplyRepository implements MessageReplyRepositoryInterface
{
    public function all($messageId): Collection {
        return MessageReply::where('message_id', '=', $messageId)->get();
    }

    public function create($message, $user_name, $user_email, $messageId): MessageReply {
        $reply = new MessageReply();
        $reply->message = $message;
        $reply->user_name = $user_name;
        $reply->user_email = $user_email;
        $reply->message_id = $messageId;
        $reply->save();
        return $reply;
    }

}
