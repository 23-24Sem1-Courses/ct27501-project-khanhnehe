<!-- done -->
<title>Chi tiết sản phẩm</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">CHI TIẾT SẢN PHẨM</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <?php if (isset($id_of_category) && isset($name_of_category)): ?>
            <li style="font-weight: 600;" class="breadcrumb-item">
                <a href="?action=list_book&id_of_category=<?php echo $id_of_category; ?>">
                    <?php echo $name_of_category; ?>
                </a>
            </li>&nbsp;
            <?php endif;?>
            <?php if (isset($detail_of_book['book_name'])): ?>
            <li class="breadcrumb-item active" aria-current="page"
                style="color: #ffe020; font-weight: 600; font-size: 16px;">
                &nbsp;<?php echo $detail_of_book['book_name']; ?>
            </li>
            <?php endif;?>
        </ol>
    </nav>
</div>

<main class="container mt-5">
    <div class="row">
        <?php if (isset($detail_of_book['img'])): ?>
        <div class="col-md-6 mb-3">
            <img id="img_detail_book" src="<?php echo "../admin/upload/" . $detail_of_book['img']; ?>" alt="">
        </div>
        <?php endif;?>
        <div id="contain_detail_book" class="col-md-6 mb-3">
            <?php if (isset($detail_of_book['book_name'])): ?>
            <h2 id="name_of_detail_book"><?php echo $detail_of_book['book_name']; ?></h2>
            <?php endif;?>
            <?php if (isset($detail_of_book['nxb'])): ?>
            <p id="nxb_of_detail_book"><?php echo $detail_of_book['nxb']; ?></p>
            <?php endif;?>
            <?php if (isset($detail_of_book['author'])): ?>

            <p id="nxb_of_detail_book">Tác giả: <?php echo $detail_of_book['author']; ?></p>
            <?php endif;?>
            <hr>
            <?php if (isset($detail_of_book['price'])): ?>
            <p id="price_of_detail_book">
                <span><?php echo number_format($detail_of_book['price'], 0, ",", ".") . "đ"; ?></span>
            </p>
            <?php endif;?>
            <?php if (isset($detail_of_book['description'])): ?>
            <p><?php echo $detail_of_book['description']; ?></p>
            <?php endif;?>

            <form id="form_add_into_cart" method="post" class="row mt-5" action="?action=cart">
                <div class="col-3">
                    <label for="amount_book_detail_book" style="color: #ffe020; font-size: 16px; font-weight: 600;">Số
                        lượng</label>
                </div>
                <div class="col-9">
                    <input type="number" id="amount_book_detail_book" class="col-7 mx-sm-3" min="1" name="quantity"
                        value="1">
                </div>
                <?php if (isset($detail_of_book['id'])): ?>
                <input type="hidden" name="id_of_book" value="<?php echo $detail_of_book['id']; ?>">
                <?php endif;?>
                <button type="submit" id="btn_add_into_cart" name="btn_add_into_cart" class="btn">Thêm vào giỏ
                    hàng</button>
            </form>
            <hr>
            <div id="service_detail_book" class="row">
                <!-- Your existing code for service_detail_book -->
            </div>
        </div>
    </div>
</main>