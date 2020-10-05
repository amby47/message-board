<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Repository\MessageRepositoryInterface;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $messageRepository;

    public function __construct(MessageRepositoryInterface $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function get() {
        return $this->messageRepository->all();
    }

    public function create(Request $request) {
        $request->validate([
            'message' => 'required',
            'user_name' => 'required',
            'user_email' => 'required|email',
        ]);
        return $this->messageRepository->create($request->message, $request->user_name, $request->user_email);
    }
}
