
                <footer class="footer text-right">
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $.getJSON("https://api.ipify.org?format=json", function(data) {
                                $("#ip").html("IPv4: " + data.ip);
                            });

                        });
                    </script>
                    <p id="ip">IPv4:</p>
                </footer>
