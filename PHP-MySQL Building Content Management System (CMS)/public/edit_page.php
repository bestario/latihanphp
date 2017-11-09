<?php  require_once("../includes/session.php") ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php find_selected_page(); ?>
<?php
	if (!$current_page) {
		// subject ID was missing or invalid or
		// subject couldnt be found in database
		redirect_to("manage_content.php");
	}
?>


<?php
if (isset($_POST['submit'])){
	
    $id = $current_subject["id"];
	$menu_name = mysql_prep($_POST["menu_name"]);
	$position = (int) $_POST["position"];
	$visible = (int) $_POST["visible"];
	$content = mysql_prep($_POST["content"]);
	
    // validations
    $required_fields = array("menu_name", "position", "visible");
    validate_presences($required_fields);

    $fields_with_max_lengths = array("menu_name" => 30);
    validate_max_lengths($fields_with_max_lengths);

    if(empty($errors)) {
    
    // Perform Update



	//Perform database query
	$query  = "UPDATE subjects SET ";
	$query .= "menu_name = '{$menu_name}', ";
	$query .= "position = {$position}, ";
	$query .= "visible = {$visible} ";
	$query .= "WHERE id = {$id} ";
	$query .= "LIMIT 1";
	$result = mysqli_query($connection, $query);

	if ($result && mysqli_affected_rows($connection) >= 0){
		$_SESSION["message"] = "Subject Created";
		redirect_to("manage_content.php");
	} else {
		$message = "Subject creation failed. ";
		redirect_to("new_subject.php");
	}

    }

} else {
	// awdawd
}   // end:
?>



<?php include("../includes/layouts/header.php"); ?>

<div id="main">
	<div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
	</div>
	<div id="page">
	<?php echo message(); ?>
	<?php echo form_errors($errors); ?>
	// $message is just a variable, doesnt use the SESSION 


	<h2>Edit page: <?php echo htmlentities($current_page["menu_name"]);  ?></h2>
	<form action = "edit_page.php?subject=<?php echo htmlentities($current_page["id"]); ?>" method="post">
		<p>Menu Name :
			<input type="text" name="menu_name" value="<?php echo htmlentities($current_page["menu_name"]); ?>">
		</p>
		<p>Position :
			<select name="position">
			<?php
			$page_set = find_pages_for_subjects($current_page["subject_id"]);
			$page_count = mysqli_num_rows($page_set);
				for($count=1; $count <= $subject_count; $count++){
					echo "<option value=\"{$count}\"";
					if ($current_subject["position"] == $count){
						echo " selected";
					}
	
					echo ">{$count}</option>";
				}
			?>
			</select>
		</p>
		<p>Visible :
			<input type="radio" name="visible" value="0" <?php if ($current_page["visible"] == 0) {
               echo "checked";}?> > No
			&nbsp;
			<input type="radio" name="visible" value="1"<?php if ($current_page["visible"] == 1) {
               echo "checked";}?>> Yes
		</p>
		<input type="submit" name ="submit" value="Edit Page">
		</form>			
		<br>
		<a href ="manage_content.php">Cancel</a>
	     &nbsp;
	     &nbsp;
	     <a href="delete_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>" onlick = "return confirm('Are You sure?');">Delete Subject</a>
	</div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
