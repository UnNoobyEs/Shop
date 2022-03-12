<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<?php require "header.php"; ?>

<section class="knowledge">
    <div class="container">
        <div class="information">
            <div class="Need">
                <span>
                    All You Need <br> To Know
                </span>
                <img src="img/arrow.svg" alt="" class="arrow">
            </div>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <div class="advantages_Text">
            <img src="img/gif3.gif" alt="">
            <div class="advantages_heading">
                <p>Shipping <span>Policy</span></p>
            </div>
            <div class="description">
                <span>
                    I'm a paragraph. Click here to add
                    your own text and edit me. It’s easy.
                    Just click “Edit Text” or double click
                    me to add your own content and make
                    changes to the font. Feel free to drag
                    and drop me anywhere you like on your
                    page. I’m a great place for you to tell a story and
                    let your users know a little more about you.
                    <p>
                        This is a great space to write long text about your
                        company and your services. You can use this space
                        to go into a little more detail about your company.
                        Talk about your team and what services you provide.
                        Tell your visitors the story of how you came up with
                        the idea for your business and what makes you different
                        from your competitors. Make your company stand out and
                        show your visitors who you are.
                    </p>
                </span>
            </div>
        </div>
        <hr>

        <div class="advantages_Text">
            <img src="img/gif4.gif" alt="">
            <div class="advantages_heading">
                <p>Refund & <span>Exchange</span></p>
            </div>
            <div class="description">
                <span>
                    I'm a paragraph. Click here to add
                    your own text and edit me. It’s easy.
                    Just click “Edit Text” or double click
                    me to add your own content and make
                    changes to the font. Feel free to drag
                    and drop me anywhere you like on your
                    page. I’m a great place for you to tell a story and
                    let your users know a little more about you.
                    <p>
                        This is a great space to write long text about your
                        company and your services. You can use this space
                        to go into a little more detail about your company.
                        Talk about your team and what services you provide.
                        Tell your visitors the story of how you came up with
                        the idea for your business and what makes you different
                        from your competitors. Make your company stand out and
                        show your visitors who you are.
                    </p>
                </span>
            </div>

        </div>
        <hr>

        <div class="advantages_Text">
            <img src="img/gif5.gif" alt="">
            <div class="advantages_heading">
                <p><span>Warranty</span></p>
            </div>
            <div class="description">
                <span>
                    I'm a paragraph. Click here to add
                    your own text and edit me. It’s easy.
                    Just click “Edit Text” or double click
                    me to add your own content and make
                    changes to the font. Feel free to drag
                    and drop me anywhere you like on your
                    page. I’m a great place for you to tell a story and
                    let your users know a little more about you.
                    <p>
                        This is a great space to write long text about your
                        company and your services. You can use this space
                        to go into a little more detail about your company.
                        Talk about your team and what services you provide.
                        Tell your visitors the story of how you came up with
                        the idea for your business and what makes you different
                        from your competitors. Make your company stand out and
                        show your visitors who you are.
                    </p>
                </span>
            </div>

        </div>
        <hr>
    </div>
</section>

<section class="contacts">
    <div class="container">
        <div class="info_field">
            <div class="info">
                <h4>Contact Us</h4>
                <p>
                    <span>
                       <a href="#">info@mysite.com</a>
                        <p>123-456-7890</p>
                    </span>
                </p>
                <div class="Street">
                    <p>
                        <span>
                            500 Terry Francois Street,
                            <p>San Francisco, CA 94158</p>
                        </span>
                    </p>
                </div>
            </div>
                <div class="fieldL">
                    <label for="">
                        <input type="text" placeholder="Name" name="name" class="fieldI">
                    </label>
                        <label for="">
                                <input type="email" placeholder="Email" name="email" class="fieldI">
                            </label>
                            <label for="">
                                <input type="text" placeholder="Subject" name="subject" class="Subject">
                            </label>
                            <label for="">
                                <textarea name="messege" placeholder="Type your message here..." id="messege"></textarea>
                            </label>
                            <label for="">
                                 <input type="submit" value="Submit" class="submit">
                            </label>
                    </label>
                </div>
         </div>
    </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.4961630644184!2d76.95524821493237!3d43.24102217913751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836efbcb65def7%3A0x5004a2dcfd21b0bc!2z0KbQkNCi0K3Qmg!5e0!3m2!1sru!2skz!4v1579607433199!5m2!1sru!2skz" width="100%" height="400" class="maps"></iframe>
</section>

<?php require "footer.php" ?>

</body>
</html>