<?php
function makeFooterSection(){
    $footerSection = <<<FOOTER
<footer>
        <!-- 1st Column of Footer -->
        <div id="footer-container">
            <div class="footer-list">
                <p>Courses</p>
                <ul>
                    <li>UI/UX</li>
                    <li>Cloud Engineering</li>
                    <li>Front-End Development</li>
                    <li>Back-End Development</li>
                    <li>Fullstack Development</li>
                    <li>Android Development</li>
                </ul>
            </div>
            <!-- 2nd Column of Footer -->
            <div class="footer-list">
                <p>About us</p>
                <ul>
                    <li><a href="../asset/Transit.pdf">Attribution</a></li>
                    <li>Vision</li>
                    <li>Mission</li>
                    <li>Core Team</li>
                    <li>Credits</li>
                    <li>Sponsors</li>
                </ul>
            </div>
            <!-- 3rd Column of Footer -->
            <div class="footer-list">
                <p>Contact Us</p>
                <ul>
                    <li>
                        <p>No.1 Elekahia Housing Estate, Port-Harcourt, Rivers State.</p>
                    </li>
                </ul>
                <div id="social-media">
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-instagram-alt'></i>
                    <i class='bx bxl-github'></i>
                </div>
            </div>
        </div>
        <!-- Copyright section of footer -->
        <div id="copyright-section">
            <div id="footer-logo">
                <p>Transit</p>
                <i class='bx bx-paper-plane'></i>
            </div>

            <div id="copyright-text">
                <p>Copyright &#169; 2023 Transit. All rights reserved.</p>
            </div>
        </div>
    </footer>
FOOTER;
    $footerSection .= "\n";
    return $footerSection;
}
