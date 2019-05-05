
<?php

include('./pdoconn.php');

// define('CSS_PATH', '../Components/Dist/semantic.min.css');
// define('JS_PATH', '../Components/Dist/semantic.min.js');

switch ($_REQUEST['action']) {

	case "sendMessage":

		//global $db;
		session_start();
		// $chat_date = date('D, d M Y');
		$dt2 = date("Y-m-d H:i:s");
		$query = $db->prepare("INSERT INTO groupchat SET gc_user_name=?, gchat_cont=?, gc_user_image=?, gc_user_id=? ");

		$run = $query->execute([$_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'], $_REQUEST['message'], $_SESSION['user_ppic'], $_SESSION['user_id']]);

		if ($run) {
			echo 1;
			exit;
		}



		break;

	case "getMessages":

		session_start();

		$query = $db->prepare("SELECT * FROM groupchat");
		$run = $query->execute();

		$rs = $query->fetchAll(PDO::FETCH_OBJ);
		foreach ($rs as $allmassages) :
			?>
		<?php if (($_SESSION['user_id']) != $allmassages->gc_user_id) :  ?>
			<div class="item" style="padding:10px!important; border-top: 0">
				<div class="ui chatboxpopup" data-content="<?php echo $allmassages->gc_user_name; ?>"><img style="display:inline-block" class="ui avatar image" src="../Images/Profilepic/<?php echo $allmassages->gc_user_image; ?>" alt=""></div>
				<div class="left aligned content pl3 pt2">
					<div id="gchatcont" class="ui left pointing below label chatboxpopup teal" data-content="<?php echo $allmassages->gchat_date; ?>">
						<?php echo $allmassages->gchat_cont; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if (($_SESSION['user_id']) == $allmassages->gc_user_id) :  ?>
			<div class="item" style="padding:10px!important; border-top: 0">
				<div class="right aligned content pl3 pt2">
					<div class="ui right pointing below label blue chatboxpopup" data-content="<?php echo $allmassages->gchat_date; ?>">
						<?php echo $allmassages->gchat_cont; ?>

						<div id="user_details"></div>
					</div>
				</div>
				<div class="ui chatboxpopup" data-content="<?php echo $allmassages->gc_user_name; ?>"><img style="display:inline-block" class="ui avatar image" src="../Images/Profilepic/<?php echo $allmassages->gc_user_image; ?>" alt=""></div>
			</div>
		<?php endif; ?>
	<?php
endforeach;
break;
}
?>