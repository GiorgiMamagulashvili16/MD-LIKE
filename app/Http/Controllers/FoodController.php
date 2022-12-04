<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\DB;
use Ramsey\Collection\Collection;

class FoodController extends Controller
{
    
    function showFoods() {
        $data = DB::table('food')->orderBy('order', 'asc')->get();
        $groupedData = $data->groupBy('category');
        foreach($groupedData as $key => $item) {
            $d = $item->take(4);
            $groupedData[$key] = $d;
        }
        return view("list",["foods" => $groupedData]);
    }

    function showCategoryItems($category) {
        $data = DB::table('food')->where('category',$category)->get();
        return view("category", ["foods" => $data]);
    }

    function adminPanel() {
        $data = DB::table('food')->get();
        return view("admin", ["foods" => $data]);
    }

    function addFoodPage() {
        return view("add");
    }

    function addFood(Request $request) {
        if(request()->input("name")) {
            Food::create([
                "name" => request("name"),
                "category" => request('category'),
                "order" => request('order')
            ]);
            return redirect()->route("admin");
        }
    }

    function deleteFood($id) {
        DB::table('food')->where('id', $id)->delete();
        return redirect()->route("admin");
    }

    function editFoodPage($id) {
        $currentItem = DB::table('food')->where('id', $id)->first();
        return view("edit", ["food" => $currentItem]);
    }

    function editFood(Request $request, $id) {
        if(request()->input("editname")){
            $oldFood =Food::find($id);
            $oldFood->name = request("editname");
            $oldFood->category = request("editcategory");
            $oldFood->order = request("editorder");
            $oldFood->update();
            return redirect()->route("admin");
        }
        return redirect()->route("admin");
    }
}
