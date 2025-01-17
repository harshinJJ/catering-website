<?php 
$title = "";
$sub_title = "";
if(isset($_GET['c']) && isset($_GET['s'])){
    $cat_qry = $conn->query("SELECT * FROM categories where md5(id) = '{$_GET['c']}'");
    if($cat_qry->num_rows > 0){
        $result =$cat_qry->fetch_assoc();
        $title = $result['category'];
        $cat_description = $result['description'];
    }
    $sub_cat_qry = $conn->query("SELECT * FROM sub_categories where md5(id) = '{$_GET['s']}'");
    if($sub_cat_qry->num_rows > 0){
        $result =$sub_cat_qry->fetch_assoc();
        $sub_title = $result['sub_category'];
        $sub_cat_description = $result['description'];
    }
}
elseif(isset($_GET['c'])){
    $cat_qry = $conn->query("SELECT * FROM categories where md5(id) = '{$_GET['c']}'");
    if($cat_qry->num_rows > 0){
        $result =$cat_qry->fetch_assoc();
        $title = $result['category'];
        $cat_description = $result['description'];
    }
}
elseif(isset($_GET['s'])){
    $sub_cat_qry = $conn->query("SELECT * FROM sub_categories where md5(id) = '{$_GET['s']}'");
    if($sub_cat_qry->num_rows > 0){
        $result =$sub_cat_qry->fetch_assoc();
        $sub_title = $result['sub_category'];
        $sub_cat_description = $result['description'];
    }
}
?>
<!-- Header -->
<header class="bg-primary py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?php echo $title ?></h1>
            <p class="lead fw-normal text-white-50 mb-0"><?php echo $sub_title ?></p>
        </div>
    </div>
</header>
<!-- Section -->
<section class="py-5 bg-light">
    <div class="container-fluid row">
        <?php if(isset($_GET['c'])): ?>
        <div class="col-md-3 border-right mb-2 pb-3">
            <h3 class="text-primary"><b>Sub Categories</b></h3>
            <div class="list-group">
                <a href="./?p=products&c=<?php echo $_GET['c'] ?>" class="list-group-item list-group-item-action <?php echo !isset($_GET['s']) ? "active" : "" ?>">All</a>
                <?php 
                $sub_cat = $conn->query("SELECT * FROM `sub_categories` where md5(parent_id) =  '{$_GET['c']}' ");
                while($row = $sub_cat->fetch_assoc()): ?>
                    <a href="./?p=products&c=<?php echo $_GET['c'] ?>&s=<?php echo md5($row['id']) ?>" class="list-group-item list-group-item-action <?php echo isset($_GET['s']) && $_GET['s'] == md5($row['id']) ? "active" : "" ?>"><?php echo $row['sub_category'] ?></a>
                <?php endwhile; ?>
            </div>
            <hr>
        </div>
        <?php endif; ?>
        <div class="<?php echo isset($_GET['c'])? 'col-md-9': 'col-md-10 offset-md-1' ?>">
            <div class="container-fluid p-0">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="menus-tab" data-toggle="tab" href="#menus" role="tab" aria-controls="menus" aria-selected="true">Menus</a>
                    </li>
                    <?php if(isset($_GET['c'])): ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Details</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active" id="menus">
                        <?php 
                            if(isset($_GET['search'])){
                                echo "<h4 class='text-center'><b>Search Result for '".$_GET['search']."'</b></h4>";
                            }
                        ?>
                        <div class="row gx-2 gx-lg-2 row-cols-1 row-cols-md-3 row-cols-xl-3">
                            <?php 
                                $whereData = "";
                                if(isset($_GET['search']))
                                    $whereData = " and (title LIKE '%{$_GET['search']}%' or description LIKE '%{$_GET['search']}%')";
                                elseif(isset($_GET['c']) && isset($_GET['s']))
                                    $whereData = " and (md5(category_id) = '{$_GET['c']}' and md5(sub_category_id) = '{$_GET['s']}')";
                                elseif(isset($_GET['c']) && !isset($_GET['s']))
                                    $whereData = " and md5(category_id) = '{$_GET['c']}' ";
                                elseif(isset($_GET['s']) && !isset($_GET['c']))
                                    $whereData = " and md5(sub_category_id) = '{$_GET['s']}' ";
                                
                                $products = $conn->query("SELECT * FROM `products` where status = 1 and `id` in (SELECT product_id FROM `inventory`) {$whereData} order by rand() ");
                                while($row = $products->fetch_assoc()):
                                    $upload_path = base_app.'/uploads/product_'.$row['id'];
                                    $img = "";
                                    if(is_dir($upload_path)){
                                        $fileO = scandir($upload_path);
                                        if(isset($fileO[2]))
                                            $img = "uploads/product_".$row['id']."/".$fileO[2];
                                    }
                                    foreach($row as $k=> $v){
                                        $row[$k] = trim(stripslashes($v));
                                    }
                                    $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$row['id']);
                                    $inv = array();
                                    while($ir = $inventory->fetch_assoc()){
                                        $inv[] = number_format($ir['price']);
                                    }
                                    $row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));
                            ?>
                            <div class="col-md-4 mb-4">
                                <div class="card product-item shadow-sm border-0 rounded">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="<?php echo validate_image(!empty($img) ? $img : $_settings->info('logo')) ?>" alt="<?php echo $row['title'] ?>" />
                                    
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <h5 class="fw-bolder text-primary"><?php echo $row['title'] ?></h5>
                                        <?php foreach($inv as $k=> $v): ?>
                                            <span class="text-success"><b>Price: </b><?php echo $v ?></span>
                                        <?php endforeach; ?>
                                        <div class="truncate text-muted"><?php echo $row['description'] ?></div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                        <a class="btn btn-flat btn-primary" href=".?p=view_product&id=<?php echo md5($row['id']) ?>">View</a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php 
                                if($products->num_rows <= 0){
                                    echo "<h4 class='text-center'><b>No Menu Listed.</b></h4>";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="details">
                        <h3 class="text-center text-primary"><?php echo $title. " Category" ?></h3>
                        <hr>
                        <div>
                            <?php echo isset($cat_description) ? stripslashes(html_entity_decode($cat_description)) : '' ?>
                        </div>
                        <h3 class="text-center text-primary"><?php echo $sub_title?></h3>
                        <hr>
                        <div>
                            <?php echo isset($sub_cat_description) ? stripslashes(html_entity_decode($sub_cat_description)) : '' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Additional styling */
    .product-item {
        transition: transform 0.3s;
    }
    .product-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    .truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
