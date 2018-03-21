<?php
require_once 'Classes/CrudPost.php';

$posts = new CrudPost();

if (isset($_POST['delete'])){

    $id = $_POST['id'];
    $delete = new CrudPost();
    $delete->delete($id);
}

?>
<?php require_once 'template/header.php';?>

    <div class="right_col" role="main">
        <div class="container-fluid" style="background-color: white">
            <?php foreach ($posts->findAll() as $post) :?>
                <div class="card text-center" style="background-color: #d5d5d5">
                    <br>
                    <div class="card-body" style="color: #0f0f0f">
                        <h3 class="card-title"><?= $post['title'].' : '.$post['subtitle'] ?></h3>
                        <hr>
                        <h2 class="card-text "><?= $post['text']?></h2>
                    </div>
                    <hr>
                    <div class="card-footer text-muted">
                        <p>Data: <?= date('d/m/Y H:i:s',strtotime($post['data']));?></p></a>
                        <a href="update.php?id=<?=$post['id']?>" class="btn btn-primary">Update</a>
                        <form method="post">
                            <input type="hidden" name="id" value="<?= $post['id']?>">
                            <button name="delete" onclick="alert('Tem certeza que quer excluir esse Post?')" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                    <br><br>
                    <hr>
                </div>

            <?php endforeach;?>
        </div>
    </div>
</div>

<?php require_once 'template/footer.php';?>
