<section class="wiki-article">
    <div class="wiki-article-title">
        <h1 class="btnShowHideArticleBody" data-article-visibility="off">Eclipse</h1>
    </div>
    <div class="wiki-article-body invisible">
        <ul>
            <li>
                <h2>Install Eclipse on Linux</h2>
                <ul>
                    <li>Download Eclipse from <a href="http://www.eclipse.org/downloads/" target="_blank">http://www.eclipse.org/downloads/</a>.</li>
                    <li>We are installing "EclipsePHP".</li>
                    <li>Extract zip file to Desktop</li>
                    <li>sudo mv /Desktop/EclipsePHP /opt/</li>
                    <li>
                    	Create an eclipse executable in your path
                    	<ul>
                    		<li>
                    			<?php include "code/eclipse_code__01.txt"; ?>
                    		</li>
                    	</ul>
                    </li>
                    <li>
                    	Create a gnome menu item
                    	<ul>
                    		<li>
                    			$> sudo nano /usr/share/applications/eclipse.desktop
                    			<?php include "code/eclipse_code__02.txt"; ?>
                    		</li>
                    	</ul>
                    </li>
                    <li>
                    	Launch Eclipse for the first time
                    	<ul>
                    		<li>
                    			Launch Eclipse for the first time
                    			<?php include "code/eclipse_code__03.txt"; ?>
                    		</li>
                    	</ul>
                    </li>
                    <li>Close Eclipse and reopen it from "Start menu".</li>
				</ul>
            </li>
        </ul>
    </div>
</section>