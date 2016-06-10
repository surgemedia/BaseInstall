<?php if(strlen($vars["text"]) > 0){ ?>
<a class="<?php echo $vars["class"]?>" <?php echo $vars["toggle"]?> href="<?php echo $vars["link"] ?>">
	<?php echo $vars["text"] ?>
</a>
<?php } ?>