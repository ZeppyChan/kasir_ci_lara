<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sma_brands;
use Illuminate\Support\Facades\DB;
use DataTables;



class KasirController extends Controller
{
    public function index(){
    	// $brands = Sma_brands::latest()->paginate(10);
    
    	return view('kasir');
    }

    public function get(){
    	$products = DB::table('sma_products')->get();
    	if(request()->ajax()){
            return DataTables::of($products)->addIndexColumn()
            ->addColumn('action', function($row){

                   $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">Save</a>';
                   
 
                    return $btn;
            })
            ->rawColumns(['action'])                   
                ->make(true);
        }
    }

    public function test() {
        return view('/welcome');
    }
}
