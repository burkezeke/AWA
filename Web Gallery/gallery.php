<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AWA Photo Gallery | Ezekiel Burke</title>
    <link rel="stylesheet" href="assets/css/grid-gallery.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
  <div class="content">
    <div class="gg-container" style="padding: 15px;">
      <div class="gg-box" id="gap">
        <?php
          $all_files = glob("assets/gallery/*.*");
          for ($i=0; $i<count($all_files); $i++){
            $image_name = $all_files[$i];
            $supported_format = array('jpg');
            $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_format))
                {
                  echo '<img src="'.$image_name .'" alt="'.$image_name.'" />';
                } else {
                    continue;
                }
          }
        ?>

        <!--
        <img src="assets/gallery/1.jpg">
        <img src="assets/gallery/2.jpg">
        <img src="assets/gallery/3.jpg">
        <img src="assets/gallery/4.jpg">
        <img src="assets/gallery/5.jpg">
        -->
      </div>
    </div>
  </div>

  <div id="boardcontainer">
    <div id="boardmenu" style="width: 68px;">
        <a class="btn" href="index.php" name="galleryview"><i class="bi bi-box-arrow-left"></i></a>
    </div>
</div>

  <script src="assets/js/grid-gallery.min.js"></script>
    <script>
    gridGallery({
      selector: ".dark",
      darkMode: true
    });
    gridGallery({
      selector: "#horizontal",
      layout: "horizontal"
    });
    gridGallery({
      selector: "#square",
      layout: "square"
    });
    gridGallery({
      selector: "#gap",
      gaplength: 25
    });
    gridGallery({
      selector: "#heightWidth",
      rowHeight: 180,
      columnWidth: 280
    });
    </script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
