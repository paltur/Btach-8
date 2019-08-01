<?php

namespace App\Http\Controllers;
use App\Answer;
use Illuminate\Http\Request;

class AcceptAnswerController extends Controller
{
    public function accept(Answer $answer){
        $this->authorize('accept', $answer);
        $answer->question->bestAnswerAccept($answer);
        return back();
    }
}
