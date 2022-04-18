<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Decision;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddDecisionsController extends Controller
{
    function index()
    {
        $decision = Decision::get()->all();
//
//        foreach ($decision as $value)
//        {
//            foreach (json_decode($value->text) as $item)
//            {
//                dump($item);
//
//            }
//        }

//        dd('');

        return view('admin.AddDecisions', compact('decision'));
    }

    function insert(Request $request)
    {
        if ($request->ajax()) {
            $rules = array(
                'heard.*' => 'required',
                'reply.*' => 'required',
                'decided.*' => 'required',
                'category_id' => 'required',
            );
            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json([
                    'error' => $error->errors()->all()
                ]);
            }

//            $data = array(
//                'text' => json_encode($request->all()),
//                'category_id' => $request->category_id,
//                'created_at' => Carbon::now(),
//            );
//            $data = array();
//            foreach ($request->all() as $key => $value ) {
//                if (($value)
//               foreach ($value as $item) {
//                   dump($item);
//               }
//            }
//            dd($data);
//            $insert_data[] = $data;

            $heard = $request->heard;
            $reply = $request->reply;
            $decided = $request->decided;
            $category_id = $request->category_id;
            for ($count = 0; $count < count($heard); $count++) {
                $data = array(
                    'heard' => $heard[$count],
                    'reply' => $reply[$count],
                    'decided' => $decided[$count],
                    'category_id' => $category_id,
                    'created_at' => Carbon::now(),
                );
                $insert_data[] = $data;
            }
            $dataFool = array(
                'text' => json_encode($insert_data, true),
                'category_id' => $request->category_id,
                'created_at' => Carbon::now(),
            );

            Decision::insert($dataFool);
            return response()->json([
                'success' => 'Data Added successfully.'
            ]);
        }
    }

    function pdfexport($id)
    {
        $decision = Decision::find($id);
        $pdf = PDF::loadView('admin.pdf', ['decision' => $decision])->setPaper("a4", 'portrait');
        $fileName = $decision->created_at->format('d m Y');
        return $pdf->stream($fileName . '.pdf');
    }

    public function delete($id)
    {
        Decision::where('id', $id)->forceDelete();
        return redirect()->back();
    }

    public function search(Request $r)
    {
        $search = $r->search;
        $decision = Decision::where('id', 'LIKE', $search . '%')->get();
        echo json_encode($decision);
    }
}
