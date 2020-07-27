<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index() {
        return view('warehouse.index');
    }

    public function create() {
        return view('warehouse.create');
    }

    public function edit($id) {
        return view('warehouse.create', ["id" => $id]);
    }

    public function warehouseBranchIndex($id) {
        return view('warehouse.branch.index', ["warehouse" => $id]);
    }

    public function warehouseBranchCreate($id) {
        return view('warehouse.branch.create', ["warehouse" => $id]);
    }

    public function inventoryIndex() {
        return view('warehouse.inventory.index');
    }

    public function inventoryBulk() {
        return view('warehouse.inventory.bulk');
    }

}
