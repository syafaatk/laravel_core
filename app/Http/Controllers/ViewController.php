<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Master\MasterProduk;

class ViewController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = MasterProduk::all();
        return view('auth.view', compact('products'));
    }
}