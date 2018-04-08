<?php
    require("VideoStream.php");

    // mp4 format
    /*
    $stream = new VideoStream("files/video.mp4");
    $stream->start();
    */

    // webm format
    $stream = new VideoStream("files/video2.webm");
    $stream->start();

?>