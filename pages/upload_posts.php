<div class="overlay hidden-upload">
    <div class="content">
        <div class="title-upload-container">
            <p id="public">Opublikuj książkę</p>
            <div class="x-close">x</div>
        </div>
        <form action="php_scripts/upload_posts.php" method="post" enctype="multipart/form-data">
            <div class="input-container">
                <input type="text" name="title" placeholder="Tytuł" id="title">
                <input type="text" name="author" placeholder="Autor książki" id="author">
                <div class="upload-container">
                    <label class="upload-label">Załącz zdjęcie książki:</label>
                    <input type="file" accept="image/*" class="upload" name="upload">
                </div>
            </div>
            <button class="submit-button">Publikuj</button>
        </form>
    </div>
</div>

  <script src="/bookcrossing/scripts/upload_posts.js"></script>