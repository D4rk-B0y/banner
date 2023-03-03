<?php
#coded By CYBER DEV ABIR
#follow me on github http://github.com/D4rk-B0y 

system('git pull');
if ( ! file_exists("/data/data/com.termux/files/usr/bin/cowsay")){
	system("pkg install cowsay -y");
	}
if ( ! file_exists("/data/data/com.termux/files/usr/bin/toilet")){
	system("pkg install toilet -y");
	}
if ( ! file_exists("/data/data/com.termux/files/usr/bin/figlet")){
	system("pkg install figlet -y");
	}
if ( ! file_exists("/data/data/com.termux/files/usr/bin/neofetch")){
	system("pkg install neofetch -y");
	}
if ( ! file_exists("/data/data/com.termux/files/usr/bin/ruby")){
	system("pkg install ruby -y");
	}
if ( ! file_exists("/data/data/com.termux/files/usr/bin/lolcat")){
	system("gem install lolcat");
	}

system('clear');
$name = array("""     

  /$$$$$$  /$$$$$$$  /$$$$$$ /$$$$$$$ 
 /$$__  $$| $$__  $$|_  $$_/| $$__  $$
| $$  \ $$| $$  \ $$  | $$  | $$  \ $$
| $$$$$$$$| $$$$$$$   | $$  | $$$$$$$/
| $$__  $$| $$__  $$  | $$  | $$__  $$
| $$  | $$| $$  \ $$  | $$  | $$  \ $$
| $$  | $$| $$$$$$$/ /$$$$$$| $$  | $$
|__/  |__/|_______/ |______/|__/  |__/
                                      
                                      
                                      
\033[41m \033[1;37m           [ABIR RAHMAN]               \x1b[0m
\033[1;32m┌───────────────────────────────────────┐   
\033[1;33m│ [✓] Admin   : MD. ABEDUR RAHMAN\033[1;32m       │
\033[1;34m│ [✓] Github  :\033[41m\033[1;37mD4rK-B0y\x1b[0m                 │
\033[1;35m│ [✓] Whtsapp : 01863517***             │
\033[1;36m│ [✓] Youtube : \x1b[1;32mABID ALL HUB\x1b[1;97m            │               
\033[1;32m└───────────────────────────────────────┘   """):
foreach($name as $na){
	print($na);
	usleep(20000);
}
sleep(1);
function logo(){
	system('clear');
$des = array("\n\033[94m\033[01m   █████╗ ██████╗ ██╗   ██╗ █████╗ ███╗   ██╗ ██████╗███████╗",
       "\n\033[94m  ██╔══██╗██╔══██╗██║   ██║██╔══██╗████╗  ██║██╔════╝██╔════╝",
       "\n\033[94m  ███████║██║  ██║██║   ██║███████║██╔██╗ ██║██║     █████╗  ",
       "\n\033[94m  ██╔══██║██║  ██║╚██╗ ██╔╝██╔══██║██║╚██╗██║██║     ██╔══╝  ",
       "\n\033[94m  ██║  ██║██████╔╝ ╚████╔╝ ██║  ██║██║ ╚████║╚██████╗███████╗",
       "\n\033[94m  ╚═╝  ╚═╝╚═════╝   ╚═══╝  ╚═╝  ╚═╝╚═╝  ╚═══╝ ╚═════╝╚══════╝",
       "\n\n\033[39m      ██████╗  █████╗ ███╗   ██╗███╗   ██╗███████╗██████╗ ",
       "\n\033[39m      ██╔══██╗██╔══██╗████╗  ██║████╗  ██║██╔════╝██╔══██╗",
       "\n\033[39m      ██████╔╝███████║██╔██╗ ██║██╔██╗ ██║█████╗  ██████╔╝",
       "\n\033[39m      ██╔══██╗██╔══██║██║╚██╗██║██║╚██╗██║██╔══╝  ██╔══██╗",
       "\n\033[39m      ██████╔╝██║  ██║██║ ╚████║██║ ╚████║███████╗██║  ██║",
       "\n\033[39m      ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═══╝╚═╝  ╚═══╝╚══════╝╚═╝  ╚═╝",
       "\n\t\t\t\t\t\t\033[93m    php",
       "\n\n\t\033[01m\033[32m    [+] CODED BY 𝗔𝗕𝗜𝗥 & 𝗦𝗔𝗡𝗝𝗜𝗗𝗔 \n",
       "\t\033[32m    [+] 𝐋𝐎𝐕𝐄 𝐘𝐎𝐔 🥀💋\n\n");
foreach ($des as $de){
	print $de;
	usleep(20000);
	}
}
function els(){
	print "\n";
	print("\033[31mYour choice is wrong..!");
	unset($a);
	unset($bcho);
	unset($jc);
	unset($ac);
	sleep(2);
	system('php Adv.php');
	}
