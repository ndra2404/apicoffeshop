<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MenuModel;

class MenuController extends Controller
{
    //
    public function index()
    {
        $menu = MenuModel::all();
        return response()->json(
            [
                'status' => 'success',
                'data' => $menu,
                'length' => count($menu)
            ],
            200
        );
    }
    public function getDetail($id)
    {
        $menu = MenuModel::where('id_menu', $id)->first();
        return response()->json(
            [
                'status' => 'success',
                'data' => $menu
            ],
            200
        );
    }
}
