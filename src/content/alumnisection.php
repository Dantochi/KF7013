<?php
function makeAlumniSection(){
    $alumniSection = <<<ALUMNI
<section id="alumni-section">
        <div id="alumni-container">
            <div id="alumni-header">
                <h2>What alumni say about us</h2>
            </div>
            <div id="comments-container">
                <!-- 1st comment -->
                <div class="comment" id="comment-1">
                    <div id="alumni-1">
                        <div id="avatar-container">
                            <img src="../asset/images/Nigerian-Man.svg" alt="Nigerian Man gives comment about transit.">
                        </div>
                    </div>
                    <div id="first-comment">
                        <p>Attending a cohort in transit was one of the best decisions I ever made to take myself to the
                            next level in tech. The project sessions were very intense, I gotta say but it gave me a
                            smooth
                            transition into the tech world. In no time I got a job. </p>
                    </div>
                </div>
                <!-- 2nd comment -->
                <div class="comment" id="comment-2">
                    <div id="alumni-2">
                        <div id="avatar-container1">
                            <img src="../asset/images/Nigerian-woman.svg" alt="Nigerian Woman gives comment about transit.">
                        </div>
                    </div>
                    <div id="second-comment">
                        <p>I’m short of words honestly... They were the hand I needed to lead me in the right direction
                            in the area of UI/UX. The project session inspired me to begin a start up.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
ALUMNI;
    $alumniSection .= "\n";
    return $alumniSection;
}