function menu(){
	$me = array( "\n     \t\t\033[93m\033[40m[1] Add Banner\033[49m\n",
		"     \t\t\033[93m\033[40m[2] Update Tool\033[49m\n",
		"     \t\t\033[93m\033[40m[3] About Us\033[49m\n",
		"     \t\t\033[93m\033[40m[4] Join Us\033[49m\n",
		"     \t\t\033[93m\033[40m[5] Comment/Report errors\033[49m\n",
		"     \t\t\033[93m\033[40m[6] exit\033[49m\n\n" );
	foreach($me as $men){
		print $men;
		usleep(20000);
}
	global $a;
	$a  = readline("\033[94mEnter Your Choice: ");
}
function oldremove(){
	if ( file_exists("/data/data/com.termux/files/usr/etc/zshrc")){
		unlink("/data/data/com.termux/files/usr/etc/zshrc");
		}
	if ( file_exists("/data/data/com.termux/files/usr/etc/bash.bashrc")){
		unlink("/data/data/com.termux/files/usr/etc/bash.bashrc");
		}
	if ( file_exists("/data/data/com.termux/files/usr/etc/motd")){
		unlink("/data/data/com.termux/files/usr/etc/motd");
		}
	if ( file_exists("/data/data/com.termux/files/usr/etc/banner")){
		unlink("/data/data/com.termux/files/usr/etc/banner");
		}
	if ( file_exists("/data/data/com.termux/files/usr/etc/dvsbanner")){
		unlink("/data/data/com.termux/files/usr/etc/dvsbanner");
		}
	}

function go(){
	print("\n\033[32mThanks for using the tool");
	print("\n\n");
	}

