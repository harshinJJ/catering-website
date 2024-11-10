<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container-fluid px-4 px-lg-5">
        <!-- Navbar toggle button for mobile -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Logo and Navbar Brand -->
        <a class="navbar-brand" href="./">
            <img src="uploads/logo.png" width="130" height="35" class="d-inline-block align-top" alt="Sooraj Caterers & Events" loading="lazy">
        </a>

        <!-- Navbar Links and Dropdowns -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                <?php 
                $cat_qry = $conn->query("SELECT * FROM categories WHERE status = 1 LIMIT 3");
                $count_cats = $conn->query("SELECT * FROM categories WHERE status = 1")->num_rows;
                while($crow = $cat_qry->fetch_assoc()):
                    $sub_qry = $conn->query("SELECT * FROM sub_categories WHERE status = 1 AND parent_id = '{$crow['id']}'");
                    if($sub_qry->num_rows > 0): ?>
                        <!-- Subcategories logic here if needed -->
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php if($count_cats > 3): ?>
                    <li class="nav-item"><a class="nav-link" href="./?p=view_categories">All Categories</a></li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link" href="./?p=about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="./?p=contact">Contact Us</a></li>
            </ul>

            <!-- User Login and Cart Info -->
            <div class="d-flex align-items-center">
                <?php if(!isset($_SESSION['userdata']['id'])): ?>
                    <button class="btn btn-outline-dark ms-2" id="login-btn" type="button">Login</button>
                <?php else: ?>
                    <a class="btn btn-outline-dark ms-2" href="./?p=cart">
                        <i class="bi-cart-fill me-1"></i> Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill" id="cart-count">
                            <?php 
                            if(isset($_SESSION['userdata']['id'])):
                                $count = $conn->query("SELECT SUM(quantity) AS items FROM `cart` WHERE client_id =".$_settings->userdata('id'))->fetch_assoc()['items'];
                                echo ($count > 0 ? $count : 0);
                            else:
                                echo "0";
                            endif;
                            ?>
                        </span>
                    </a>
                    <a href="./?p=my_account" class="btn btn-outline-dark ms-2">
                        <b>Hi, <?php echo $_settings->userdata('firstname')?></b>
                    </a>
                    <a href="logout.php" class="btn btn-outline-dark ms-2">
                        <i class="fa fa-sign-out-alt"></i> Logout
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<script>
    $(function(){
        $('#login-btn').click(function(){
            uni_modal("","login.php")
        })

        $('#navbarResponsive').on('show.bs.collapse', function () {
            $('#mainNav').addClass('navbar-shrink')
        })
        $('#navbarResponsive').on('hidden.bs.collapse', function () {
            if($('body').offset.top == 0)
                $('#mainNav').removeClass('navbar-shrink')
        })
    })

    $('#search-form').submit(function(e){
        e.preventDefault()
        var sTxt = $('[name="search"]').val()
        if(sTxt != '')
            location.href = './?p=products&search='+sTxt;
    })
</script>

