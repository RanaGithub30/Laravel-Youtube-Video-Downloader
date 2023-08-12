@extends('commons.header')
@section('content')
    <div class="row m-2">
    <form action="#">
        <div class="col-md-12 m-2">
            <h4 class="text-center">Youtube Video Downloader</h4>
        </div>
        <div class="col-md-12 m-1 d-flex">
             <input type="text" name="youtube_link" id="youtube_link" placeholder="Enter Youtube Link" class="form-control text-center">
        </div>

        <div class="col-md-3 m-1 d-flex">
             <a class="btn btn-primary m-2" id="searchBtn" onclick="youtubeVideo()">Search</a>
             <a class="btn btn-danger m-2" id="searchBtn" onclick="location.reload();">Refresh</a>
        </div>

        <div class="col-md-12 m-2" id="youtube-player">
        </div>
        <div class="col-md-12 m-2 download-video" id="download_video" style="display: none;">
            <a onclick="downloadFile()" class="btn btn-primary" download>Click Here to Download</a>
        </div>
    </form>
    </div>
@endsection