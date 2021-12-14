<?php

namespace App\Http\Controllers;

use App\Models\AssetType;
use Illuminate\Http\Request;

class AssetTypeController extends Controller
{
    
    public function index()
    {
        $data['assetTypes'] = AssetType::paginate(8);
        return view('assetType.manage',$data);
    }

    public function create()
    {
        return view('assetType.add');
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'asset_type_name' => 'required',
            'asset_type_description' => 'required',
        ]);

        AssetType::create($data);
        return redirect()->route('asset-type.index');
    }

 
    public function update(Request $request, AssetType $assetType)
    {
        //
        $assetType->asset_type_name = $request->asset_type_name;
        $assetType->asset_type_description = $request->asset_type_description;
        $assetType->save();
        return redirect()->back();
    }

    public function destroy(AssetType $assetType)
    {
        $assetType->delete();
        return redirect()->back();
    }
}
