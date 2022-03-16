<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $members = Member::paginate(1);

        return view('admin/members/all', [
            'members' => $members
        ]);
    }

    public function delete($id) {
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/members');
    }
}

