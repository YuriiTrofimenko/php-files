<ul class="nav nav-pills">
    <li role="presentation" class="nav-item"><a class="active nav-link" href="index.php?page=home">Home</a></li>
    <?php if(isset($_SESSION['user_name'])) : ?>
    <li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=upload">Upload</a></li>
    <li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=gallery">Gallery</a></li>
    <?php endif; ?>
    <?php if(!isset($_SESSION['user_name'])) : ?>
    <li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=registration">Registration</a></li>
    <?php endif; ?>
</ul>