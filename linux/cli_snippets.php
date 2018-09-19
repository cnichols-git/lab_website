<?php  include $_SERVER['DOCUMENT_ROOT'] . '/head.php';?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/nav.php';?>

    <div main >
        <div class="content pad-1">
            <h1 class="text-center mt-2">CLI Projects</h1>
            <div class="snippet">
                <div class="snippet-subject">How to change from Linux/file.php to linux/file.php<br></div>
                    <p class="snippet-def">
                        cd /var/www/html<br>#ls<br>Linux<br>#mv /Linux /var/www/html/
                    </p>
            </div>
            <div class="snippet">
            <div class="snippet-subject">Copy all files in a dir</div>
                <p class="snippet-def">
                    cp *.doc /home/tom/backup
                </p>
            </div>
            <div class="snippet">
            <div class="snippet-subject">How to repair superblock error</div>
                <p class="snippet-def">
                    # fsck  /dev/sda2
                </p>
            </div>
            <div class="snippet">
            <div class="snippet-subject">List numeric version of file permissions</div>
                <p class="snippet-def">
                    # stat -c '%a' /etc/passwd
                </p>
            </div>
            <div class="snippet">
            <div class="snippet-subject">Check software version</div>
                <p class="snippet-def">
                    python --version
                </p>
            </div>
        </div>    
    </div>
    <div class="footer"><?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'?></div>
  </body>
</html>
<!--
<div class="snippet">
    <div class="snippet-subject"></div>
    <div class="snippet-def"></div>
</div>
-->