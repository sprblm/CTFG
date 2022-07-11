<?php

namespace App\Http\Controllers\Api\TP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DocuConfs;

class DocuController extends Controller {
    public function getConf(Request $request) {
        $name = $request->name;

        $confs = DocuConfs::where('name', $name)->first();

        if ($confs) {
            return response()->json([
                'message' => 'Success',
                'access' => $confs->access,
                'refresh' => $confs->refresh,
            ], 200);
        }

        return response()->json([
            'error' => 'Confs not found'
        ], 404);
    }

    public function updateConf(Request $request) {
        $name = $request->segment(4);

        $confs = DocuConfs::where('name', $name)->first();

        if ($confs) {
            $confs->update([
                'access' => $request->input('access'),
                'refresh' => $request->input('refresh'),
            ]);

            return response()->json([
                'message' => 'Success',
            ], 200);
        }

        return response()->json([
            'error' => 'Confs not found'
        ], 404);
    }
}
