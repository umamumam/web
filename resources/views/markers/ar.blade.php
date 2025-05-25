<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Marker AR Viewer</title>

  <!-- A-Frame and MindAR Scripts -->
  <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>
</head>

<body>
  <a-scene mindar-image="imageTargetSrc: /storage/markers/targets.mind; autoStart: true;"
           embedded
           color-space="sRGB"
           renderer="colorManagement: true, physicallyCorrectLights"
           vr-mode-ui="enabled: false"
           device-orientation-permission-ui="enabled: false">

    <a-assets>
      @foreach ($markers as $index => $marker)
        <video
          id="video{{ $index }}"
          src="{{ asset('storage/' . $marker->video_path) }}"
          preload="auto"
          loop
          muted
          playsinline
          webkit-playsinline>
        </video>
      @endforeach
    </a-assets>

    <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>

    @foreach ($markers as $index => $marker)
      <a-entity id="marker{{ $index }}" mindar-image-target="targetIndex: {{ $index }}" target-fixed>
        <a-video
          src="#video{{ $index }}"
          width="1"
          height="0.6"
          position="0 0 0"
          rotation="0 0 0">
        </a-video>
      </a-entity>
    @endforeach
  </a-scene>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      @foreach ($markers as $index => $marker)
        const video{{ $index }} = document.querySelector("#video{{ $index }}");
        const marker{{ $index }} = document.querySelector("#marker{{ $index }}");

        marker{{ $index }}.addEventListener("targetFound", () => {
          video{{ $index }}.play();
        });
        marker{{ $index }}.addEventListener("targetLost", () => {
          video{{ $index }}.pause();
        });
      @endforeach

      window.addEventListener("click", () => {
        @foreach ($markers as $index => $marker)
          video{{ $index }}.play().catch(() => {});
        @endforeach
      });
    });
  </script>
</body>

</html>
