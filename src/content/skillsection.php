<?php

// TODO: Use associative arrays to make the skills containers using loops
function makeSkillSection(){
    $skillSection = <<<SKILLSECTION
<section id="skills-section">
        <div class="skills-container">
            <div id="skills-header">
                <h2>In demand skills</h2>
            </div>
            <div class="courses">
                <div class="course">
                    <p class="course-level">Beginner</p>
                    <p class="course-role">Front-end Developer</p>
                    <div class="skill-logo">
                        <div>
                            <i class='bx bxl-python' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-html5' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-css3' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-php' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-postgresql' style="font-size: 15px;"></i>
                        </div>
                    </div>
                    <p class="course-period">65hrs</p>
                </div>

                <div class="course">
                    <p class="course-level">Beginner</p>
                    <p class="course-role">UI/UX Designer</p>
                    <div class="skill-logo">
                        <div>
                            <i class='bx bxl-python' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-html5' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-css3' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-php' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-postgresql' style="font-size: 15px;"></i>
                        </div>
                    </div>
                    <p class="course-period">15hrs</p>
                </div>

                <div class="course">
                    <p class="course-level">Beginner</p>
                    <p class="course-role">DevOps Engineering</p>
                    <div class="skill-logo">
                        <div>
                            <i class='bx bxl-python' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-html5' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-css3' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-php' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-postgresql' style="font-size: 15px;"></i>
                        </div>
                    </div>
                    <p class="course-period">25hrs</p>
                </div>

                <div class="course">
                    <p class="course-level">Beginner</p>
                    <p class="course-role">Data analyst</p>
                    <div class="skill-logo">
                        <div>
                            <i class='bx bxl-python' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-html5' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-css3' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-php' style="font-size: 15px;"></i>
                        </div>
                        <div>
                            <i class='bx bxl-postgresql' style="font-size: 15px;"></i>
                        </div>
                    </div>
                    <p class="course-period">36hrs</p>
                </div>


            </div>
        </div>
    </section>
SKILLSECTION;
    $skillSection .= "\n";
    return $skillSection;
}
