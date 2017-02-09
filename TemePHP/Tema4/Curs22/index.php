<?php require_once 'header.php'; ?>

<!-- Mesaj pentru alert -->
<?php if (isset($_SESSION['message'])): ?>

<div class="alert alert-warning">
	<?php echo $_SESSION['message']; ?>
</div>

<?php unset($_SESSION['message']); ?>
<?php endif; ?>


<!-- Continut -->
<div class="container">
	<div class="row">
		<div class="col-md-3">
		   LEFT
		</div>

		<div class="col-md-9">
		  CONTENT
		 </div>
	</div>
</div>

<?php require_once 'footer.php'; ?>