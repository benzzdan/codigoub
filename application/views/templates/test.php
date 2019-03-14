<h1><?php echo $this->lang->line('test_lang_text') ?></h1>
<h1><?php echo $this->uri->segment(1)?></h1>
<?php if($this->uri->segment(2) == '') { ?>

<h1>segment 2 is not empty</h1>

<?php } ?>