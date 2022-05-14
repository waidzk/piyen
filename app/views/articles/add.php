<form action="" method="post">
    <label for="title">Title : </label>
    <input type="text" name="title" id="tile" placeholder="Masukan judul di sini..."></input>
    <textarea name="articles" id="articles" cols="30" rows="50"></textarea>
    <button type="submit" name="save">Save Change</button>
</form>
<a href="<?= BASEURL?>articles">Back</a>
<script>
    CKEDITOR.replace( 'articles' ); // used id from textarea
</script>
