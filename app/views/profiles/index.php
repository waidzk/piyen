<h2>ubah profiles</h2>
<form action="<?= BASEURL;?>profiles/update" method="post">
    
    <label for="username">Username: </label>
    <input type="text" name="username" id="username" value="<?= $data['id']['username'] ?>"></input> <br>
    <label for="birth">Tanggal Lahir</label>
    <input type="date" name="birth" id="birth" value="<?= $data['id']['birth'] ?>"></input> <br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" value="<?= $data['id']['email'] ?>"></input> <br>
    <label for="bio">Bio: </label>
    <input type="text" name="bio" id="bio" value="<?= $data['id']['bio'] ?>"></input> <br>
    <label for="photo">Photo: </label>
    <input type="file" name="photo" id="Photo" value="<?= $data['id']['photo'] ?>"></input> <br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<a href="<?= BASEURL; ?>profiles/user/<?= $data['id']['username'];?>">kembali</a>