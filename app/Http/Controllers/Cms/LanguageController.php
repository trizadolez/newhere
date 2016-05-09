<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request,
    App\Http\Requests,
    App\Http\Controllers\Controller,
    App\Language;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();

        return response()->json($languages);
    }

    public function published()
    {
        $languages = Language::where('enabled', true)
            ->where('published', true)
            ->get();
        return response()->json($languages);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'enabled'    => 'boolean',
            'published' => 'boolean',
        ]);

        $language = Language::find((int)$id);
        if (!$language) {
            return response()->error('Language not found', 404);
        }

        $modified = false;
        if (isset($request->enabled)) {
            $language->enabled = (bool)$request->enabled;
            $modified = true;
        }

        if (isset($request->published)) {
            $language->published = (bool)$request->published;
            $modified = true;
        }

        if ($modified) {
            $language->save();
        }

        return response()->success(compact('language'));
    }
}
