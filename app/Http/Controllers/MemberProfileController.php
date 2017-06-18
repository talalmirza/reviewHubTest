<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberProfileController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Member $member)
    {

    }

    public function edit($username)

    {

        $member = Member::where('username','=',$username)->first();
        
        return view ('user.profile', compact('member'));

    }

    public function update(Request $request, Member $member)
    {

    }

    public function destroy(Member $member)
    {

    }
}
