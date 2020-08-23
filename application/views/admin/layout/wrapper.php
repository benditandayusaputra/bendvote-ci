<?php require_once 'header.php' ?>
<?php require_once 'nav.php' ?>
<?php require_once 'sidebar.php' ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?= $title ?></h2>
        </div>
<?php if ( $content ) {
	$this->load->view($content);	
} ?>
	</div>
</section>
<?php require_once 'footer.php' ?>