 <?php
				
			// Define the total number of records and records per page
			$totalRecords = $itemCount/* Get the total number of records from your data source */;
			$recordsPerPage = 100; // You can adjust this value as needed

			// Calculate the total number of pages
			$pages = ceil($totalRecords / $recordsPerPage);

			// Get the current page number from the query parameter
			if (isset($_GET['page'])) {
				$page = intval($_GET['page']);
			} else {
				$page = 1;
			}

			echo '<tr><td colspan="12" style="text-align: center;">';
				 
				 
				 
			if ($pages >= 1 && $page <= $pages) {
				if ($page > 1) {
					echo "<a class='btn btn-sm btn-info' href='invoice_list.php?page=". ($page - 1) ."'> Prev </a>";
					echo "<a class='btn btn-sm btn-info' href='invoice_list.php?page=1'> First </a>";
				}

				$pagLink = '';

				// Display a maximum of 5 pagination buttons
				$startPage = max(1, $page - 2);
				$endPage = min($startPage + 4, $pages);

				for ($x = $startPage; $x <= $endPage; $x++) {
					if ($x == $page) {
						$pagLink .= "<a class='btn btn-sm btn-success active' href='invoice_list.php?page=" . $x . "'>" . $x . "</a>";
					} else {
						$pagLink .= "<a class='btn btn-sm btn-info' href='invoice_list.php?page=" . $x . "'>" . $x . "</a>";
					}
				}

				echo $pagLink;

				if ($page < $pages) {
					echo "<a class='btn btn-sm btn-info' href='invoice_list.php?page=" . $pages . "'> Last </a>";
					echo "<a class='btn btn-sm btn-info' href='invoice_list.php?page=" . ($page + 1) . "'> Next </a>";
				}
			}

			echo '</td></tr>';
          ?>
