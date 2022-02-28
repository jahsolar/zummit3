<?php
    include ("server.php");
?>
<html>
    <head>
        <title>Upload CV</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="text"><h1>Apply for a job</h1>
            <p>We have a lot of job opportunities and are hiring, we're always looking <br>
            for high-talented candidates of all the business type use the form <br> below and let us know about you and contact you back.</p>
        </div>
        <div class="form-container"> 
            <div class= "container">
                <div id="left-container" class="section">
                    <form method="post" action="index.php" enctype="multipart/form-data">
                        <div class="input-cont">
                            <p>Your Name</p>
                            <input type="text" name="name" placeholder="Fullname">
                        </div>
                    
                        <div class="input-cont"> 
                            <p>Phone Number</p>
                            <input type="tel" name="phone" placeholder="Phone Number">
                        </div>
                    
                        <div class="input-cont"> 
                            <p>Year Of Experience </p>
                            <input type="Number" name="yoe" placeholder="Year Of Experience">
                        </div>
                   
                        <div class="input-cont">
                            <p>Your References</p>
                            <input type="text" name="past_company" placeholder="Companies you worked with">
                        </div>
                        <div class="input-cont">
                            <p>Interested In:</p> 
                            <select name="interest" id="Interested In">
                                <option value="Full Time Job">Full Time Job</option>
                                <option value="Part Time Job">Part Time Job</option>
                                <option value="Both">Both</option>
                            </select>
                        </div>
                            
                        <div class="input-cont"> 
                            <p>Job Location Preference</p>
                            <select name="job_location" id="Job Location Preference">
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Germany">Germany</option>
                            </select>
                        </div>                               
                    </div>
                    <div id="right-container" class="section">
                        <div class="input-cont">
                            <p>Your Email</p>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-cont"> 
                            <p>Apply For</p> 
                            <select name="apply" id="apply for">
                                <option value="Employment">Employment</option>
                                <option value="Internship">Internship</option>
                            </select>
                        </div>
               
                        <div class="input-cont"> 
                            <p>Can We Call You?</p> 
                            <input type="radio" name="call_req" id="Accepts with Pleasure">
                            <label for="Accepts with Pleasure">Accepts with Pleasure</label>
                            <input type="radio" name="call_req" id="Declines with Regret">
                            <label for="Declines with Regret">Declines with Regret</label>
                        </div>
                        <div class="input-cont">
                            <p>Periods Preference</p>
                            <select name="period" id="Periods Preferences">
                                <option value="Daytime">Daytime</option>
                                <option value="Night">Night</option>
                                <option value="Both">Both</option>
                            </select>
                        </div>
                        <div class="input-cont"> 
                            <p> Your Resume</p>
                            <input type="file" name="upload" id="fileselect">
                        </div>
                        <div class="input-cont">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </form>          
                </div>
            </div>
        </div>
    </body>
</html>