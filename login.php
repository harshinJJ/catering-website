<style>
    #uni_modal .modal-content {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    
    #uni_modal .modal-header {
        display: none;
    }

    #uni_modal .modal-footer {
        display: none;
    }

    .container-fluid {
        padding: 30px;
    }

    h3.text-center {
        color: #333;
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        border-radius: 5px;
        background-color: #007bff;
        border: none;
        padding: 10px 20px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .create-account-link {
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .create-account-link:hover {
        color: #0056b3;
    }

    .err-msg {
        margin-bottom: 15px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <h3 class="float-right">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </h3>
        <div class="col-lg-12">
            <h3 class="text-center">Login</h3>
            <hr>
            <form action="" id="login-form">
                <div class="form-group">
                    <label for="" class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <a href="javascript:void()" id="create_account" class="create-account-link">Create Account</a>
                    <button type="submit" class="btn btn-primary btn-flat">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#create_account').click(function(){
            uni_modal("","registration.php","mid-large")
        });

        $('#login-form').submit(function(e){
            e.preventDefault();
            start_loader();
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Login.php?f=login_user",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                error: err => {
                    console.log(err);
                    alert_toast("An error occurred", 'error');
                    end_loader();
                },
                success: function(resp) {
                    if(typeof resp === 'object' && resp.status === 'success'){
                        alert_toast("Login Successfully", 'success');
                        setTimeout(function(){
                            location.reload();
                        }, 2000);
                    } else if(resp.status === 'incorrect'){
                        var _err_el = $('<div>');
                        _err_el.addClass("alert alert-danger err-msg").text("Incorrect Credentials.");
                        $('#login-form').prepend(_err_el);
                        end_loader();
                    } else {
                        console.log(resp);
                        alert_toast("An error occurred", 'error');
                        end_loader();
                    }
                }
            });
        });
    });
</script>
