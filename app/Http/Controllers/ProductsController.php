<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
        $products = DB::table('products')->latest("id")->paginate(10);
        return view('products', ['products' => $products]);
    }

    public function addproduct()
    {
        
        return view('addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createproduct(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filepath = 'dist/images/products/' . $filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/products'), $filename);
        }
        DB::table('products')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'tag'=>$request->tag,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'image' => $filepath,
        ]);
        $product = DB::table('products')
            ->where('name', $request->name)
            ->where('description', $request->description)
            ->where('tag',$request->tag)
            ->where('price', $request->price)
            ->where('discount_price', $request->discount_price)
            ->where('image', $filepath)->first();
        $req = $request->all();
        for ($i = 1; $i <= $req["specification_count"]; $i++) {
            DB::table('product_specifications')->insert([
                'product_id' => $product->id,
                'name' => $req["name" . $i],
                'value' => $req["value" . $i]
            ]);
        }

        return redirect(route('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editproduct($id)
    {
        $products= DB::table('products')->find($id);
        return view('editproductform',['products'=>$products]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateproduct(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filepath = 'dist/images/products/' . $filename;
            // $file->storeAs('servicesimg/',$filename);
            $request->image->move(public_path('dist/images/products'), $filename);
        }
        DB::table('products')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'tag'=>$request->tag,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'image' => $filepath,
        ]);
        return redirect(route('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyproduct($id)
    {
        DB::table('products')->where('id',$id)->delete();
        return redirect(route('product'));
    }
}
