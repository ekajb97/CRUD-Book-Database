<!DOCTYPE html>
<html>
  <title>
    eBook_MetaData
  </Title>

  <body>
    <?php include 'process.php';?>

    <?php
		if (isset($_SESSION['message'])): ?>
      <div class="alert <?=$_SESSION['msg_type']?>">
        <?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
      </div>
      <?php endif ?>
      <div class="container">

        <?php
	$mysqli = new mysqli('localhost','root','','phpmyadmin') or die(mysqli_error($mysqli));
	$result = $mysqli->query("SELECT * FROM eBook_MetaData") or die($mysqli->error);
?>
            <div class="row justify-content-center">
              <form action="process.php" method="POST">
              <input type="hidden" name = "id" value = "<?php echo $id; ?>">
                <div class="form-group">
                  <label>Author: </label>
                  <input type="text" name="creator" class="form-control" placeholder="Enter creator's name" value="<?php echo $creator; ?>">
                </div>
                <div class="form-group">
                  <label>Title: </label>
                  <input type="text" name="title" class="form-control" placeholder="Enter book's title" value="<?php echo $title; ?>">
                </div>
                <div class="form-group">
                  <label>Genre: </label>
                  <input type="text" name="type" class="form-control" placeholder="Enter book's type" value="<?php echo $type; ?>">
                </div>
                <div class="form-group">
                  <label>ISBN: </label>
                  <input type="text" name="identifier" class="form-control" value="<?php echo $identifier; ?>" placeholder="Enter book's identifier">
                </div>
                <div class="form-group">
                  <label>Publication Date (yyyy/mm/dd): </label>
                  <input type="text" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Enter date of publication">
                </div>
                <div class="form-group">
                  <label>Language: </label>
                  <input type="text" name="language" class="form-control" value="<?php echo $language; ?>" placeholder="Enter the language of book">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" value="<?php echo $description; ?>" name="description" class="form-control" placeholder="Enter a description of the book">
                </div>
                <div class="form-group">
                <?php
                if ($update == true):
                ?>
                	<button type="submit" class="su" name="amend">Amend</button>
                	<?php else: ?>
                		<button type="submit" class="su" name="save">Save</button>
                	<?php endif; ?>
                	<p></p>

          <div class="row justify-content-center">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Genre</th>
                  <th>ISBN</th>
                  <th>Publication Date</th>
                  <th>Language</th>
                  <th>Description</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <?php
	while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td>
                    <?php echo $row['id']; ?>
                  </td>
                  <td>
                    <?php echo $row['creator']; ?>
                  </td>
                  <td>
                    <?php echo $row['title']; ?>
                  </td>
                  <td>
                    <?php echo $row['type']; ?>
                  </td>
                  <td>
                    <?php echo $row['identifier']; ?>
                  </td>
                  <td>
                    <?php echo $row['date']; ?>
                  </td>
                  <td>
                    <?php echo $row['language']; ?>
                  </td>
                  <td>
                    <?php echo $row['description']; ?>
                  </td>
                  <td>
                    <a href="eBook_MetaData.php?edit=<?php echo $row['id']; ?>" class="edt">Edit</a>
                    <p></p>
                    <a href="process.php?delete=<?php echo $row['id']; ?>" class="dlt">Delete</a>
                  </td>
                </tr>
                <?php endwhile; ?>
            </table>
          </div>
          <?php
	function pre_r($array)
	{
	echo'<pre>';
	print_r($array);
	echo'</pre>';
	}

?>

                </div>
              </form>
            </div>
      </div>
  </body>

</html>