function bannermenu(){
	$menu = array("\n\t\t\033[93m\033[40m[01] EvilEye Banner  (Normal)\033[49m\n",
                "\t\t\033[93m\033[40m[02] EvilEye Banner  (Animation)\033[49m\n",
                "\t\t\033[93m\033[40m[03] Custom Banner   (Normal)\033[49m\n",
                "\t\t\033[93m\033[40m[04] Custom Banner   (Animation)\033[49m\n",
                "\t\t\033[93m\033[40m[05] Neofetch Banner (Normal)\033[49m\n",
                "\t\t\033[93m\033[40m[06] Neofetch Banner (Animation)\033[49m\n",
                "\t\t\033[93m\033[40m[07] Neofetch Custom (Normal)\033[49m\n",
                "\t\t\033[93m\033[40m[08] Neofetch Custom (Animation)\033[49m\n",
                "\t\t\033[93m\033[40m[09] Help            (banners information)\033[49m\n",
                "\t\t\033[93m\033[40m[10] Main Menu\033[49m\n\n" );
	foreach( $menu as $m ){
		print($m);
		usleep(20000);
		}
$bcho = readline("\033[94mEnter Your Choice: ");
if ( $bcho == 1){
	print("\n\t\t\033[93m\033[40m[1] Figlet\033[49m");
	print("\n\t\t\033[93m\033[40m[2] Toilet\033[49m");
	$fomt = readline("\n\n\033[94mEnter Your Choice: ");
	$uname = readline("\n\033[93m\033[40mEnter your Cowsay name: \033[49m");
	$banner = readline("\n\033[93m\033[40mEnter your banner name: \033[49m");
	oldremove();
	$f = fopen("zshrc", "w");
	fwrite( $f, "clear\n" );
	fwrite( $f, "cowthink -f eyes ".$uname." | lolcat\n");
	switch ($fomt){
		case (1):
			fwrite($f, "figlet ".$banner." | lolcat\n");
			break;
		case (2):
			fwrite($f, "toilet ".$banner." | lolcat\n");
			break;
		}
	fwrite( $f, "PS1='$ '");
	copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
	rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
	}
elseif ( $bcho == 2 ){
	print("\n\t\t\033[93m\033[40m[1] Figlet\033[49m");
        print("\n\t\t\033[93m\033[40m[2] Toilet\033[49m");
        $fomt = readline("\n\n\033[94mEnter Your Choice: ");
        $uname = readline("\n\033[93m\033[40mEnter your Cowsay name: \033[49m");
        $banner = readline("\n\033[93m\033[40mEnter your banner name: \033[49m");
	oldremove();
        $f = fopen("zshrc", "w");
        fwrite( $f, "clear\n" );
        fwrite( $f, "cowthink -f eyes ".$uname." | lolcat -a --speed=75\n");
        switch ($fomt){
                case (1):
                        fwrite($f, "figlet ".$banner." | lolcat -a --speed=75\n");
                        break;
                case (2):
                        fwrite($f, "toilet ".$banner." | lolcat -a --speed=75\n");
                        break;
                }
        fwrite( $f, "PS1='$ '");
	copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
	rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
	}
elseif ( $bcho == 3 ){
	oldremove();
	if (file_exists("dvsbanner")){
                $f = fopen( "zshrc", "w");
                fwrite($f, "lolcat --spread=1 --speed=100 /data/data/com.termux/files/usr/etc/dvsbanner\n");
                fwrite($f, "PS1='$ '");
                copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
                rename("dvsbanner", "/data/data/com.termux/files/usr/etc/dvsbanner");
                rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
                }
        else {
                print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a custom banner, you need to put a banner in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano dvsbanner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
	}
elseif ( $bcho == 4 ){
        oldremove();
        if (file_exists("dvsbanner")){
                $f = fopen( "zshrc", "w");
                fwrite($f, "lolcat -a --spread=1 --speed=100 /data/data/com.termux/files/usr/etc/dvsbanner\n");
                fwrite($f, "PS1='$ '");
                copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
                rename("dvsbanner", "/data/data/com.termux/files/usr/etc/dvsbanner");
                rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
		}
	else {
		print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a custom banner, you need to put a banner in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano dvsbanner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
	}
elseif ( $bcho == 5 ){
	oldremove();
        if (file_exists("dvsbanner")){
                $f = fopen( "zshrc", "w");
		fwrite($f, "echo\n");
                fwrite($f, "lolcat --spread=1 --speed=100 /data/data/com.termux/files/usr/etc/dvsbanner\n");
		fwrite($f, "echo\n");
		fwrite($f, "neofetch");
                fwrite($f, "PS1='$ '");
                copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
                rename("dvsbanner", "/data/data/com.termux/files/usr/etc/dvsbanner");
                rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
                }
        else {
                print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a neofetch banner, you need to put a banner in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano dvsbanner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
	}
elseif ( $bcho == 6 ){
	oldremove();
        if (file_exists("dvsbanner")){
                $f = fopen( "zshrc", "w");
		fwrite($f, "echo\n");
                fwrite($f, "lolcat -a --spread=1 --speed=100 /data/data/com.termux/files/usr/etc/dvsbanner\n");
		fwrite($f, "echo\n");
		fwrite($f, "neofetch\n");
                fwrite($f, "PS1='$ '");
                copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
                rename("dvsbanner", "/data/data/com.termux/files/usr/etc/dvsbanner");
                rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
                }
        else {
                print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a custom banner, you need to put a banner in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano dvsbanner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
	}
elseif ( $bcho == 7 ){
	oldremove();
	if (( ! file_exists("dvsbanner")) and (!file_exists("banner"))){
		print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a neofetch custom banner, you need to put a banner and logo in a two text files and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow \ntype \033[31mnano dvsbanner\033[93m to make banner text file and \ntype \033[31mnano banner\033[93m to make logo text file and run again this tool \nusing \033[31mphp Adv-Banner.php\033[49m\n\n");
		}
	elseif ( ! file_exists("dvsbanner")) {
                print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a neofetch custom banner, you need to put a banner in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano dvsbanner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
        elseif ( ! file_exists("banner")) {
                print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a neofetch custom banner, you need to put a logo in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano banner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
        if (file_exists("dvsbanner") and  file_exists("banner")){
		$f = fopen( "zshrc", "w");
                fwrite($f, "echo\n");
                fwrite($f, "lolcat --spread=1 --speed=100 /data/data/com.termux/files/usr/etc/dvsbanner\n");
                fwrite($f, "echo\n");
                fwrite($f, "neofetch --source /data/data/com.termux/files/usr/etc/banner | lolcat --spread=1 --speed=100\n");
                fwrite($f, "PS1='$ '");
                copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
                rename("banner", "/data/data/com.termux/files/usr/etc/banner");
                rename("dvsbanner", "/data/data/com.termux/files/usr/etc/dvsbanner");
                rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
                }
	}
elseif ( $bcho == 8 ){
	oldremove();
	if (( ! file_exists("dvsbanner")) and (! file_exists("banner"))){
		print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a neofetch custom banner, you need to put a banner and logo in a two text files and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow \ntype \033[31mnano dvsbanner\033[93m to make banner text file and \ntype \033[31mnano banner\033[93m to make logo text file and run again this tool \nusing \033[31mphp Adv-Banner.php\033[49m\n\n");
		}
	elseif ( ! file_exists("dvsbanner")) {
                print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a neofetch custom banner, you need to put a banner in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano dvsbanner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
        elseif ( ! file_exists("banner")) {
                print("\n\033[93m\033[40mNotice..!\033[49m\n\n\033[40mIf you want to put a neofetch custom banner, you need to put a logo in a text file and save it.\033[49m");
                print("\n\n\033[93m\033[40mNow type \033[31mnano banner\033[93m to make text file and run again this tool using \033[31mphp Adv-Banner.php\033[49m\n\n");
                }
        if ((file_exists("dvsbanner")) and (file_exists("banner"))){
		$f = fopen( "zshrc", "w");
                fwrite($f, "echo\n");
                fwrite($f, "lolcat -a --spread=1 --speed=100 /data/data/com.termux/files/usr/etc/dvsbanner\n");
                fwrite($f, "echo\n");
                fwrite($f, "neofetch --source /data/data/com.termux/files/usr/etc/banner | lolcat -a --spread=1 --speed=100\n");
                fwrite($f, "PS1='$ '");
                copy( "zshrc", "/data/data/com.termux/files/usr/etc/bash.bashrc");
                rename("dvsbanner", "/data/data/com.termux/files/usr/etc/dvsbanner");
                rename("banner", "/data/data/com.termux/files/usr/etc/banner");
                rename( "zshrc", "/data/data/com.termux/files/usr/etc/zshrc");
                }
	}

elseif ( $bcho == 9 ){
	system("xdg-open https://github.com/DaVe-Smith-89/Animation-Banner-Help");
	sleep(5);
	logo();
	bannermenu();
	}

elseif ( $bcho == 10 ){
	logo();
	menu();
	}

else {
	els();
	}
}

logo();
menu();

if ( $a == 1 ){
	$link = array("https://w.me/+8801863517912",
		      "https://github.com/D4rk-B0y",
		      "https://github.com/D4rk-B0y",
		      "https://facebook.com/bap.dakbi" );
	shuffle($link);
	system("xdg-open ".$link[0]);
	logo();
	bannermenu();
	}

elseif ( $a == 2 ){
	system("git pull");
	sleep(1);
	system("php Adv-Banner.php");
	}

elseif ( $a == 3 ){
	logo();
	$about = array("""     

  /$$$$$$  /$$$$$$$  /$$$$$$ /$$$$$$$ 
 /$$__  $$| $$__  $$|_  $$_/| $$__  $$
| $$  \ $$| $$  \ $$  | $$  | $$  \ $$
| $$$$$$$$| $$$$$$$   | $$  | $$$$$$$/
| $$__  $$| $$__  $$  | $$  | $$__  $$
| $$  | $$| $$  \ $$  | $$  | $$  \ $$
| $$  | $$| $$$$$$$/ /$$$$$$| $$  | $$
|__/  |__/|_______/ |______/|__/  |__/
                                      
                                      
                                      
\033[41m \033[1;37m           [ABIR RAHMAN]               \x1b[0m
\033[1;32m┌───────────────────────────────────────┐   
\033[1;33m│ [✓] Admin   : MD. ABEDUR RAHMAN\033[1;32m       │
\033[1;34m│ [✓] Github  :\033[41m\033[1;37mD4rK-B0y\x1b[0m                 │
\033[1;35m│ [✓] Whtsapp : 01863517***             │
\033[1;36m│ [✓] Youtube : \x1b[1;32mABID ALL HUB\x1b[1;97m            │               
\033[1;32m└───────────────────────────────────────┘   """);
	foreach ( $about as $abo ){
		print($abo);
		usleep(20000);
		}
	$ac = readline("\033[94mDo you wan't to go main menu (y/n):");
	if ( $ac == 'y' or $ac == 'Y'){
		logo();
		menu();
		}
	elseif ( $ac == 'n' || $ac == 'N'){
		go();
		}
	else {
		els();
		}
	}
elseif ( $a == 4 ){
	logo();
	$arr = array( "\n\t\t\033[40m\033[93m[1] GitHub\033[49m\n",
                 "\t\t\033[40m\033[93m[2] Telegram \033[49m\n",
                 "\t\t\033[40m\033[93m[3] Main Menu\033[49m\n\n" );
	foreach ( $arr as $ar ){
		print($ar);
		usleep(20000);
		}
	$jc = readline("\033[94mEnter your choice: ");
	if ( $jc == 1 ){
		system("xdg-open https://github.com/D4rk-B0y ");
		sleep(5);
		logo();
		menu();
		}
	elseif ( $jc == 2 ){
		system("xdg-open https://facebook.com/bap.dakbi");
		sleep(5);
		logo();
		menu();
		}
	elseif ( $jc == 3 ){
		logo();
		menu();
		}
	else {
		els();
		}
	}

elseif ( $a == 5 ){
	system("xdg-open http://github.com/D4rk-B0y");
	sleep(5);
	system("php Adv-Banner.php");
	}

elseif ( $a == 6 ){
	go();
	}
else {
	els();
	}

?>
