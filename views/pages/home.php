<?php
$q = "SELECT * FROM post";
$con = $db->allQuery($q);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include 'complements/head.php';
    ?>
    <title>Inicio</title>
</head>

<body>

    <?php
    include 'complements/navbar.php';
    ?>
    <section class="container">
        <div class="text-center">
            <h1 class="my-3">Foro</h1>
        </div>
        <div class="w-50 mx-auto">
            <?php

            while ($data = mysqli_fetch_array($con)) {
                $idUserPost = $data['postIdUser'];
                $quserPost = "SELECT * FROM user WHERE id='$idUserPost';";
                $userPost = $db->allQuery($quserPost);
                $dataUserPost = mysqli_fetch_array($userPost);
                $idPost = $data['id'];
                $qComment = "SELECT * FROM comments WHERE commentIdPost='$idPost';";
                $comments = $db->allQuery($qComment);
            ?>
                <div class="my-5 border p-3" id="<?php echo $data['id'] ?>">
                    <div class="d-flex justify-content-between">
                        <h5><i class="fas fa-user"></i> <?php echo $dataUserPost['name'] ?></h5>
                        <h6><?php echo $data['date'] ?></h6>
                        <?php if (!empty($_SESSION['id']) && $_SESSION['rol'] == 1) { ?>
                            <form action="./controller/post.php" method="POST"><button class="btn btn-outline-danger" type="submit" value="<?php echo $data['id']; ?>" name="deletePost"><i class="fas fa-times"></i></button></form>
                        <?php } ?>
                    </div>
                    <hr>
                    <div>
                        <p><?php echo $data['content'] ?></p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around">
                        <p><i class="far fa-heart" style="color: red;;"></i> <?php echo $data['likes'] ?></p>
                        <p><i class="far fa-comment-alt" style="color:cornflowerblue;"></i> <?php echo $data['comments'] ?></p>
                    </div>
                    <?php if (!empty($_SESSION['id'])) { ?>
                        <hr>
                        <div class="text-end">
                            <form action="./controller/comments.php" method="post">
                                <textarea name="contentComment" id="contentComment" cols="30" rows="3" class="form-control" maxlength="254" required placeholder="Escriba aquí su comentario..."></textarea>
                                <button type="submit" class="btn btn-outline-primary mt-3" name="post" value="<?php echo $data['id'] ?>">Enviar comentario</button>
                            </form>
                        </div> <?php } ?>
                    <hr>
                    <?php
                    while ($dataComment = mysqli_fetch_array($comments)) {
                        $idUserComment = $dataComment['commentIdUser'];
                        $qusercomment = "SELECT * FROM user WHERE id='$idUserComment';";
                        $dataUserComment = mysqli_fetch_array($db->allQuery($qusercomment));
                    ?>
                        <div class="w-75 mx-auto">

                            <div class="my-3 border p-3">
                                <div class="d-flex justify-content-between">
                                    <h6><i class="fas fa-user"></i> <?php echo $dataUserComment['name'] ?></h6>
                                    <h6><?php echo $dataComment['dateComment'] ?></h6>
                                </div>
                                <hr>
                                <div>
                                    <p><?php echo $dataComment['commentContent'] ?></p>
                                </div>
                            </div>

                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <?php include 'complements/footer.php'  ?>
</body>

</html>