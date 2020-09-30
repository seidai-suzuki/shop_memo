<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Shop as ShopModel;

class ShopsController extends Controller
{
    private $shopModel;

    /**
     * Create a new controller instance.
     *
     * @param ShopModel $shop
     */
    public function __construct(ShopModel $shop)
    {
        $this->middleware('auth');
        $this->shopModel = $shop;
    }

    public function index() {
        $userId = Auth::id();
        $shops = $this->shopModel->getByUserId($userId);
        return view('search.index', compact('shops'));
    }
}
