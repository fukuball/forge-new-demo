<html>

<head>
    <title>Test</title>
</head>

<body>
    <script src="https://cdn.bootcss.com/flv.js/1.4.2/flv.min.js"></script>
    <video controls id="video"></video>

    <input type="text" />
    <button id="load">Load</button>
    <script>
        if (flvjs.isSupported()) {
            document.querySelector("#load").addEventListener("click", function () {
                const video = document.getElementById('video');
                const target = document.querySelector("input").value;
                const flvPlayer = flvjs.createPlayer({
                    type: 'flv',
                    url: `http://ec2-18-136-211-23.ap-southeast-1.compute.amazonaws.com:8000/live/${target}.flv`
                });
                flvPlayer.attachMediaElement(video)
                flvPlayer.load();
                flvPlayer.play();
            })
        }
    </script>
</body>

</html>