<?php
require_once 'Classes/CrudPost.php';

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = :id";
$stmt = Conection::prepare($sql);
$stmt->bindParam('id', $id);
$stmt->execute();
$update = $stmt->fetch();

if (isset($_POST['updatePost']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $text = $_POST['text'];

    $updatePost = new CrudPost();
    $updatePost->update($id, $title, $subtitle, $text);
    header('Location: index.php');
}
?>

<?php require_once 'template/header.php';?>
<div class="right_col" role="main">
    <div class="container-fluid" style="background-color: white">
        <form method="post">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" name="title" value="<?= $update['title']?>">
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitulo</label>
                <input type="text" class="form-control" name="subtitle" value="<?= $update['subtitle']?>"
            </div>

            <div class="form-group">
                <label for="text">Texto</label>
                <textarea class="form-control" name="text"  rows="6"><?= $update['text']?></textarea>
            </div>

            <button type="submit" name="updatePost" class="btn btn-primary">Editar Post</button>
        </form me>
    </div>
</div>

<?php require_once 'template/footer.php';?>

