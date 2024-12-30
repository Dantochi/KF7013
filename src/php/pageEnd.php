<?php
function makePageEnd(){
    $pageEnd = <<<PAGEEND
<script src="../asset/index.js"></script>
</body>
</html>
PAGEEND;
    $pageEnd .= "\n";
    return $pageEnd;
}
