<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TodoItem;

class TodoListController extends Controller
{

    public function index(){
        return view('welcome', ['listItems' => TodoItem::all()]); 
        //To only get incomplete todos TodoItem::where('is_complete', 0)->get()
    }

    public function markComplete($id) {

        $listItem = TodoItem::find($id);
        $listItem->is_complete = $listItem->is_complete === 0 ? 1 : 0;
        $listItem->save();

        return redirect("/");
    }

    public function removeItem($id) {
        
        $listItem = TodoItem::where('id', $id)->firstorfail()->delete();

        return redirect("/");
    }

    public function saveItem(Request $request){
        $newListItem = new TodoItem;
        $newListItem->name = $request->todoItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect("/");
    }
}
