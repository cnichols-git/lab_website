<?php  include $_SERVER['DOCUMENT_ROOT'] . '/head.php';?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/nav.php';?>

		<div main >
			<div class="content pad-1">
				<h1 class="text-center mt-2">My Projects</h1>
				<div class="snippet">
					<div class="snippet-subject">Apache Location</div>
					<p class="snippet-def">Apache location : /etc/httpd/conf</p>
				</div>
				<div class="snippet">
					<div class="snippet-subject">
						How can I add myself to apache group?
					</div>
					<p class="snippet-def">
						for an existing user
						sudo /usr/sbin/usermod -a -G apache <username>
					</p>
				</div>
				<div class="snippet">
					<div class="snippet-subject">
						Show permissions and owner
					</div>
					<p class="snippet-def">
						[root@centos7 ~]# ls -laZ test.pl</br>
						-rwxr-xr-x. root root unconfined_u:object_r:admin_home_t:s0 test.pl</br></br>

						[root@centos7 ~]# mv test.pl /var/www/html/</br></br>

						[root@centos7 ~]# ls -laZ /var/www/cgi-bin/test.pl</br>
						-rw-r--r--. root root unconfined_u:object_r:admin_home_t:s0 /var/www/cgi-bin/test.pl
					</p>
				</div>
				<div class="snippet">
					<div class="snippet-subject">
						Make Networking enabled at startup
					</div>
					<p class="snippet-def">
						# cd /etc/sysconfig/network-scripts/</br>
						# sed -i -e 's@^ONBOOT="no@ONBOOT="yes@' ifcfg-eth0</br></br>
					</p>
				</div>
				<div class="snippet">
					<div class="snippet-subject">When you need to have Apache run a scripting language like perl</div>
					<p class="snippet-def">First ensure that the scripting language is installed</br>

						LoadModule cgid_module modules/mod_cgi.so</br>
						LoadModule cgid_module modules/mod_perl.so</br>

						<Directory "var/www/html"></br>
						    Options +ExecCGI</br>
						    AddHandler cgi-script .cgi .pl</br>
						</Directory></br>
					</p>
				</div>			
		</div>
    <div class="footer"><?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'?></div>
  </body>
</html>
