<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use YoutubeDl\Options;
use File;
// use YoutubeDl\YoutubeDl;

use Masih\YoutubeDownloader\YoutubeDownloader;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    //

    public function download_video(){
        // ini_set('max_execution_time', 60000);
        $path = 'https://www.youtube.com/watch?v=C0JLHgiUXVs'; // Replace with the actual YouTube video URL
        $name = "download.mp4";
        
        // $youtube = new YoutubeDownloader('C0JLHgiUXVs');
        // $youtube->download();

        return response()->download('C:\Users\Rana Saha\Downloads', $path);
        dd("Done");
     }
}