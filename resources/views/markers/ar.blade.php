<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR Experience</title>
    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }
        #loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            z-index: 1000;
        }
        #start-button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        #back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1001;
            padding: 10px 15px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="{{ route('markers.index') }}" id="back-button">Back</a>

    <div id="loading">
        <h2>Loading AR Experience</h2>
        <p>Please wait while we prepare your AR content...</p>
        <button id="start-button">Start AR</button>
    </div>

    <a-scene mindar-image="imageTargetSrc: {{ asset('storage/markers/targets.mind') }}; autoStart: false;"
             embedded color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights"
             vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">

        <a-assets>
            @foreach($markers as $marker)
                <video id="video{{ $marker->id }}"
                       src="{{ asset('storage/'.$marker->video_path) }}"
                       preload="auto" loop muted playsinline webkit-playsinline></video>
            @endforeach
        </a-assets>

        <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>

        @foreach($markers as $markerIndex => $marker)
            @foreach($marker->photos as $photoIndex => $photo)
                <a-entity id="marker{{ $marker->id }}_{{ $photoIndex }}"
                          mindar-image-target="targetIndex: {{ $markerIndex * $marker->photos->count() + $photoIndex }}"
                          target-fixed>
                    <a-video src="#video{{ $marker->id }}"
                             width="0.8" height="0.45"
                             position="0 0 0"
                             rotation="0 0 0"></a-video>
                </a-entity>
            @endforeach
        @endforeach
    </a-scene>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loadingScreen = document.getElementById('loading');
            const startButton = document.getElementById('start-button');
            const scene = document.querySelector('a-scene');

            // Generate .mind file from images
            async function generateMindFile() {
                const targets = [];

                @foreach($markers as $marker)
                    @foreach($marker->photos as $photo)
                        targets.push({
                            image: '{{ asset('storage/'.$photo->path) }}',
                            title: 'marker{{ $marker->id }}_{{ $photoIndex }}'
                        });
                    @endforeach
                @endforeach

                // In a real implementation, you would:
                // 1. Send these images to your backend
                // 2. Use MindAR's image-target creator tool
                // 3. Return the generated .mind file
                // This is simplified for demonstration

                return '{{ asset('storage/markers/targets.mind') }}';
            }

            // Start AR when button is clicked
            startButton.addEventListener('click', async () => {
                loadingScreen.innerHTML = '<h2>Preparing AR Targets</h2><p>This may take a moment...</p>';

                try {
                    // In a real app, you would generate the .mind file here
                    // const mindFile = await generateMindFile();

                    // For now, we'll assume the .mind file is already generated
                    scene.setAttribute('mindar-image', 'autoStart: true');

                    // Set up video controls
                    @foreach($markers as $marker)
                        const video{{ $marker->id }} = document.querySelector('#video{{ $marker->id }}');

                        @foreach($marker->photos as $photoIndex => $photo)
                            const marker{{ $marker->id }}_{{ $photoIndex }} = document.querySelector('#marker{{ $marker->id }}_{{ $photoIndex }}');

                            marker{{ $marker->id }}_{{ $photoIndex }}.addEventListener('targetFound', () => {
                                video{{ $marker->id }}.play().catch(e => console.log('Video play failed:', e));
                            });

                            marker{{ $marker->id }}_{{ $photoIndex }}.addEventListener('targetLost', () => {
                                video{{ $marker->id }}.pause();
                            });
                        @endforeach
                    @endforeach

                    // Hide loading screen after a short delay
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                    }, 1000);

                } catch (error) {
                    console.error('AR initialization failed:', error);
                    loadingScreen.innerHTML = `
                        <h2>Error Loading AR</h2>
                        <p>${error.message}</p>
                        <button onclick="window.location.reload()">Try Again</button>
                    `;
                }
            });

            // Optional: Handle click-to-play for mobile browsers
            document.addEventListener('click', () => {
                @foreach($markers as $marker)
                    document.querySelector('#video{{ $marker->id }}').play().catch(() => {});
                @endforeach
            }, { once: true });
        });
    </script>
</body>
</html>
