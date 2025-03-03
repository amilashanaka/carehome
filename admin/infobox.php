  
  <?php

$infobox = array(
  '1' => array(
      'caption' => 'Events',
      'icon' => 'fas fa-cubes',
      'bg' => 'bg-info',
      'url' => 'event_list',
  ),
  '2' => array(
      'caption' => 'News',
      'icon' => 'fas fa-book',
      'bg' => 'bg-danger',
      'url' => 'news_list',
  ),
  '3' => array(
      'caption' => 'Staff',
      'icon' => 'fas fa-file',
      'bg' => 'bg-success',
      'url' => 'staff_list',
  ),
  '4' => array(
      'caption' => 'Users',
      'icon' => 'fas fa-users ',
      'bg' => ' bg-warning',
      'url' => 'user_list',
  ),

);


?>
  
  
  
  
  <!-- Info boxes -->
  <div class="container">
    <div class="row">

      <div class="row">
        <?php foreach ($infobox as $key => $info) : ?>
          <div class="col">
            <div class="info-box">
              <span class="info-box-icon <?= $info['bg'] ?> elevation-1"><i class="<?= $info['icon'] ?>"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><?= $info['caption'] ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>