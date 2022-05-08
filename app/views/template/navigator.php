<?php
  $getUrl = $_SERVER['REQUEST_URI'];
  $getFileName = explode('/',$getUrl);
  $result = $getFileName[2]; //home.php
  echo $result
?>

<style>
  .active {
    padding: 10px;
    background-color: #FF5C8D;
    border-radius: 50%;
  }
</style>
<section>
    <div class="navigation-section bg-white flex flex-row md:flex-col items-center justify-center fixed px-10 md:px-3 inset-x-0 bottom-0 md:inset-y-0 md:bottom-0 md:left-0 md:inset-x-auto border-t-2 md:border-r-2">
        <div class="head-navigation">
          <?php if (isset($_SESSION['login'])):?>
            <a href="<?= BASEURL;?>profiles/user/<?= $_SESSION['username'] ?>" class="photo-profile w-8 p-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg></a>
          <?php endif; ?>
        </div>
        <div class="navigation flex flex-row md:flex-col items-center justify-center w-12 mx-auto md:my-12">
            <a href="<?= BASEURL;?>feeds" class="nav-item mx-4 md:my-3 <?php if ($result=='feeds') {echo 'active'; }?>"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg></a>
            <a href="#search" class="nav-item mx-3 md:my-4 <?php if ($result=='search') {echo 'active'; }?>"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg></a>
            <a href="#add_article" class="nav-item mx-3 md:my-4 <?php if ($result=='add_article') {echo 'active'; }?>"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg></a>
            <a href="#voted" class="nav-item mx-3 md:my-4 <?php if ($result=='voted') {echo 'active'; }?>"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
              </svg></a>
        </div>
        <div class="foot-navigation">
          <?php if (isset($_SESSION['login'])):?>
            <a href="<?= BASEURL;?>login/logout" class="nav-item"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg></a>
          <?php endif; ?>
        </div>
    </div>
</section>
