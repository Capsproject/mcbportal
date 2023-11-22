
<h3>Enrolled Subjects</h3> 
   
            			
   <table  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0"  > 
								 <thead>
									 <tr> 
										
							 <th rowspan="2">Subject</th>
							 <th rowspan="2">Description</th>  
							 <th rowspan="2">Module</th>
							 <th rowspan="2">Activities</th>
							 <th rowspan="2">Quiz</th>
							 
								 </thead> 	 
							 <tbody>
					   <?php
					   $sql ="SELECT * 
							 FROM  tblstudent st, studentsubjects ss, `subject` sub, `tblschedule` s
							 WHERE  st.IDNO=ss.IDNO AND ss.`SUBJ_ID` = sub.`SUBJ_ID` AND sub.`SUBJ_ID` = s.`SUBJ_ID`
							 AND STUDSECTION=SECTION AND OUTCOME !='Drop'  
							 AND ss.`IDNO`=" .$_SESSION['IDNO']." AND SECTION='".$res->STUDSECTION."'
							 AND s.sched_semester = '".$_SESSION['SEMESTER']."' AND LEVEL='".$resCourse->COURSE_LEVEL."'";
   
						 $mydb->setQuery($sql);
						 $cur = $mydb->loadResultList();
   
						 foreach ($cur as $result) {
						   echo '<tr>'; 
						   echo '<td>'.$result->SUBJ_CODE.'</td>';
						   echo '<td>'.$result->SUBJ_DESCRIPTION.'</td>';
						   
						   echo '<td>';
						   echo $result->module ? '<a href="' . $result->module . '" target="_blank">' . 'Module: ' . $result->module . '</a>' : 'No link available: ' . $result->module;
						   echo '</td>';
						  
						   echo '<td>';
						   echo $result->act ? '<a href="' . $result->act . '" target="_blank">' . 'Act: ' . $result->act . '</a>' : 'No link available: ' . $result->act;
						   echo '</td>';
						   echo '<td>';
						   echo $result->module ? '<a href="' . $result->module . '" target="_blank">' . 'Quiz: ' . $result->module . '</a>' : 'No link available: ' . $result->module;
						   echo '</td>';
						 


						 
						   echo '</tr>';
						 }
					   ?> 
							   </tbody>
									
							   </table>
						
				   
					 <form action="student/printschedule.php" method="POST" target="_blank">
				   <input type="hidden" name="Course" value="<?php echo $resCourse->COURSE_LEVEL; ?>">
				   <!-- this row will not appear when printing -->
					   <div class="row no-print">
						 <div class="col-xs-12">
						  <span class="pull-right"> <button type="submit" name="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
					   </div>
					   </div> 
					 </form>       
   