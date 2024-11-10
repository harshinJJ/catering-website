<?php 
$title = "All Book Categories";
$sub_title = "";
if (isset($_GET['c']) && isset($_GET['s'])) {
    $cat_qry = $conn->query("SELECT * FROM categories WHERE md5(id) = '{$_GET['c']}'");
    if ($cat_qry->num_rows > 0) {
        $title = $cat_qry->fetch_assoc()['category'];
    }
    $sub_cat_qry = $conn->query("SELECT * FROM sub_categories WHERE md5(id) = '{$_GET['s']}'");
    if ($sub_cat_qry->num_rows > 0) {
        $sub_title = $sub_cat_qry->fetch_assoc()['sub_category'];
    }
} elseif (isset($_GET['c'])) {
    $cat_qry = $conn->query("SELECT * FROM categories WHERE md5(id) = '{$_GET['c']}'");
    if ($cat_qry->num_rows > 0) {
        $title = $cat_qry->fetch_assoc()['category'];
    }
} elseif (isset($_GET['s'])) {
    $sub_cat_qry = $conn->query("SELECT * FROM sub_categories WHERE md5(id) = '{$_GET['s']}'");
    if ($sub_cat_qry->num_rows > 0) {
        $title = $sub_cat_qry->fetch_assoc()['sub_category'];
    }
}
?>
<!-- Header-->

<header class="contact-us-banner">
    <div class="container ">
        <div class="text-center ">
            <h1><span class="highlight">All </span> categories</h1>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-2 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
           
            <?php 
            $whereData = "";
            $categories = $conn->query("SELECT * FROM `categories` WHERE status = 1 ORDER BY category ASC");
            while ($row = $categories->fetch_assoc()):
                foreach ($row as $k => $v) {
                    $row[$k] = trim(stripslashes($v));
                }
                $row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));
            ?>
            <div class="col mb-4">
                <a href="./?p=products&c=<?php echo md5($row['id']) ?>" class="card category-item text-dark shadow-lg rounded border-0">
                    <div class="card-body">
                        <h5 class="mb-3"><?php echo $row['category'] ?></h5>
                        <p class=" " style="max-height: 50px; ;"><?php echo $row['description'] ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
    }
    .contact-us-banner {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)),
                url('uploads/bg10.jpeg') no-repeat center center fixed; /* Use the image you pass dynamically */
    background-size: cover;
    color: #fff;
    padding: 200px 0;
    text-align: center;
    position: relative;
    z-index: 1;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.6);
    font-family: 'Montserrat', sans-serif;
}

.contact-us-banner h1 {
    font-size: 4.5rem;
    font-weight: 900;
    letter-spacing: 4px;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.highlight {
    color: #ff6600; /* Orange color */
}

.highlight1 {
    color: white; /* White color */
}

.category-item {
        text-decoration: none !important;
        background-color: #f9f9f9; /* Light background for a clean look */
        border-radius: 10px; /* Smooth rounded corners */
        overflow: hidden;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 200px;
    }

    .category-item:hover {
        transform: translateY(-10px); /* Lift effect on hover */
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
    }

    .category-item h5 {
        color: #0D6EFD; /* Orange header color */
        font-weight: 600;
        text-transform: uppercase; /* Make header text uppercase */
    }

    .category-item p {
        color: #666; /* Softer color for description */
        font-size: 0.9rem; /* Slightly smaller text for description */
        line-height: 1.4;
        margin-top: 5px;
        
    }

    .category-item .card-body {
        padding: 20px; /* Increased padding for a spacious feel */
    }

    /* Optional: Add border effect on hover */
    .category-item:hover {
        border: 2px solid orange;
    }

    .truncate {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2; /* Limit to 2 lines */
    }
    
</style>
