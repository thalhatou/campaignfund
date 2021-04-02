<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateCampaignRequest;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Campaign;
use Illuminate\Http\Request;

class campaignController extends Controller{



   //return all campaings
    public function index() {
        $campaigns = Campaign::paginate(10);
        return view('campaign.show', compact('campaigns'));
    }

     public function create(){
        return view('campaign.create');
    }

    //upload cover image for campaign
    public function uploadCoverImage(Reqeust $request){
    $request->image->store('images','public');
    return 'uploadded sucessfully';

    }

     public function show($id)
    {
        $campaign = Campaign::find($id);
        return view('preview',compact('campaign'));
    }




 public function store(Request $request){
     //get the user ID and store it on a variable
      $userid = Auth::user()->id ;
      //pass the store userID to the request
      $request['user_id'] = $userid;
      $request->validate([
            'title' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'duration'=>'required'
        ]);
        Campaign::create($request->all());
         return redirect('/dashboard');
    }


    //show the campaign form for editing
       public function edit(Campaign $campaign)
    {
        return view('campaign.edit',compact('campaign'));
    }


    //update campaign and redirect the user back
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'duration'=>'required'
        ]);

        $campaign->update($request->all());
        return redirect('/dashboard');
    }


    //delete
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return redirect('/dashboard');
    }
}

