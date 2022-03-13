<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index(){
        $boards = Board::all();
        return view('boards.index', compact('boards'));
    }

    public function create(){
        return view('boards.create');
    }

    public function store(Request $request){
        $board = Board::create([
            'title'=>$request->input('title'),
            'story'=>$request->input('story')
        ]);
        return redirect('/boards');
    }

    public function show(Board $board){
        return view('board.show', compact('board'));
    }

}
