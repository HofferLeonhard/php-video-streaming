# php-video-streaming
Simple php to stream the video flux

#### Supported formats 

Only mp4 formats are currently supported


#### How to use

Just require the lib file (VideoStream.php) into your project and instanciate the VideoStream object before to start it.

	require("VideoStream.php");
	
	$stream = new VideoStream("path/to/your/video/file");
    $stream->start();

### Example
Just run the index.php file to get an example of use.


## License

[MIT](LICENSE)


Enjoy it !
