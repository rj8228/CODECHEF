 <?php
		 
		#gives a link to the codechef logo 
		 echo '	<p><a class = " logo" href="https://www.codechef.com">';
		 echo '	<img class="logo" src="codechef_logo.png"></img></a></p>';
		
		
		#displayes the fullname and username of the user
		 echo '<p class="name">';
		 echo $name['result']['data']['content']['fullname'];
		 echo "(";
		 echo $name['result']['data']['content']['username'];
		 echo ")";
		 echo ' </p>';
		


		#top navigation bar	
		echo "<div class ='top'>";
		echo'<ul>
			<li><a href="re.php?on=true">ON GOING EVENTS</a></li>
			<li><a  href="re.php?up=true">UP COMING EVENTS</a></li>
			<li><a href="re.php?todo=true">TODO LIST</a></li>
			</ul>';	 
		echo "</div>";