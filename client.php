<script>
    var wsServer = 'ws://127.0.0.1:9502';
    var websocket = new WebSocket(wsServer);
    websocket.onopen = function (evt) {
        console.log("Connected to WebSocket server.");
    };

    websocket.onclose = function (evt) {
        console.log("Disconnected");
    };

    websocket.onmessage = function (evt) {
        console.log(Retrieved data from server: ' + evt.queryResult);
    };

    websocket.onerror = function (evt, e) {
        console.log('Error occured: ' + evt.data);
    };
</script>