<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZaloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // build data
        $msgBuilder = new MessageBuilder('text');
        $msgBuilder->withUserId('494021888309207992');
        $msgBuilder->withText('Message Text');

        // add buttons (only support 5 buttons - optional)
        $actionOpenUrl = $msgBuilder->buildActionOpenURL('https://wwww.google.com'); // build action open link
        $msgBuilder->withButton('Open Link', $actionOpenUrl);

        $actionQueryShow = $msgBuilder->buildActionQueryShow('query_show'); // build action query show
        $msgBuilder->withButton('Query Show', $actionQueryShow);

        $actionQueryHide = $msgBuilder->buildActionQueryHide('query_hide'); // build action query hide
        $msgBuilder->withButton('Query Hide', $actionQueryHide);

        $actionOpenPhone = $msgBuilder->buildActionOpenPhone('0919018791'); // build action open phone
        $msgBuilder->withButton('Open Phone', $actionOpenPhone);

        $actionOpenSMS = $msgBuilder->buildActionOpenSMS('0919018791', 'sms text'); // build action open sms
        $msgBuilder->withButton('Open SMS', $actionOpenSMS);

        $msgText = $msgBuilder->build();
        // send request
        $response = $zalo->post(ZaloEndpoint::API_OA_SEND_MESSAGE, $accessToken, $msgText);
        $result = $response->getDecodedBody(); // result
        return $result;

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
