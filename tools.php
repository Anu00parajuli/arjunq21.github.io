  <?php 
  $size = "150x150" ;
  $tools = [
    tool("HTML 5", "images/$size/html.png"),
    tool("CSS 3", "images/$size/css.png"),
    tool("PHP 7", "images/$size/php.png"),
    tool("Laravel", "images/$size/laravel.png"),
    tool("JavaScript", "images/$size/js.png"),
    tool("MySQL", "images/$size/mysql.png"),
    tool("Bootstrap", "images/$size/bootstrap.png"), 
    tool("jQuery", "images/$size/jquery.png"),
    tool("Vue Js", "images/$size/vue.png"),
    tool("WordPress", "images/$size/wordpress.png"),
  ];
  function tool($name, $image){
    return ['name'=>$name, 'image'=>$image] ;
  }
  $otherTools = [
    tool("PhotoShop", "images/$size/photoshop.png"),
    tool("Github", "images/$size/github.png"), 
    tool("Adobe XD", "images/$size/xd.png"),
  ];
?>      <span class="smallTitleText">
          I make websites with
        </span>
        <div class="tools">
          <?php foreach($tools as $tool){ ?>
            <div class="tool">
              <div class="t_img">
                <img src="<?= $tool['image'] ?>" alt="<?= $tool['name']."'s Logo" ?>">
              </div>
              <div class="t_name">
                <?= $tool['name'] ?>
              </div>
            </div>
          <?php } ?>
        </div> 
        <span class="smallTitleText">
          Some other tools I use
        </span> 
        <div class="tools">
          <?php foreach($otherTools as $tool){ ?>
            <div class="tool">
              <div class="t_img">
                <img src="<?= $tool['image'] ?>" alt="<?= $tool['name']."'s Logo" ?>">
              </div>
              <div class="t_name">
                <?= $tool['name'] ?>
              </div>
            </div>
          <?php } ?>
        </div> 