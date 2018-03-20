<?php
require_once 'Classes/CrudPost.php';

if (isset($_POST['insertPost']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $text = $_POST['text'];
    $data = date('Y-m-d H:i:s');


    $post = new CrudPost();
    $post->insert($title, $subtitle, $text, $data);
    header('Location: index.php');
}
?>

<?php require_once 'template/header.php';?>
<div class="right_col" role="main">
    <div class="container-fluid" style="background-color: white">
        <form method="post">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titulo">
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitulo</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Subtitulo">
            </div>

            <div class="form-group">
                <label for="text">Texto</label>
                <textarea class="form-control" name="text" id="text" rows="3"></textarea>
            </div>

            <button type="submit" name="insertPost" class="btn btn-primary">Novo Post</button>
        </form me>
    </div>
</div>

<?php require_once 'template/footer.php';?>

