<?php
function makeSignupSection(){
    $signupSection = <<<SIGNUP
<section id="sign-up-section">
        <div id="sign-up-container">
            <p>What are you waiting for?</p>
            <div id="arrow-container">
                <div>
                    <img src="../asset/images/left-arrow.svg" alt="left arrow pointing to sign up button">
                </div>
                <div>
                    <img src="../asset/images/right-arrow.svg" alt="right arrow pointing to sign up button">
                </div>
            </div>
            <button id="sign-up-button">
                Sign up
                <i class='bx bx-right-arrow-alt' style="font-size: 20px;"></i>
            </button>
        </div>
    </section>
SIGNUP;
    $signupSection .="\n";
    return $signupSection;
}
