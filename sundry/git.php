<?php  include $_SERVER['DOCUMENT_ROOT'] . '/head.php';?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/nav.php';?>

		<div main>
      <div class="content pad-1">
    			<h1 class="text-center mt-2">Git</h1>
          <h3>How to Set UP a Git Repository</h3>
          <p>Go to github.com and creat a repository and choose to initialize the repositry, as well as create a Readme file</p>
          <p>Clone the repository that was created on Github by clicking the clone button and then copy the URL to the clipbaord</p>
          <p>In the command line create the local repository</p>
          <p>#git clone https:filepath</p>
          <p>
              <h5>Adding the file or files</h5>
              git add -all or git add "name_of_file"</br>
              git comit -a -m "your_message" ex. "first commit"</br>
              git push
          </p>
          <p>git will ask for your user name and password at this point</p>
          <p>Done!</p>
      </div>
    <div class="footer"><?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'?></div>
  </body>
</html>
