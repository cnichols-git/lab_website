<?php  include $_SERVER['DOCUMENT_ROOT'] . '/head.php';?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/nav.php';?>

    <div main >
        <div class="content pad-1">
            <h1 class="text-center mt-2">CLI Projects</h1>
            <div class="snippet-subject">How to change from Linux/file.php to linux/file.php<br></div>
                cd /var/www/html<br>
                #ls<br>
                Linux<br>
                #mv /Linux /var/www/html/
            <div class="snippet">Copy all files in a dir</div>
                <p class="snippet-def">
                    cp *.doc /home/tom/backup
                </p>
            <div class="snippet-subject">How to repair superblock error</div>
                <p class="snippet-def">
                    # fsck  /dev/sda2
                </p>
            <div class="snippet-subject">List numeric version of file permissions</div>
                <p class="snippet-def">
                    # stat -c '%a' /etc/passwd
                </p>
            <div class="snippet-subject">Check software version</div>
                <p class="snippet-def">
                    python --version
                </p>
            <div class="snippet-subject"></div>
                <p class="snippet-def">
                
                </p>
            <div class="snippet-subject"></div>
                <p class="snippet-def">
                
                </p>
            <div class="snippet-subject"></div>
                <p class="snippet-def">
                
                </p>  
        </div>    
    </div>
    <div class="footer"><?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'?></div>
  </body>
</html>
