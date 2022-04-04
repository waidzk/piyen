
<ul>

    <li>USER ID: <?php echo $data['userdata']['id']; ?></li>
    <li>Photo</li>
    <img src="<?= BASEURL;?>app/assets/img/profiles/<?= isset($data['userdata']['photo'])? $data['userdata']['photo'] : 'user.jpg'; ?>" alt="User_Profiles" width="100px">
    <li>uname :<?php echo $data['userdata']['username']; ?></li>
    <li>Birth :<?php echo $data['userdata']['birth']; ?></li>
    <li>email :<?php echo $data['userdata']['email']; ?></li>
    <li>bio   :<?php echo $data['userdata']['bio']; ?></li>
    
</ul>

<p><a href="<?= BASEURL; ?>profiles">Ubah Data Profile Sekarang</a></p>