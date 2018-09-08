@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="fa fa-play"></span> Get The Lyric For Any Song</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="{{route('lyric.find')}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="inputGroupSelect01" class="input-group-text">Song Title</label>
                                </div>
                                <input type="text" name="track" placeholder="How Do I Live" aria-label="Recipient's username" aria-describedby="button-addon2" class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" id="button-addon2" class="btn btn-outline-primary"><i class="fa fa-search"></i> Get Track Lyric</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>



            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">{{$search == 1 ? "Search Results" : "Top 10 Tracks In Egypt"}}</h6>
                @foreach($tracks as $track)
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165b57dd934%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165b57dd934%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.84375%22%20y%3D%2216.95625%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <strong class="text-gray-dark">{{$track->track->track_name}}</strong>

                                <a href="{{route('show',$track->track->track_id)}}">Lyric</a>
                            </div>
                            <span class="d-block">{{$track->track->artist_name}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
