<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DefaultController extends Controller
{
    public function users_view()
    {
        return view('Users.view');
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" data-user="' . $row->id . '" class="view-btn btn btn-success btn-sm">View</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function getUser(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->get('user');
            $data = User::findOrFail($id);
            return view('Users.single_light')->withUser($data);
        }
    }
}
