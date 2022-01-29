    <?php
        $select = "SELECT * FROM resume_section where rId='1'";
        $query = mysqli_query($connect, $select);
    
        while( $row = mysqli_fetch_array($query))
        {
            $englishResume = $row['rEnglishResume'];
            $albanianResume = $row['rAlbanianResume'];
            $certifications = $row['rCertifications'];
            $letterOfRecommendation = $row['rLetterOfRecommendation'];
    ?>            
            
            <div class="portofolio-container transition3">
                <div class="portofolio-left">
                    <div class="inner">
                        <p class="subtitle">My Resume and Certifications</p>
                        <p class="featured-title">Download My Resume</p>
                        <p class="featured-desc"><a href="resume/<?= $englishResume ?>" download>Click Here To Download My Resume - EN</a><br>
                        <a href="resume/<?= $albanianResume ?>" download>Click Here To Download My Resume - AL</a> </p>
                        <p class="featured-desc"><a href="resume/<?= $certifications ?>" download>Click Here To Download My Certificates</a> </p>
                        <p class="featured-desc"><a href="resume/<?= $letterOfRecommendation ?>" download>Click Here To Download Letter of Recommendation</a> </p>
                    </div>
                </div>
            </div>

    <?php 
        }
    ?>