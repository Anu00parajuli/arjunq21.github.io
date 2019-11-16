<!DOCTYPE html>
<html>
<head>
  <title>Arjun Adhikari | Profile</title>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width'>
  <meta name='theme-color' content="#eee">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="media.css">
  <link rel="stylesheet" type="text/css" href="components.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div class="cont">
  <div class="gridCont">
    <div class="gridLeft" id='gridLeft'>
      <h4 class='head-text' style='margin-bottom: 0px; color: #999; font-weight: normal;'> Hi there, I am</h4>
          <div class="info head-text">
              <h2 style='letter-spacing: 1px; padding-top: 0px;margin-top: 5px;'>Arjun Adhikari.</h2>
              <div class="profileImage">
                <img src="profile-300x300.jpg">
              </div>
              <h4 style='letter-spacing: 1px; font-style: italic; color: #555 ; margin: 25px 0px;'>I make Websites.</h4>
              <div class="buttons">
<?php 
  $contacts = [
    [ 'text'=> 'facebook.com/arjunq21', 
      'icon'=>'fa fa-facebook-f', 
      'color'=>'#4368B1', 
      'href'=>'https://www.facebook.com/arjunq21'
    ],
    [ 'text'=> '977 9866008814', 
      'icon'=>'fa fa-phone', 
      'color'=>'seagreen', 
      'href'=>'tel:009779866008814'
    ],
    [ 'text'=> 'arjunadhikari789@gmail.com', 
      'icon'=>'fa fa-envelope-open-o', 
      'color'=>'#B83426', 
      'href'=>'mailto:arjunadhikari789@gmail.com'
    ],
    [ 'text'=> 'github.com/arjunQ21', 
      'icon'=>'fa fa-github', 
      'color'=>'#000', 
      'href'=>'https://github.com/arjunq21'
    ],
  ];
?>        
                <?php foreach($contacts as $contact){ ?>
                  <div class="icon_texts">
                    <a href="<?= $contact['href'] ?>">
                      <div class="it_icon">
                        <i class="<?= $contact['icon'] ?>" <?php if($contact['color']) echo " style='color: ". $contact['color']. ";'" ?> ></i>
                      </div>
                      <div class="it_text">
                        <span>
                          <?= $contact['text'] ?>
                        </span>  
                      </div>
                    </a>
                  </div>
                <?php } ?>                               
              </div>
          </div>
    </div>
    <div class="gridRight">
      <div class="rightItems">
        <div class="tab_title">
          <span class="titleText">
            I make websites with
          </span>
        </div>
  <?php 
  $tools = [
    tool("HTML 5", "images/150x150/html.png"),
    tool("CSS 3", "images/150x150/css.png"),
    tool("PHP 7", "images/150x150/php.png"),
    tool("Laravel", "images/150x150/laravel.png"),
    tool("JavaScript", "images/150x150/js.png"),
    tool("MySQL", "images/150x150/mysql.png"),
    tool("Bootstrap", "images/150x150/bootstrap.png"), 
    tool("jQuery", "images/150x150/jquery.png"),
    tool("Vue Js", "images/150x150/vue.png"),
    tool("PhotoShop", "images/150x150/photoshop.png"),
    tool("InDesign", "images/150x150/indesign.png"), 
  ];
  function tool($name, $image){
    return ['name'=>$name, 'image'=>$image] ;
  }
  ?>   
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
      </div><!-- right items -->
    </div><!-- grid right -->
  </div>
</div>
<script src='layout.js'></script>
</body>
</html>