<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Item;
use Illuminate\Http\Request;

class ItemCRUD2Controller extends Controller
{
	/*
	public function index(Request $request) {
		$items = Item::orderBy('id', 'DESC')->paginate(5);
		return view('backend.roles.items.index', compact('items'))->with('i', ($request->input('page', 1) - 1) * 5);
	}				

	public function create()
	{
		return view('backend.roles.items.create');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'description' => 'required',
		]);

		Item::create($request->all());

		return redirect()->route('backend.roles.items.index')->with('success', 'Item created successfully');
	}

	public function show($id)
	{
		$item = Item::find($id);
		return view('backend.roles.items.show', compact('item'));
	}

	public function edit($id)
	{
		$item = Item::find($id);
		return view('backend.roles.items.edit', compact($item));
	}

	public function update(Request $request, $id) {
		$this->validate($request, [
			'title' => 'required',
			'description' => 'required',
		]);

		Item::find($id)->update($required->all());

		return redirect()->route('backend.roles.items.index')->with('success', 'Item updated successfully');
	}

	public function destroy($id)
	{
		Item::find($id)->delete();
		return redirect()->route('backend.roles.items.index')->with('success', 'Item deleted successfully');
	}
	*/	

}
