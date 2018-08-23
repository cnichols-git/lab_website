<?php  include $_SERVER['DOCUMENT_ROOT'] . '/head.php';?>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/nav.php';?>

		<div main >
			<div class="content pad-1">
				<h1 class="text-center mt-2">My Projects</h1>
					<p>
						How can I add myself to apache group?
						for an existing user
						sudo /usr/sbin/usermod -a -G apache <username>


						Show permissions and owner
						[root@centos7 ~]# ls -laZ test.pl
						-rwxr-xr-x. root root unconfined_u:object_r:admin_home_t:s0 test.pl

						[root@centos7 ~]# mv test.pl /var/www/html/

						[root@centos7 ~]# ls -laZ /var/www/cgi-bin/test.pl
						-rw-r--r--. root root unconfined_u:object_r:admin_home_t:s0 /var/www/cgi-bin/test.pl

						Make Networking enabled at startup
						# cd /etc/sysconfig/network-scripts/ 
						# sed -i -e 's@^ONBOOT="no@ONBOOT="yes@' ifcfg-eth0

						Apache
						Apache location : /etc/httpd/conf

						What you need to have Apache run a scripting language like perl

						First ensure that the scripting language is installed

						LoadModule cgid_module modules/mod_cgi.so
						LoadModule cgid_module modules/mod_perl.so

						<Directory "var/www/html">
						    Options +ExecCGI
						    AddHandler cgi-script .cgi .pl
						</Directory>
					</p>
			
		</div>
    <div class="footer"><?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'?></div>
  </body>
</html>
