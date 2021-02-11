<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Vcard;
class VcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $data['vcards'] = Auth::user()->vcard->paginate(1);
       return view('vcard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $section = 'about', $vcardId = null)
    {
      $vcard = Vcard::find($vcardId);
      
      if ($section != 'about' && ! $vcard )
      {
        $request->session()->flash('notification_warning', 'Please create vcard first');
        return redirect('/vcard/create');
      }
      
      $select['section'] = $section;
      $select['vcard'] = $vcard;
      
      return view('vcard.addvcard',$select);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $vcard = new Vcard;
      $vcard->user_id = Auth::id();
      $vcard->about_compnay_name = $request->about_compnay_name;
      $vcard->about_email = $request->about_email;
      $vcard->about_address = $request->about_address;
      $vcard->about_city = $request->about_city;
      $vcard->about_state = $request->about_state;
      $vcard->about_zip = $request->about_zip;
      $vcard->save();
    
      return redirect('vcard/create/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
