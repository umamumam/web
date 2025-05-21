<!DOCTYPE html>
<html>
<head>
    <title>AR Scan - {{ $marker->unique_code }}</title>
    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.0/dist/mindar-image-aframe.prod.js"></script>
    <style>
        body { margin: 0; overflow: hidden; }
        #ar-container { width: 100%; height: 100vh; }
        #scan-message {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            color: white;
            background: rgba(0,0,0,0.7);
            padding: 15px;
            z-index: 100;
        }
    </style>
</head>
<body>
    <div id="ar-container">
        <a-scene mindar-image="imageTargetSrc: {{ asset($photoUrl) }}; autoStart: true;"
                vr-mode-ui="enabled: false"
                device-orientation-permission-ui="enabled: false"
                loading-screen="enabled: false">

            <a-assets timeout="10000">
                <video id="ar-video"
                       src="{{ asset($videoUrl) }}"
                       preload="auto"
                       loop
                       crossorigin="anonymous"
                       playsinline
                       webkit-playsinline>
                </video>
            </a-assets>

            <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>

            <a-entity mindar-image-target="targetIndex: 0">
                <a-video src="#ar-video"
                         position="0 0 0"
                         width="1.6"
                         height="0.9"
                         rotation="-90 0 0">
                </a-video>
            </a-entity>
        </a-scene>
    </div>

    <div id="scan-message">
        <h3>Point camera at marker {{ $marker->unique_code }}</h3>
        <p>{{ $marker->description }}</p>
    </div>

    <script>
        // Debugging events
        const scene = document.querySelector('a-scene');

        scene.addEventListener('arReady', (event) => {
            console.log('AR system ready');
        });

        scene.addEventListener('arError', (event) => {
            console.error('AR error:', event.detail);
        });

        // Check for unsupported browsers
        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            document.getElementById('scan-message').innerHTML =
                '<h3>Browser not supported</h3>' +
                '<p>Please use Chrome or Safari on a mobile device</p>';
        }
    </script>
</body>
</html>
