<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    function getLang()
    {
        $data = Language::all();

        return view('admin.includes.Languages.language', compact('data'));
    }

    public function index()
    {

        $data = Language::all();
        return response()->json(['items' => $data,]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Language::truncate(); delete all data in database


        $validator = Validator::make($request->all(), [
            'name'           => ['required', 'string', 'max:255'],
            'abbr'           => ['nullable'],
            'local'          => ['nullable', 'max:255'],
            'active'         => ['nullable', 'boolean', 'max:255'],
            'direction'      => ['nullable', 'max:255'],

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'errors' => $validator->errors()->toArray(),
            ]);
        }
        $App = new Language();
        $App->name           = $request->input('name');
        $App->abbr           = $request->input('abbr');
        $App->local          = $request->input('local');
        $App->active         = $request->input('active');
        $App->direction      = $request->input('direction');
        $App->save();
        return response()->json([
            'status' => 200,
            'message' => ('added successfully'),
        ]);
    }


    public function show($id)
    {
        $data = Language::find($id);
        return [
            'item' => $data,
        ];
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'        => ['required', 'string', 'max:255'],
            'abbr	'        => ['required', 'max:255'],
            'local'        => ['nullable', 'max:255'],
            'active	'        => ['nullable', 'max:255'],
            'direction	'        => ['nullable', 'max:255'],
            'id'             => 'required|exists:Languages,id',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'errors' => $validator->errors()->toArray(),
            ]);
        }

        $App = Language::find($request->id);
        $App->name    = $request->input('name');
        $App->abbr        = $request->input('abbr	');
        $App->local    = $request->input('local');
        $App->active        = $request->input('active	');
        $App->direction        = $request->input('direction	');
        $App->id    = $request->input('id');

        $App->update();
        return response()->json([
            'status' => 200,
            'message' => 'updated successfully',
        ]);
    }


    public function destroy($id)
    {
        $App = Language::find($id);
        if ($App) {
            $des = 'upload/Language/' . $App->img;
            File::delete($des);
            $App->delete();
            return response()->json([
                'status' => 200,
                'item' => $App
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'App not found',
            ]);
        }
    }
}
