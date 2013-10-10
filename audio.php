<?php
error_reporting(0);
// ************************************************************************
// Program:   test.php
// Version:   0.5.1
// Date:      17/04/2003
// Author:    michael kamleitner (mika@ssw.co.at)
// WWW:	      http://www.entropy.at/forum.php?action=thread&t_id=15 
//            (suggestions, bug-reports & general shouts are welcome)
// Desc:      this test-script lists all audio-files (.wav, .aif, .mp3, .ogg)
//            which reside in the ./ directory. If a file is selected,
//            it is loaded and its audio-attributes are displayed.
// Copyright: copyright 2003 michael kamleitner
//
//            This file is part of classAudioFile.
//
//            classAudioFile is free software; you can redistribute it and/or modify
//            it under the terms of the GNU General Public License as published by
//            the Free Software Foundation; either version 2 of the License, or
//            (at your option) any later version.
//
//            classAudioFile is distributed in the hope that it will be useful,
//            but WITHOUT ANY WARRANTY; without even the implied warranty of
//            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//            GNU General Public License for more details.
//
//            You should have received a copy of the GNU General Public License
//            along with classAudioFile; if not, write to the Free Software
//            Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// ************************************************************************
	
	require ('protected/components/AudioFile.php');
	print 	"<script>
				function getPlayer(pid) {
					var obj = document.getElementById(pid);
					if (obj.doPlay) return obj;
					for(i=0; i<obj.childNodes.length; i++) {
						var child = obj.childNodes[i];
						if (child.tagName == 'EMBED') return child;
					}
				}
				function doPlay(fname) {
					var player=getPlayer('audio1');
					player.play(fname);
				}
				function doStop() {
					var player=getPlayer('audio1');
					player.doStop();
				}
			</script>";
			
	print "<table border=1>";
	print "<tr><td valign=top>";
	
	$filename = $_GET['filename'];
	$filepath = 'http://'.$_SERVER['HTTP_HOST'].$_GET['filepath'];
	$fullpath = $_SERVER["DOCUMENT_ROOT"].$_GET['filepath'].$filename;
	$width = 845;
	$file = $filepath.$filename;
	if (1)
	{	
		$AF = new AudioFile;
		$AF->loadFile($fullpath);
		$AF->printSampleInfo();
	}
	?>
	<br/>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
	width="<?php echo $width+20;?>"
	height="20"
	id="haxe"
	align="middle">
	<param name="movie" value="<?php echo $filepath;?>wavplayer.swf?gui=full&h=20&w=<?php echo $width+20;?>&sound=<?php echo $file;?>&"/>
	<param name="allowScriptAccess" value="always" />
	<param name="quality" value="high" />
	<param name="scale" value="noscale" />
	<param name="salign" value="lt" />
	<param name="bgcolor" value="#dddddd"/>
	<embed src="<?php echo $filepath;?>wavplayer.swf?gui=full&h=20&w=<?php echo $width+20;?>&sound=<?php echo $file;?>&"
	bgcolor="#dddddd"
	width="<?php echo $width+20;?>"
	height="20"
	name="haxe"
	quality="high"
	align="middle"
	scale="noscale"
	allowScriptAccess="always"
	type="application/x-shockwave-flash"
	pluginspage="http://www.macromedia.com/go/getflashplayer"
	/>
	</object>
	
	<?php 	print "</td></tr></table>"; ?>