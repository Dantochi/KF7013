<?php
function makeHeroSection() {
    $heroSection = <<<HEROSECTION
<section id="hero-section">
        <div id="hero-content-plus-rocket">
            <div id="hero-section-content-container">
                <div id="brand-tag">
                    <p>#1 Tech Workshop in Nigeria</p>
                </div>
                <div id="hero-section-bold-text">
                    <p>Jet to your next level in tech with <span>transit</span></p>
                </div>
                <div id="hero-section-service">
                    <p>Learn new skills in tech with our project based courses tailored just for you.</p>
                </div>
                <button id="hero-section-button">
                    Start here
                    <i class='bx bx-right-arrow-alt' style="font-size: 20px;"></i>
                </button>
            </div>
            <div id="rocket-container">
                <img src="../asset/images/1.jpg" alt="Rocket Image" style="width: 300px; border-radius: 10px;">
            </div>
        </div>
    </section>
HEROSECTION;
    $heroSection .= "\n";
    return $heroSection;
}
