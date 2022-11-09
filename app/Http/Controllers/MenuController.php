<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function show()
    {
        $results = [];
        $distinctKeys = Menu::select('group')->distinct()->get();
        foreach ($distinctKeys as $key) {
            $rows = Menu::select()->where('group', '=', $key->group)->orderBy('position')->limit(4)->get();
            array_push($results, $rows);
        }
        return view('welcome', ['results' => $results]);
    }
    public function search(Request $request){
        $results = [];
        $row = Menu::select()->where('name', '=', $request->input('name'))->get();
        array_push($results, $row);
        return view('welcome', ['results' => $results]);
    }
    public function showGroup($group){
        $rows = Menu::select()->where('group', '=', $group)->orderBy('position')->get();
        return view('group', ['rows' => $rows]);

    }
    public function showAdmin(){
        $results = [];
        $distinctKeys = Menu::select('group')->distinct()->get();
        foreach ($distinctKeys as $key) {
            $rows = Menu::select()->where('group', '=', $key->group)->orderBy('position')->get();
            array_push($results, $rows);
        }
        return view('admin', ['results' => $results]);
    }
    public function delete(Menu $menu){
        $menu->delete();
        return redirect()->route('admin');
    }
    public function showEdit(Menu $menu){
        return view('edit', ['menu'=>$menu]);
    }
    public function cu(Request $request, Menu $menu){
        if (isset($menu)){
            $menu->fill($request->all())->save();
            return redirect()->route('admin');
        }
        Menu::create($request->all());
        return redirect()->route('admin');
    }

}
