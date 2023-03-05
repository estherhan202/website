<!DOCTYPE html>
<html lang="en">
<?php $about = 'active_page' ?>

<?php include('includes/font.php'); ?>

<body>
<?php include('includes/heading.php'); ?>

    <?php include('includes/topic.php'); ?>

    <div class="aboutme">
        <div class="topaboutme">
        <figure class="aboutme">
            <!-- Source:(original work) Esther Han-->
            <img class="aboutme" src="/public/images/me.png" alt="personal image">
        </figure>

        <div class="textaboutme">
            <div class="aboutmeParagraph">
                <p class="aboutme">Hi I'm Esther! <br> I am a sophomore pursing a major in Information Science with a
                    concentration in UX at Cornell.
                </p>
                <p class="aboutme2">With a background in visual arts, I am passionate about the intersection between
                    technology and design. This course of study sparked my interest in human-centered design, leading to
                    my concentration in UX.
                </p>
            </div>
        </div>
    </div>

        <div class="bottomaboutme">
            <div class="aboutmetitle">
            <h3 class="aboutme">Contact Me!</h3>
            <dl>
                <dt>Phone</dt>
                <dd><a class="pink" href="tel:516-225-8215" target="_blank">516-225-8215</a></dd>

                <dt>Email</dt>
                <dd>
                    <a class="pink" href="mailto:eyh25@cornell.edu subject=subjecttext" target="_blank">eyh25@cornell.edu</a>
                </dd>

                <dd>
                    <a class="pink" href="mailto:estherhan202@gmail.com subject=subjecttext" target="_blank">estherhan202@gmail.com</a>
                </dd>

                <dt>Address</dt>
                <dd><a class="pink" href="https://goo.gl/maps/u9fcsQuLLaDGawrj7" target="_blank">121 Triphammer Road Ithaca, NY 14850</a></dd>
                <dd><a class="pink" href="https://goo.gl/maps/TJLcTstZyJev1xDZ6" target="_blank">32 Birchwood Park Drive Syosset, NY 11791</a></dd>

            </dl>
            </div>



            <div class="form">
            <h3 class="aboutme">Leave Me a Message!</h3>

            <form id="request-form" action="/about-me/confirmation" method="post" novalidate>
                <div class="form-label">
                <label for="request-name">Name:</label>
                <input class="longer" type="name" name="name" id="request-name" />
                </div>

                <div class="form-label">
                <label for="request-company">Company:</label>
                <input class="company" type="company" name="company" id="request-company" />
                </div>

                <div class="form-label">
                <label for="request-email">Email:</label>
                <input class="longer" type="email" name="email" id="request-email" />
                </div>

                <div class="form-label">
                <label for="request-number">Number:</label>
                <input class="shorter" type="tel" name="number" id="request-number" />
                </div>

                <div class="form-label" id="message">
                <label for="request-message">Message:</label>
                <textarea type ="message" name="message" rows = "5" cols = "10" ></textarea>
                </div>

                <div class="align-right">
                <input id="request-submit" type="submit" value="Submit" />
                </div>
            </form>
            </div>

        </div>
    </div>
</div>

    <script src="scripts/jquery-3.6.1.js"></script>
    <script src="scripts/java.js"></script>

</body>

</html>
