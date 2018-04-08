<?php
    require("VideoStream.php");

    $stream = new VideoStream("files/video.mp4");
    $stream->start();
    
?>