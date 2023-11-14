<!-- done -->
<title>Sản phẩm</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center"><?php echo mb_strtoupper($name_of_category); ?></p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page"
                style="color: #ffe020; font-weight: 600; font-size: 16px;">
                &nbsp;<?php echo ucfirst($name_of_category); ?></li>
        </ol>
    </nav>
</div>
<main class="container mt-3">
    <h3 class="text-center" id="title_book"><span><?php echo mb_strtoupper($name_of_category); ?></span></h3>
    <div id="list_book" class="row mt-5">
        <?php
foreach ($list_of_book as $value) {?>
        <div class="col-md-3 col-6 list_item_book">
            <a href="?action=book_details&id_of_book=<?php echo $value['id'] ?>" class="d-block">
                <img src="<?php echo "../admin/upload/" . $value['img']; ?>" alt="">
            </a>
            <h6 href="?action=book_details&id_of_book=<?php echo $value['id'] ?>" class="d-block text-center mt-3">
                <strong> <?php echo $value['book_name']; ?></strong>
            </h6>
            <h6 class="text-center"><?php echo number_format($value['price'], 0, ",", ".") . " đ"; ?></h6>
        </div>
        <?php }?>
    </div>
</main>