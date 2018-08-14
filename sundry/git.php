<?php  include $_SERVER['DOCUMENT_ROOT'] . '/head.php';?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/nav.php';?>

		<div main>
      <div class="content pad-1">
    			<h1 class="text-center mt-2">Linux Stuff</h1>
          <h3>How to Set UP a Git Branch</h3>
          <p>Create a directory in /git in your Linux system files directoy</p>
          <p>Clone the repository that was created on Github</p>
          <p>Then do the dance</p>
          <p>
              <h5>Adding the file or files</h5>
              git add NameOfFile to add a singe file</br>
              git add * to all items in the directory</br>
              <h5>commit the changes</h5></br>
              git commit -m "Commit message"</br>
              git push origin master</br>
          </p>
      </div>
    <div class="footer"><?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'?></div>
  </body>
</html>