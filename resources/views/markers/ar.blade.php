<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>
</head>

<body>
    <a-scene mindar-image="imageTargetSrc: /storage/targets/output.mind; autoStart: true;" vr-mode-ui="enabled: false">
        <a-assets>
            @foreach($markers as $i => $marker)
            <video id="video{{ $i }}" src="{{ Storage::url($marker->video_path) }}" loop></video>
            @endforeach
        </a-assets>

        <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>

        @foreach($markers as $i => $marker)
        <a-entity mindar-image-target="targetIndex: {{ $i }}" target-fixed>
            <a-video src="#video{{ $i }}" width="1" height="0.6" position="0 0 0" rotation="0 0 0"></a-video>
        </a-entity>
        @endforeach
    </a-scene>

    <script>
        document.querySelectorAll("video").forEach(video => {
      video.addEventListener("loadeddata", () => {
        video.play();
      });
    });

    document.querySelector("a-scene").addEventListener("targetFound", () => {
      document.querySelectorAll("video").forEach(video => video.play());
    });
    </script>
</body>

</html>
