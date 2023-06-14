<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function site()
    {
        $feedback = Feedback::all()->toArray();

        return view(
            'feedbacks',
            ['lista' => $feedback]
        );
    }
    public function salvar_novo(Request $dados)
    {
        $feedback = new Feedback();
        $feedback->nome = $dados->input("nome");
        $feedback->msg = $dados->input("msg");
        $feedback->save();

        return redirect('/feedbacks');
    }
}
