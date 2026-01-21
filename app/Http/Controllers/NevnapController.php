<?php

namespace App\Http\Controllers;

use App\Models\Nevnap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NevnapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nap = $request->query("nap");
        $nev = $request->query("nev");
        if (!$nev && !$nap) {
            return response()->json(["message" => "Hibás paraméter"], 422);
        }

        $validator = Validator::make(
            $request->query(),
            [
                'nap' => 'date_format:Y-m-d',
                'nev' => 'string'
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        if ($nev) {
            $nevnapok = Nevnap::where("nev1", "=", $nev)->orWhere("nev2", "=", $nev)->get();
            return response()->json($nevnapok);
        } else if ($nap) {
            $napSplit = explode("-", $nap);
            $m = intval($napSplit[1]);
            $d = intval($napSplit[2]);

            $nevnapok = Nevnap::where("nap", "=", $d)->where("ho", "=", $m)->get();

            return response()->json($nevnapok);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
