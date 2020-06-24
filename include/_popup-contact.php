<div class="modal" id="popup-contact">
    <div class="modal-overlay"></div>
    <div class="modal-box full">
        <div class="modal-box__inner container ">
            <div class="row">
                <div class="col-md-8 offset-md-2 position-relative">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="sendMail.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="url-page"
                                       value="<?php echo $actual_link; ?>" hidden>
                                <h2 class="mb-3">Send us an e-mail</h2>
                                <p class="text--gray"><a href="mailto:#" class="text--gray"><u>Send a direct e-mail</u></a>
                                    or fill this form.</p>

                                <p class="text--gray mt-5">What are you looking for?</p>
                                <div class="mt-4">
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="Interface design" type="checkbox">
                                        <span>Interface design</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="Illustration" type="checkbox">
                                        <span>Illustration</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="Branding" type="checkbox">
                                        <span>Branding</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="Development" type="checkbox">
                                        <span>Development</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="Others" type="checkbox">
                                        <span>Others</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                </div>
                                <input id="cus-name" class="mt-4" name="cus-name" type="text" placeholder="Your name">
                                <input id="cus-email" class="mt-4" name="cus-mail" type="text" placeholder="Your email">
                                <div class="input-with-icon right mt-4">
                                    <textarea name="cus-des" type="text"
                                              placeholder="Project description (Optional)"></textarea>
                                    <i id="cus-file-btn" class="pit-icon-ic_file active"></i>
                                    <input class="input-file-btn" id="cus-file-input" name="cus-file" type="file"
                                           accept=".doc,.docs,.pdf,image/*">
                                </div>

                                <div id="file-data-contact" class="mt-3" style="display: none">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p><i class="pit-icon-doc"> </i> <span class="text--gray"></span></p>
                                        <i class="pit-icon-close-fill text--gray file-remove"></i>
                                    </div>
                                </div>
                                <button class="mt-4 btn btn--outline btn--outline-blue px-4">SEND IT</button>
                            </form>
                        </div>
                    </div>

                    <span class="modal-icon-close modal-close text--green">
                        <img src="img/icon/x.svg" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#cus-file-input').change(function () {
        var file_name = $(this).val().split('\\').pop();
        $('#file-data-contact').show();
        $('#file-data-contact span').html(file_name);
    });

    $('#file-data-contact .file-remove').click(function () {
        $('#file-data-contact').hide();
        $('#cus-file-input').val("");
    });

    $('#cus-name, #cus-email').click(function () {
        $('#cus-name, #cus-email').removeClass('error');
        $('.error-message').remove();
    });

    $('#popup-contact button').click(function (e) {

    });

    $('#popup-contact form').submit(function () {
        var flag = true;
        $('.error-message').remove();
        var error = '<p class="error-message">The field is required.</p>';
        if ($('#cus-name').val() === '') {
            $('#cus-name').after(error);
            $('#cus-name').addClass('error');
            flag = false
        }
        if ($('#cus-email').val() === '') {
            $('#cus-email').after(error);
            $('#cus-email').addClass('error');
            flag = false
        }
        if(flag) {
            $('.loading').show();
            $('.loading').css('background-color', '#ffffffb0');
            $('.loading .section-img').after('<p class="mt-3">Sending...</p>');
        }
        return flag;
    })
</script>