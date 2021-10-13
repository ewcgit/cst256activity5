<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use App\Http\Controllers\UsersRestController;

class RestClientController extends Controller{
    public $urc;
    public $urc2;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){        
        $this->urc = new UsersRestController();
        $this->urc->index(); 
        
        $serviceURL = "http://localhost/app5/public";
        $api = "usersrest3";
        $param = "";
        $uri = $api . "/" . $param;
        
        try{
            $client = new Client(['base_uri' => $serviceURL]);
            $response = $client->request('GET', $uri);
            
            if($response->getStatusCode() == 200){
                return $response->getBody();
            }
            else{
                return "There was an error: " . $response->getStatusCode();
            }
        }
            catch(ClientException $e){
                return "There was an exception: " . $e->getMessage();
            }
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
    public function show($id){
        $this->urc2 = new UsersRestController();
        $this->urc2->show($id);
        
        $serviceURL = "http://localhost/app5/";
        $api = "usersrest4";
        $param = "";
        $uri = $api . "/" . $param;
        
        try{
            $client = new Client(['base_uri' => $serviceURL]);
            $response = $client->request('GET', $uri);
            
            if($response->getStatusCode() == 200){
                return $response->getBody();
            }
            else{
                return "There was an error: " . $response->getStatusCode();
            }
        }
        catch(ClientException $e){
            return "There was an exception: " . $e->getMessage();
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
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
    public function destroy($id){
        //
    }
}
?>