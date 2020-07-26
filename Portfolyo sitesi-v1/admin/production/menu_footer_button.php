<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock"  name="tamEkran">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>

    </a>
    <script>

        /* Get into full screen */
        function GoInFullscreen(element) {
            if(element.requestFullscreen)
                element.requestFullscreen();
            else if(element.mozRequestFullScreen)
                element.mozRequestFullScreen();
            else if(element.webkitRequestFullscreen)
                element.webkitRequestFullscreen();
            else if(element.msRequestFullscreen)
                element.msRequestFullscreen();
        }

        /* Get out of full screen */
        function GoOutFullscreen() {
            if(document.exitFullscreen)
                document.exitFullscreen();
            else if(document.mozCancelFullScreen)
                document.mozCancelFullScreen();
            else if(document.webkitExitFullscreen)
                document.webkitExitFullscreen();
            else if(document.msExitFullscreen)
                document.msExitFullscreen();
        }

        /* Is currently in full screen or not */
        function IsFullScreenCurrently() {
            var full_screen_element = document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement || null;

            // If no element is in full-screen
            if(full_screen_element === null)
                return false;
            else
                return true;
        }

        $("#go-button").on('click', function() {
            if(IsFullScreenCurrently())
                GoOutFullscreen();
            else
                GoInFullscreen($("#element").get(0));
        });

        $(document).on('fullscreenchange webkitfullscreenchange mozfullscreenchange MSFullscreenChange', function() {
            if(IsFullScreenCurrently()) {
                $("#element span").text('Full Screen Mode Enabled');
                $("#go-button").text('Disable Full Screen');
            }
            else {
                $("#element span").text('Full Screen Mode Disabled');
                $("#go-button").text('Enable Full Screen');
            }
        });

    </script>
    <a href="logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
