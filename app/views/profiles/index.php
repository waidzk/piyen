<div class="static ml-12 p-8">
<h2>ubah profiles</h2>
<img src="<?= BASEURL;?>app/assets/img/profiles/<?= isset($data['id']['photo'])? $data['id']['photo'] : 'user.jpg'; ?>" alt="User_Profiles" width="100px">
<form action="<?= BASEURL;?>profiles/update" method="post">
    
    <label for="username">Username: </label>
    <input type="text" name="username" id="username" value="<?= $data['id']['username'] ?>"></input> <br>
    <label for="birth">Tanggal Lahir</label>
    <input type="date" name="birth" id="birth" value="<?= $data['id']['birth'] ?>"></input> <br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" value="<?= $data['id']['email'] ?>"></input> <br>
    <label for="bio">Bio: </label>
    <input type="text" name="bio" id="bio" value="<?= $data['id']['bio'] ?>"></input> <br>
    <button type="submit" name="simpan">Simpan</button>
</form>
<br>
<br>
<form action="" method="post" enctype="multipart/form-data">
    <label for="photo">Upload Photo </label>
    <input type="file" name="photo" id="Photo"></input> <br>
    <button type="submit" name="upload">Upload</button>
</form>
<br>
<br>
<form action="<?= BASEURL;?>profiles/deletephoto" method="post">
    <button type="submit" name="delete_photo">Hapus Photo</button>
</form>
<br>
<br>
<a href="<?= BASEURL; ?>profiles/user/<?= $data['id']['username'];?>/<?= $data['id']['id'];?>">kembali</a>
</div>