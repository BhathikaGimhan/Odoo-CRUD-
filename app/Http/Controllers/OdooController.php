<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ripcord\Ripcord;

class OdooController extends Controller
{
    public function index()
    {
        $url = 'https://test958.odoo.com/';
        $db = 'test958';
        $username = 'bgmaduragoda@gmail.com';
        $password = 'bgm990714';

        // Connect to the Odoo server
        $common = Ripcord::client($url . 'xmlrpc/2/common');
        $uid = $common->authenticate($db, $username, $password, []);

        // Connect to the database
        $models = Ripcord::client($url . 'xmlrpc/2/object');

        // Define search criteria to retrieve products
        $criteria = [
            ['sale_ok', '=', true],
        ];

        // Retrieve the product data from the Odoo database
        $products = $models->execute_kw($db, $uid, $password, 'product.product', 'search_read', [$criteria]);

        // dd($products);

        // Pass the product data to the view
        return view('customers', compact('products'));
    }
    public function create(){
        return view('product');
    }

    public function store(Request $request){
        $url = 'https://test958.odoo.com/';
        $db = 'test958';
        $username = 'bgmaduragoda@gmail.com';
        $password = 'bgm990714';

        // Connect to the Odoo server
        $common = Ripcord::client($url . 'xmlrpc/2/common');
        $uid = $common->authenticate($db, $username, $password, []);

        // Connect to the database
        $models = Ripcord::client($url . 'xmlrpc/2/object');

        // Extract the product data from the request
        $product_data = [
            'name' => $request->input('name'),
            'type' => 'consu',
            'default_code' => $request->input('default_code'),
            'list_price' => (int) $request->input('list_price'),
            'standard_price' => (int) $request->input('standard_price'),
            'taxes_id' => [[6, false, []]], // empty tax list
        ];
        // dd($product_data);

        // Create the product
        $product_id = $models->execute_kw($db, $uid, $password, 'product.product', 'create', [$product_data]);

        if ($product_id) {
            return redirect()->back()->with('success', 'Product created successfully.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to create product.']);
        }
    }





}
