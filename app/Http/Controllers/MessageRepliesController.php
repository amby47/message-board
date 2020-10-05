<?php

namespace App\Http\Controllers;

use App\Models\MessageReply;
use App\Repository\MessageReplyRepositoryInterface;
use Illuminate\Http\Request;

class MessageRepliesController extends Controller
{
    private $messageReplyRepository;

    public function __construct(MessageReplyRepositoryInterface $messageReplyRepository)
    {
        $this->messageReplyRepository = $messageReplyRepository;
    }

    public function get($messageId) {
        return $this->messageReplyRepository->all($messageId);
    }

    public function create($messageId, Request $request) {
        $request->validate([
            'message' => 'required',
            'user_name' => 'required',
            'user_email' => 'required',
        ]);
        return $this
        ->messageReplyRepository
        ->create($request->message, $request->user_name, $request->user_email, $messageId);
    }
}
