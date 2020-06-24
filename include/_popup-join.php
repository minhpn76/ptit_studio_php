<div class="modal" id="popup-join">
    <div class="modal-overlay"></div>
    <div class="modal-box full">
        <div class="modal-box__inner container ">
            <div class="row">
                <div class="col-md-8 offset-md-2 position-relative">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="sendMailJoin.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="url-page"
                                       value="<?php echo $actual_link; ?>" hidden>
                                <h2 class="mb-3">Hello there,</h2>
                                <p class="text--gray mb-4">Welcome you to join Pit Studio!</p>
                                <p class="text--gray"><a href="mailto:#" class="text--gray"><u>Send a direct e-mail</u></a>
                                    or fill this form.</p>

                                <p class="text--gray mt-5">What position are you interested in?</p>
                                <div class="mt-4">
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="UX Designer" type="checkbox">
                                        <span>UX Designer</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="UI Designer" type="checkbox">
                                        <span>UI Designer</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="Illustrator" type="checkbox">
                                        <span>Illustrator</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                    <label class="checkbox checkbox-btn">
                                        <input name="job[]" value="Animator" type="checkbox">
                                        <span>Animator</span>
                                        <span class="checkbox-btn-mark"></span>
                                    </label>
                                </div>
                                <input id="join-name" class="mt-4" name="join-name" type="text" placeholder="Your name">
                                <input id="join-email" class="mt-4" name="join-mail" type="text" placeholder="Your email">
                                <div class="input-with-icon right mt-4">
                                    <textarea id="join-des" name="join-des" type="text"
                                              placeholder="Personal info or attach CV/ Portfolio"></textarea>
                                    <i id="join-file-btn" class="pit-icon-ic_file active"></i>
                                    <input class="input-file-btn" id="join-file-input" name="join-file" type="file"
                                           accept=".doc,.docs,.pdf,image/*">
                                </div>

                                <div id="file-data-cv" class="mt-3" style="display: none">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p><i class="pit-icon-doc"> </i> <span class="text--gray"></span></p>
                                        <i class="pit-icon-close-fill text--gray file-remove"></i>
                                    </div>
                                </div>
                                <button class="mt-4 btn btn--outline btn--outline-blue px-4">Apply now</button>
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
    $('#join-file-input').change(function () {
        var file_name = $(this).val().split('\\').pop();
        $('#file-data-cv').show();
        $('#file-data-cv span').html(file_name);
    });

    $('#file-data-cv .file-remove').click(function () {
        $('#file-data-cv').hide();
        $('#join-file-input').val("");
    });

    $('#join-name, #join-email, #join-des').click(function () {
        $('#join-name, #join-email, #join-des').removeClass('error');
        $('.error-message').remove();
    });

    $('#popup-join form').submit(function () {
        var flag = true;
        $('.error-message').remove();
        var error = '<p class="error-message">The field is required.</p>';
        if ($('#join-name').val() === '') {
            $('#join-name').after(error);
            $('#join-name').addClass('error');
            flag = false
        }
        if ($('#join-email').val() === '') {
            $('#join-email').after(error);
            $('#join-email').addClass('error');
            flag = false
        }
        if ($('#join-des').val() === '') {
            $('#join-des').after(error);
            $('#join-des').addClass('error');
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