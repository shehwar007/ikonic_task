<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Vote;
use App\Models\Comment;


use Illuminate\Http\Request;
use DataTables;

class DashboardController extends Controller
{
    //
    public function index()
    {

        return view('AdminDashboard.dashboard');
    }
    public function StoreFeedBack(Request $request)
    {
        $validatedata = $this->validate($request, Feedback::VALIDATION_RULES);
        $validatedata['user_id'] = 1;

        $status = Feedback::create($validatedata);
        if ($status) {
            session()->flash("success", "Feedback Added Successfully");
        } else {
            session()->flash("error", "Some thing went Wrong");
        }
        return back();
    }
    public function IndexFeedBack(Request $request)
    {
        if ($request->ajax()) {
            $query = Feedback::latest()->get();
            $result = DataTables::of($query)->addColumn('user', function ($row) {
                return $row->user->name;
            })->addIndexColumn()->make(true);
            return $result;
        }
    }
    public function StoreVote(Request $request)
    {
        $this->validate($request, [
            'feedback_id' => 'required',
        ]);
        $alreadyVoteCast = Vote::where('user_id', 2)->where('feedback_id', $request->feedback_id)->first();
        if ($alreadyVoteCast) {
            session()->flash("error", "Already Vote Exits");
            return back();
        }
        Vote::create(['user_id' => 2, 'feedback_id' => $request->feedback_id]);
        Feedback::find($request->feedback_id)->increment('vote_count');
        session()->flash("success", "Vote Added Successfully");
        return back();
    }
    public function StoreComment(Request $request)
    {
        $this->validate($request, [
            'feedback_id' => 'required',
            'content'=>'required'
        ]);
        Comment::create(['user_id' => 2, 'feedback_id' => $request->feedback_id,'content'=>$request->content]);
        session()->flash("success", "Commment Added Successfully");
        return back();

    }
    public function IndexComment(Request $request)
    {
        if ($request->ajax()) {
            $query = Comment::latest()->where('status',1)->get();
            $result = DataTables::of($query)->addColumn('user', function ($row) {
                return $row->user->name;
            })->editColumn('created_at', function ($row) {
                return $row->created_at->format('d-m-Y');
            })->addIndexColumn()->make(true);
            return $result;
        }
    }
}
