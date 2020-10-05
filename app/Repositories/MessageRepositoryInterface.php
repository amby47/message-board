<?php

namespace App\Repository;

use App\Models\Message;
use Illuminate\Support\Collection;

interface MessageRepositoryInterface
{
   public function all(): Collection;
   public function create($message, $user_name, $user_email): Message;
}
