<?php
function makePageEnd(){
    $pageEnd = <<<PAGEEND
<script src="../asset/index.js"></script> <!-- This is the script that responsible for the display of the menu and the modal for successful booking -->
</body>
</html>
PAGEEND;
    $pageEnd .= "\n";
    return $pageEnd;
}
