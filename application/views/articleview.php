<!DOCTYPE html>
<h1>Articles</h1>

<?php
    $id=0;
   foreach($articles  as $name ){
   	  			
   	  			    $id=$name['id'];
   	  			    echo 'Article ID:'.$name['id']."<br>";
   	  			    echo 'Topic:'.$name['name']."<br>";
   	  			    echo 'Title:'.$name['title']."<br>";
   	  			    echo 'Content:'.$name['content']."<br>";
   	  			    echo 'UpVotes:'.$name['Upvotes']."<a href= '../upvote_article/$id'>"."Upvote"."</a>"."<br>"; // need ajax call
   	  			    echo 'DownVotes:'.$name['Downvotes']."<a href= '../downvote_article/$id'>"."Downvote"."</a>"."<br>"; // need ajax call
   	  			    echo 'By:'.$name['username']."<br>";
					
						     //echo "<a href= 'Articles/view/$para'>".$para."</a>";
							
						
							

							foreach($comment_list as $comments){
							
								foreach($comments  as $name ){
									    if($name['article_id']==$id){
												echo "/////////////////////////////////////////commentspearator/////////////////////////////////////////////////////<br>";
   	  			    							echo 'Time:'.$name['datetime']."<br>";
   	  			    							echo 'Comment:'.$name['comment']."<br>";
   	  			    							echo 'UpVotes:'.$name['Upvotes']."<a href= '../upvote_comment/$id'>"."Upvote"."</a>"."<br>"; // need ajax call
   	  			                                echo 'DownVotes:'.$name['Downvotes']."<a href= '../downvote_comment/$id'>"."Downvote"."</a>"."<br>"; // need ajax call
   	  			    							echo 'By:'.$name['fname'].$name['lname']."<br>";

   	  			    							if ($userid==$name['user_id']){

   	  			    								//show edit and delete option
   	  			    							}


										}

										
										echo"<p>";
				}
			} 


                                         // Write here code for text area and submit for comments. Submit should call  Articles/post_comment/$id    text area name should be content_$id
					


							echo "----------------------------------article seperator---------------------------------------";
							echo"<p>";
				}
   ?>