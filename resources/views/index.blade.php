<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PeerChat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('assets/css/main.css') }}'>
</head>

<body>

    <div id="videos">
        <video class="video-player" id="user-1" autoplay playsinline></video>
        <video class="video-player" id="user-2" autoplay playsinline></video>
    </div>

    <div id="controls">

        <div class="control-container" id="camera-btn">
            <img src="{{ asset('assets/icons/camera.png') }}" />
        </div>

        <div class="control-container" id="mic-btn">
            <img src="{{ asset('assets/icons/mic.png') }}" />
        </div>

        <a href="/">
            <div class="control-container" id="leave-btn">
                <img src="{{ asset('assets/icons/phone.png') }}" />
            </div>
        </a>

    </div>

</body>
<script src='{{ asset('assets/js/agora-rtm-sdk-1.4.4.js') }}'></script>
<script src='{{ asset('assets/js/main.js') }}'></script>

</html>
