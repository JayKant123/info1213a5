<?php 
require 'vendor/autoload.php';
	$db= new MongoDB\Client;
	$database = $db->ResumeProject;
	$collection = $database->blog;
	$record = $collection->find();
foreach($record as $rec)
	{
        ?>
        
    <div class="partition">
      <h2><?php echo $rec['title']; ?></h2>
      <h5><?php echo $rec['author']." ".$rec['date']; ?></h5>
      <div class="img">
        <img src="images/carousel/<?php echo $rec['imglink']; ?>.JPG" width="100%">
    </div>
      <p><?php echo $rec['description']; ?></p>
      <p><?php echo $rec['blogtext']; ?></p>
    </div>

<?php
	}
	?>
