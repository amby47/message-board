<?php

namespace App\Repository;

use App\Models\Message;
use App\Models\MessageReply;
use Illuminate\Support\Collection;

interface MessageReplyRepositoryInterface
{
   public function all($messageId): Collection;
   public function create($message, $user_name, $user_email, $messageId): MessageReply;
}
