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
  <link rel="stylesheet" type="text/css" href="anim.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src='anim.js'></script>
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
                <!-- <img src="profile-300x300.jpg"> -->
                <!-- <img src="images/babi-d-bya.jpg" alt=""> -->
                <img src="images/pul_ma_cropped.jpg">
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
      'title'=>'Facebook Profile'
    ],
    [ 'text'=> 'arjunadhikari789@gmail.com', 
      'icon'=>'fa fa-envelope-open-o', 
      'color'=>'#B83426', 
      'href'=>'mailto:arjunadhikari789@gmail.com',
      'id' => 'mailButton',
      'newWindow'=>1,
      'title'=>'Email Address, Click to see'
    ],
    [ 'text'=> 'github.com/arjunQ21', 
      'icon'=>'fa fa-github', 
      'color'=>'#000', 
      'href'=>'https://github.com/arjunq21',
      'newWindow'=>1,
      'title'=>'Github Profile'
    ],
    [ 'text'=> '977 9866008814', 
      'icon'=>'fa fa-phone', 
      'color'=>'seagreen', 
      'href'=>'tel:009779866008814',
      'id'=>'callButton',
      'newWindow'=>0,
      'title'=>"Phone Number, click to see"
    ],
  ];
?>        
                <?php foreach($contacts as $contact){ ?>
                  <div class="icon_texts">
                    <a href="<?= $contact['href'] ?> "  
                        <?php if(isset($contact['id'])) echo " id = '".$contact['id']."' " ?>
                        <?php if($contact['newWindow'] == 1) echo " target = '_blank' " ?>
                        title = "<?= $contact['title']  ?>" 
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
          </div>
    </div>
    <div class="gridRight">
      <div class="rightItems">
        <span class="titleText">
          About
        </span>
        <div class="normalText">
        I am a Software Engineering student from GCES, Pokhara. I live in Pokhara, Nepal.
        <div class="mv10"></div>
        I have been making websites for over 3 years. I like making websites simple and professional, with attention to every little details.
        <div class="mv10"></div>  
        I make websites from scratch with HTML5, CSS3, PHP, MySQL and JavaScript. I can fluently use framewroks like Laravel, Wordpress, Bootstrap3/4, jQuery and VueJS.
        <br>
        I use GitHub for version controlling.
        <br>
        I use photoshop and XD too, for designing.
        </div>
          
     <!--    <span class="titleText">
          Projects
        </span> -->

        <?php include "tools.php"; ?>
                

      </div><!-- right items -->
    </div><!-- grid right -->
  </div>
</div>
<div id="toast">
  <span>Sample Toast</span>
</div>

<div class="popup_cont">
  <div id="popup">
    <div class="p_title">
      <div class="p_title_text">
        <span>Popup Title looks like this</span>
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