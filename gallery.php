<?php include "base/header.php";

$target_dir = "img/gallery/";

$images = glob($target_dir . '*.{JPG,JPEG,jpeg,jpg,gif,png,bmp,png,PNG}', GLOB_BRACE);

?>

<!-- breadcrumb -->
<section class="breadcrumb breadcrumb_bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb_iner">
          <div class="breadcrumb_iner_item">
            <h1>Gallery</h1>
            <p>Home<span>/</span>Gallery</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery_part">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-5">
        <div class="section_tittle text-center">
          <h4>Gallery</h4>
          <h2>Live Showcase</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="gallery_part_item">
          <div class="grid">
            <div class="grid-sizer"></div>
            <?php foreach ($images as $image) : ?>
              <a href="<?= $image ?>" class="grid-item grid-item--height bg_img img-gal" style="
                    background-image: url(<?= $image ?>);
                  ">
                <div class="single_gallery_item">
                  <div class="single_gallery_item_iner">
                    <div class="gallery_item_text">
                      <h3>Ejike Ugboaja FC...</h3>
                      <p>Creating Global Talents</p>
                    </div>
                  </div>
                </div>
              </a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="d-none">
  <a href="img/gallery/gallery_item_2.jpg" class="grid-item grid-item--height2 bg_img img-gal" style="
                    background-image: url(img/gallery/gallery_item_2.jpg);
                  ">
    <div class="single_gallery_item">
      <div class="single_gallery_item_iner">
        <div class="gallery_item_text">
          <h3>Ejike Ugboaja FC...</h3>
          <p>Creating Global Talents</p>
        </div>
      </div>
    </div>
  </a>
  <a href="img/gallery/gallery_item_9.jpg" class="grid-item grid-item--width2 grid-item--height2 bg_img img-gal" style="
                    background-image: url(img/gallery/gallery_item_9.jpg);
                  ">
    <div class="single_gallery_item">
      <div class="single_gallery_item_iner">
        <div class="gallery_item_text">
          <h3>Ejike Ugboaja FC...</h3>
          <p>Creating Global Talents</p>
        </div>
      </div>
    </div>
  </a>
  <a href="img/gallery/gallery_item_8.jpg" class="grid-item grid-item--height3 bg_img img-gal" style="
                    background-image: url(img/gallery/gallery_item_8.jpg);
                  ">
    <div class="single_gallery_item">
      <div class="single_gallery_item_iner">
        <div class="gallery_item_text">
          <h3>Ejike Ugboaja FC...</h3>
          <p>Creating Global Talents</p>
        </div>
      </div>
    </div>
  </a>
  <a href="img/gallery/gallery_item_17.jpg" class="grid-item grid-item--height3 bg_img img-gal" style="
                    background-image: url(img/gallery/gallery_item_17.jpg);
                  ">
    <div class="single_gallery_item">
      <div class="single_gallery_item_iner">
        <div class="gallery_item_text">
          <h3>Ejike Ugboaja FC...</h3>
          <p>Creating Global Talents</p>
        </div>
      </div>
    </div>
  </a>
  <a href="img/gallery/gallery_item_5.jpg" class="grid-item grid-item--width2 grid-item--height2 bg_img img-gal" style="
                    background-image: url(img/gallery/gallery_item_5.jpg);
                  ">
    <div class="single_gallery_item">
      <div class="single_gallery_item_iner">
        <div class="gallery_item_text">
          <h3>Ejike Ugboaja FC...</h3>
          <p>Creating Global Talents</p>
        </div>
      </div>
    </div>
  </a>
  <a href="img/gallery/gallery_item_15.jpg" class="grid-item grid-item--height2 bg_img img-gal" style="
                    background-image: url(img/gallery/gallery_item_15.jpg);
                  ">
    <div class="single_gallery_item">
      <div class="single_gallery_item_iner">
        <div class="gallery_item_text">
          <h3>Ejike Ugboaja FC...</h3>
          <p>Creating Global Talents</p>
        </div>
      </div>
    </div>
  </a>
  <a href="img/gallery/gallery_item_8.jpg" class="grid-item grid-item--height1 bg_img img-gal" style="
                    background-image: url(img/gallery/gallery_item_3.jpg);
                  ">
    <div class="single_gallery_item">
      <div class="single_gallery_item_iner">
        <div class="gallery_item_text">
          <h3>Ejike Ugboaja FC...</h3>
          <p>Creating Global Talents</p>
        </div>
      </div>
    </div>
  </a>
</div>

<?php include "base/footer.php" ?>