<?php  include $_SERVER['DOCUMENT_ROOT'] . '/head.php';?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/nav.php';?>

		<div main>
      <div class="content pad-1">
			 <h1 class="text-center mt-2">Linux Stuff</h1>
        <ul class="list-unstyled">
          <li><a href="/linux/cli_snippets.php">CLI Snippets</a></li>
          <li><a href="/sundry/apache.php">Apache</a></li>
        </ul>
        <h3>Ubuntu</h3>
          <div class="snippet">
            <div class="snippet-subject">Gparted will not launch</div>
            <p class="snippet-def">
              Having trouble launching <b>Synaptic package manager</b> and <b>Gparted</b> in Ubuntu 17.x and up with  Wayland?  Here's how to fix that problem!</br>
            
              Open a terminal and add the following:  <i>xhost si:localuser:root</i>
              You can also add this command to your startup applications!
            </p>
          </div>
          <div class="snippet">
            <div class="snippet-subject">HDD won't mount after power event</div>
            <p class="snippet-def">
              When a computer is hard powered down and you can no longer mount a disk
              sudo -i fdisk -l
              Suppose that fdisk reports that the partition hdd is /dev/sdb1, continue running:
              fsck -y /dev/sdb1
            </p>
          </div>
        <h4>SSH</h4>
          <div class="snippet">
            <div class="snippet-subject">Genrating an SSH key</div>
            <p class="snippet-def">ssh-keygen</p>
          </div>
          <div class="snippet">
            <div class="snippet-subject">Copy ssh Key to remote host</div>
            <p class="snippet-def">ssh-copy-id <host or host IP></p>
          </div>
      </div>  
    <div class="footer"><?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'?></div>
  </body>
</html>
