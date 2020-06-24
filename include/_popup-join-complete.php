<div class="modal <?php if(isset($_SESSION['name_join']) && $_SESSION['name_join'] !== "") { echo 'open'; session_destroy(); } ?>" id="popup-join-complete">
    <div class="modal-overlay"></div>
    <div class="modal-box full">
        <div class="modal-box__inner container ">
            <div class="row">
                <div class="col-md-8 offset-md-2 position-relative">
                    <h1 class="mt-5 pt-5">
                        Thank you, <span class="text--blue"><?php if(isset($_SESSION['name_join'])) echo $_SESSION['name_join'] ?></span>. <br>
                        We received the <br>
                        information from you. <br>
                    </h1>
                    <p class="mb-5 text--gray mt-3">Pit will contact you as soon as possible.</p>

                    <span  class="modal-icon-close modal-close text--green">
                        <img src="img/icon/x.svg" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>