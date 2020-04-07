<?php require APPROOT . '/views/inc/header.php'; ?>
<h1> <?php echo $data['title']; ?> </h1>
<p><?php echo $data['description']; ?></p>
<P>version: <strong><?php echo APPVERSION; ?></strong>
</P>
<?php require APPROOT . '/views/inc/footer.php'; ?>