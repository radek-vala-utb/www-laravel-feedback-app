<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Contracts\View\View;

class FeedbackController extends Controller
{
    public function create(): View
    {
        return view('welcome');
    }

    public function index(): View
    {
        $feedbacks = Feedback::query()
            ->select(['created_at', 'lectures_value_rating'])
            ->latest()
            ->get();

        return view('feedbacks.index', compact('feedbacks'));
    }

    public function show(int $feedbackId): Feedback
    {
        return Feedback::query()->findOrFail($feedbackId);
    }
}
