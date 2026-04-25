<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class FeedbackController extends Controller
{
    public function create(): View
    {
        return view('welcome');
    }

    public function index(): Collection
    {
        return Feedback::query()
            ->latest()
            ->get();
    }

    public function show(int $feedbackId): Feedback
    {
        return Feedback::query()->findOrFail($feedbackId);
    }
}
