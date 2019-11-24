<!DOCTYPE html>
<html>
<head>
  <title>Arjun Adhikari | Profile</title>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width'>
  <meta name='theme-color' content="#E6F0FF">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="components.css">
  <link rel="stylesheet" type="text/css" href="popup.css">
  <link rel="stylesheet" type="text/css" href="toast.css">
  <link rel="stylesheet" type="text/css" href="media.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src='popup.js'></script>
  <script type="text/javascript" src='toast.js'></script>
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
      'href'=>'https://www.facebook.com/arjunq21',
      'newWindow'=>1,
    ],
    [ 'text'=> 'arjunadhikari789@gmail.com', 
      'icon'=>'fa fa-envelope-open-o', 
      'color'=>'#B83426', 
      'href'=>'mailto:arjunadhikari789@gmail.com',
      'id' => 'mailButton',
      'newWindow'=>1,
    ],
    [ 'text'=> 'github.com/arjunQ21', 
      'icon'=>'fa fa-github', 
      'color'=>'#000', 
      'href'=>'https://github.com/arjunq21',
      'newWindow'=>1,
    ],
    [ 'text'=> '977 9866008814', 
      'icon'=>'fa fa-phone', 
      'color'=>'seagreen', 
      'href'=>'tel:009779866008814',
      'id'=>'callButton',
      'newWindow'=>0,
    ],
  ];
?>        
                <?php foreach($contacts as $contact){ ?>
                  <div class="icon_texts">
                    <a href="<?= $contact['href'] ?>"  
                        <?php if(isset($contact['id'])) echo " id = '".$contact['id']."' " ?>
                        <?php if($contact['newWindow'] == 1) echo " target = '_blank' " ?>
                        >
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
           <!--    <div id="click_and_hold">
                <span>click and hold links</span>
              </div> -->
          </div>
    </div>
    <div class="gridRight">
      <div class="rightItems">
        <!-- <div class="tab_title"> -->
          <span class="titleText">
            I make websites with
          </span>
        <!-- </div> -->
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
    tool("Adobe XD", "images/$size/indesign.png"),
  ];
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
        <span class="titleText">
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
      </div><!-- right items -->
    </div><!-- grid right -->
  </div>
</div>
<div id="toast">
  <span>Sample Toast</span>
</div>

<div id="popup_cont">
  <div id="popup">
    <div class="p_title">
      <div class="p_title_text">
        <span>Popup Title  like this</span>
      </div>
      <div class="p_close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
    </div>
    <div class="p_body">
      body of this
    </div>
  </div>
</div>
<input type="text" name="clipboard" id='clipboardInput'>
<script src='script.js'></script>
</body>
</html>