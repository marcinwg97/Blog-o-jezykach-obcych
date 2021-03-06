<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaticSite;

class StaticSiteController extends Controller
{
    public function index()
        {
            return response()->json(StaticSite::paginate(10)->toArray());
        }

        public function listWithoutPagination() {
            return response()->json(StaticSite::get()->toArray());
        }

    public function details($id) {
        return response()->json(StaticSite::where('id', $id)->first()->toArray());
    }

    public function update(Request $request, $id) {
        $static_site = StaticSite::where('id', $id)->first();
        $static_site->name = $request->name;
        $static_site->contents = $request->contents;
        $static_site->save();

        return response()->json([
            'message' => 'Strona statyczna została wyedytowana'
        ]);
    }

        public function store(Request $request)
    {
        $static_site = new StaticSite;
        $static_site->name = $request->name;
        $static_site->contents = $request->contents;
        $static_site->save();

        return response()->json([
            'message' => 'Nowa strona statyczna została stworzona'
        ]);
    }

    public function destroy($id) {
        $static_site = StaticSite::where('id', $id)->first();
        $static_site->delete();

        return response()->json([
            'message' => 'Strona statyczna została usunięta'
        ]);
    }
}
