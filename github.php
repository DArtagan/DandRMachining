<?php 
exec('git add -A');
exec('git commit -m "Update: Server side based changes"');
exec('git pull');
exec('git push');
