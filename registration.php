<style>
    #uni_modal .modal-content {
        border-radius: 15px;
        overflow: hidden;
    }

    #uni_modal .modal-header, #uni_modal .modal-footer {
        display: none;
    }

    .registration-container {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .form-control {
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid #ced4da;
    }

    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn-primary {
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .control-label {
        font-weight: bold;
        color: #495057;
    }

    .text-center {
        color: #007bff;
    }

    hr {
        border-top: 2px solid #007bff;
    }
</style>

<div class="container-fluid">
    <form action="" id="registration" class="registration-container">
        <div class="text-center mb-4">
            <h3>Create New Account</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <hr>
        </div>
        <div class="row align-items-center h-100">
            <div class="col-lg-5 border-right pr-4">
                <div class="form-group">
                    <label for="" class="control-label">Firstname</label>
                    <input type="text" class="form-control form-control-sm" name="firstname" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Lastname</label>
                    <input type="text" class="form-control form-control-sm" name="lastname" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Contact</label>
                    <input type="text" class="form-control form-control-sm" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Gender</label>
                    <select name="gender" class="custom-select" required>
                        <option selected disabled>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="form-group">
                    <label for="" class="control-label">Address</label>
                    <textarea class="form-control" rows='3' name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Email</label>
                    <input type="email" class="form-control form-control-sm" name="email" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Password</label>
                    <input type="password" class="form-control form-control-sm" name="password" required>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <a href="javascript:void()" id="login-show" class="text-primary">Already have an Account?</a>
                    <button type="submit" class="btn btn-primary btn-flat">Register</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(function() {
        $('#login-show').click(function() {
            uni_modal("", "login.php");
        });
        $('#registration').submit(function(e) {
            e.preventDefault();
            start_loader();
            if ($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url: _base_url_ + "classes/Master.php?f=register",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                error: err => {
                    console.log(err);
                    alert_toast("an error occurred", 'error');
                    end_loader();
                },
                success: function(resp) {
                    if (typeof resp == 'object' && resp.status == 'success') {
                        alert_toast("Account successfully registered", 'success');
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    } else if (resp.status == 'failed' && !!resp.msg) {
                        var _err_el = $('<div>');
                        _err_el.addClass("alert alert-danger err-msg").text(resp.msg);
                        $('[name="password"]').after(_err_el);
                        end_loader();
                    } else {
                        console.log(resp);
                        alert_toast("an error occurred", 'error');
                        end_loader();
                    }
                }
            });
        });
    });
</script>
