<footer class="footer text-right">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function updateCurrentTime() {
                const currentDate = new Date();
                const hours = currentDate.getHours();
                const minutes = currentDate.getMinutes();
                const seconds = currentDate.getSeconds();
                const formattedTime = hours + ":" + minutes + ":" + seconds;
                $("#current-time").html("" + formattedTime);
            }
            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $("#ip").html("IPv4: " + data.ip);
            });
            updateCurrentTime();
            setInterval(updateCurrentTime, 1000);
        });
    </script>
    <div style="display: flex; justify-content: space-between;">
        <p id="ip">IPv4: </p>
        <p id="current-time"></p>
    </div>
</footer>
