<?php

$footer_template = '
            <footer = class="footer">
                <div class="footer__container"></div>
            </footer>
        </div>
';


$close = '
        %s
    </body>
</html>
';

printf($footer_template);

printf(
    $close,
    wp_footer()
);