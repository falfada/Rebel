<?php get_header() ?>

<!-- Form -->
<section class="form-bg">
    <div class="form-container">
        <h1 class="text-5xl">
            Video <span class="mark black white-text"> <span>Request</span></span>
        </h1>
        <div class="form-progress mt-32">
            <div class="line"></div>
            <div class="step-number one text-center">
                <p>1</p>
                <p class="mt-32 mt-md-16">General information</p>
            </div>
            <div class="step-number two text-center">
                <p>2</p>
                <p class="mt-32 mt-md-16">Specifications</p>
            </div>
            <div class="step-number three text-center">
                <p>3</p>
                <p class="mt-32 mt-md-16">Last details</p>
            </div>
        </div>
        <form id="formStepper" class="form-white-container mt-72 mt-md-24">
            <!-- Step 1 -->
            <div class="step" data-step="1">
                <div>
                    <label for="name" class="font-800 text-lg">Client Name</label>
                    <input type="text" name="name" />
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="videoTitle" class="font-800 text-lg">What is the title of this video?</label>
                    <input type="text" name="videoTitle" id="" />
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="linkVideo" class="font-800 text-lg">Please provide a link to the cloud based folder for all you
                        footage and assets. Make sure the link is shareable!</label>
                    <input type="text" name="linkVideo" id="" />
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="typeVideo" class="font-800 text-lg">What type of video is this? </label>
                    <select name="typeVideo" class="trigger-input">
                        <option>Select an option</option>
                        <option value="corporate">Corporate</option>
                        <option value="course">Course</option>
                        <option value="socialMediaAd">Social media ad</option>
                        <option value="podcast">Podcast</option>
                        <option value="vlog">Vlog</option>
                        <option value="review">Review</option>
                        <option value="tutorial">Tutorial</option>
                        <option value="event">Event</option>
                        <option value="RealEstate">Real estate</option>
                        <option value="other">Other</option>
                    </select>
                    <div class="otherOptionContainer mt-16">
                        <label for="typeVideo-other">Please specify:</label>
                        <input type="text" id="typeVideo-other" name="typeVideo-other">
                    </div>
                </div>
                <div class="d-flex mt-72 mt-md-40 justify-end">
                    <button class="next-button button black">Next</button>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="step" data-step="2">
                <div class="form-two-col">
                    <p class="font-800 text-lg">Which platform(s) is this video for?</p>
                    <div>
                        <input type="checkbox" name="platform" value="youtube" />
                        <label for="youtube">Youtube/Vimeo (16x9)</label>
                    </div>
                    <div>
                        <input type="checkbox" name="platform" value="story" />
                        <label for="story">TikTok/Social Media Story(9x16)</label>
                    </div>
                    <div>
                        <input type="checkbox" name="platform" value="facebook-instagram" />
                        <label for="facebook-instagram">Facebook/Instagram(4x5)</label>
                    </div>
                    <div>
                        <input type="checkbox" name="platform" value="other" class="trigger-input" />
                        <label for="other">Other</label>
                        <div class="otherOptionContainer mt-16">
                            <label for="platform-other">Please specify:</label>
                            <input type="text" id="platform-other" name="platform-other">
                        </div>

                    </div>


                </div>
                <div class="mt-64 mt-md-32">
                    <label for="resolution" class="font-800 text-lg">What resolution will the video be?</label>
                    <select name="resolution" class="trigger-input">
                        <option>Select an option</option>
                        <option value="fullHd">Full HD / 1920X1080</option>
                        <option value="2k">2k / 2560x1440</option>
                        <option value="4k">4k / 3840x2160</option>
                        <option value="other">Other</option>
                    </select>
                    <div class="otherOptionContainer mt-16">
                        <label for="resolution-other">Please specify:</label>
                        <input type="text" id="resolution-other" name="resolution-other">
                    </div>
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="video-delivered" class="font-800 text-lg">How would you like your video delivered?
                    </label>
                    <select name="video-delivered" class="trigger-input">
                        <option>Select an option</option>
                        <option value="both">Both Adobe Files and MP4</option>
                        <option value="mp4">MP4</option>
                        <option value="adobeFiles">Adobe Premiere/After Effects files</option>
                    </select>
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="videoDetails" class="font-800 text-lg">Please provide an outline and any details about the video. (The
                        more details, the better! This helps us create the best first
                        draft possible)</label>
                    <input type="text" name="videoDetails" />
                </div>
                <div class="mt-64 mt-md-32">
                    <p class="font-800 text-lg">Script/notes document upload</p>
                    <div class="custom-file-input mt-24">
                        <label for="fileInput">
                            <span class="material-symbols-outlined">
                                cloud_upload
                            </span>
                        </label>
                        <input type="file" id="fileInput" class="input-file">
                    </div>
                </div>
                <div class="mt-64 mt-md-32">
                    <div class="form-two-col">

                        <p class="font-800 text-lg">What would you like for audio?(check all that apply)</p>
                        <div>
                            <input type="checkbox" name="audioOption" value="music" />
                            <label for="music">Music</label>
                        </div>
                        <div>
                            <input type="checkbox" name="audioOption" value="videoFile" />
                            <label for="videoFile">Video File audio</label>
                        </div>
                        <div>
                            <input type="checkbox" name="audioOption" value="voiceOver" />
                            <label for="voiceOver">Externally recorded audio/VoiceOver</label>
                        </div>
                    </div>
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="musicType" class="font-800 text-lg">If there will be music, what genre/type would you like</label>
                    <input type="text" name="musicType" />
                </div>
                <div class="col-12 d-flex justify-between mt-72 mt-md-40">
                    <button class="prev-button button outline-black">Previous</button>
                    <button class="next-button button black">Next</button>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="step" data-step="3">
                <div>
                    <label for="runTime" class="font-800 text-lg">What is the target run time?</label>
                    <input type="text" name="runTime" />
                </div>
                <div class="mt-64 mt-md-32">
                    <div class="form-two-col">
                        <p class="font-800 text-lg">Do you need subtitles?</p>
                        <div>
                            <input type="radio" name="subtitles" value="yes" />
                            <label for="yes">Yes</label>
                        </div>
                        <div>
                            <input type="radio" name="subtitles" value="no" />
                            <label for="no">No</label>
                        </div>
                    </div>
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="colorProfile" class="font-800 text-lg">Did you shoot your footage in a flat color profile? If so, what
                        camera did you use, and which color profile? (skip if
                        unsure)</label>
                    <input type="text" name="colorProfile" />
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="deadline" class="font-800 text-lg">What’s the deadline?(We can’t guarantee your video will be
                        ready due to revisions, but we want to work according to your
                        schedule and knowing this helps us)</label>
                    <input type="text" name="deadline" />
                </div>
                <div class="mt-64 mt-md-32">
                    <label for="reference" class="font-800 text-lg">We love inspiration! Please share any links to videos you want
                        your final video to resemble.</label>
                    <input type="text" name="reference" />
                </div>
                <div class="col-12 d-flex justify-between mt-72 mt-md-40">
                    <button class="prev-button button outline-black">Previous</button>
                    <button class="next-button button button black">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php get_footer() ?>