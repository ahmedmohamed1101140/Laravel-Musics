<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $tracks = json_decode(
            $client->request(
                'GET',
                'https://api.musixmatch.com/ws/1.1/chart.tracks.get?page=1&page_size=10&country=eg&f_has_lyrics=1&apikey='.env('MM_KEY')
            )->getBody()->getContents()
        )->message->body->track_list;
        $search = 0;
        return view('home' , compact('tracks','search'));
    }

    public function find(Request $request){
        $client = new Client();
        $tracks = json_decode(
            $res = $client->request(
                'GET',
                'https://api.musixmatch.com/ws/1.1/track.search?q_track='.$request->track.'&page_size=10&page=1&s_track_rating=desc&apikey='.env('MM_KEY')
            )->getBody()->getContents()
        )->message->body->track_list;
        $search = 1;
        return view('home',compact('tracks','search'));
    }

    public function show($id){
        $client = new Client();
        $lyric = json_decode(
            $res = $client->request(
                'GET',
                'https://api.musixmatch.com/ws/1.1/track.lyrics.get?track_id='.$id.'&apikey='.env('MM_KEY')
            )->getBody()->getContents()
        )->message->body->lyrics;

        $track = json_decode(
            $res = $client->request(
                'GET',
                'https://api.musixmatch.com/ws/1.1/track.get?track_id='.$id.'&apikey='.env('MM_KEY')
            )->getBody()->getContents()
        )->message->body->track;


        return view('show',compact('track','lyric'));
    }
}
