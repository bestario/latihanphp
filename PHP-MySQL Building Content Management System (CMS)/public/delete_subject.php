<?php  require_once("../includes/session.php") ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php find_selected_page(); ?>

<?php
	$current_subject = find_subject_by_id($_GET["subject"]);
	if (!$current_subject) {
		// subject ID was missing or invalid or
		// subject couldnt be found in database
		redirect_to("manage_content.php");
	}

	$pages_set = find_page_for_subject($current_subject["id"]);
	if (mysqli_num_rows($pages_set) > 0) {
		$message = "Cant delete a subject with pages. ";
		redirect_to("manage_content.php?subject={$current_subject["id"]}");
	}

    $id = $current_subject["id"];
    $query = "DELETE FROM subjects WHERE id = {$id} LIMIT 1";
    $result = mysqli_query($connection, $query);

	if ($result && mysqli_affected_rows($connection) == 1){
        $_SESSION["message"] = "Subject Deleted";
		redirect_to("manage_content.php");
	} else{
		$message = "Subject deletion failed. ";
		redirect_to("manage_content.php?subject={$id}");
	}



?>