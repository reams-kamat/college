			<?php
							include('includes/connect.php');
							$sql_query="SELECT * FROM `courses` order by 1 desc ";
							$result = $connect->query($sql_query);
							if($result){
							while ($row = $result->fetch_assoc()) {
								$name=$row['name'];
								?>	
							<li><a href="program.php?course=<?php echo $name ; ?>"><?php echo $row['name'];?></a></li>
							<li role="separator" class="divider"></li>	
								<?php
							}}
						?>