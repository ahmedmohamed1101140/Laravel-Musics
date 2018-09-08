@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <img  src="https://dzapk.com/images/2017/12/04/3343/musixmatch-lyrics-premium-v7-0-0-1-apk_1.jpg?v=1512350552" alt="" width="32" height="32">
                        {{$track->track_name}}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! nl2br(e($lyric->lyrics_body)) !!}
                    </div>
                </div>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">Rating : {{$track->track_rating}}</li>
                    <li class="list-group-item">Length  : {{ gmdate('H:i:s' ,$track->track_length  )}}</li>
                    <li class="list-group-item">Album : <a href="{{route('album',$track->album_id)}}">{{$track->album_name}}</a></li>
                    <li class="list-group-item">Release Date : {{\Carbon\Carbon::parse($track->first_release_date)->format('d-m-Y')}}</li>
                    <li class="list-group-item">Artist : <a href="{{route('artist',$track->artist_id)}}">{{$track->artist_name}}</a></li>
                    <li class="list-group-item">Full Lyric Link : <a href="{{$track->track_share_url}}">{{$track->track_name}}</a></li>
                    <li class="list-group-item">Edit Lyric : <a href="{{$track->track_edit_url}}">{{$track->track_name}}</a></li>
                    <li class="list-group-item">Tags :
                        @foreach($track->primary_genres->music_genre_list as $item)
                            <span class="badge badge-primary badge-pill">{{$item->music_genre->music_genre_name}}</span>
                        @endforeach
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection
