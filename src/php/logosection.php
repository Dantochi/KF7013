<?php
function makeLogoSection(){
    $logoSection = <<<LOGOSECTION
<section id="logos-section">
        <div id="logos-container">
            <div>
                <i class='bx bxl-python' style="font-size: 20px;"></i>
            </div>
            <div>
                <i class='bx bxl-html5' style="font-size: 20px;"></i>
            </div>
            <div>
                <i class='bx bxl-css3' style="font-size: 20px;"></i>
            </div>
            <div>
                <i class='bx bxl-php' style="font-size: 20px;"></i>
            </div>
            <div>
                <i class='bx bxl-postgresql' style="font-size: 20px;"></i>
            </div>
        </div>
    </section>
LOGOSECTION;
    $logoSection .= "\n";
    return $logoSection;

}