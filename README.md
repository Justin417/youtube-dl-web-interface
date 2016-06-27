PHP youtube-dl download web interface
===================


This script allows you to download songs from youtube into .mp3 format using the [youtube-dl](http://yt-dl.org/) tool.

----------


Screenshots
-------------

![Screenshot](https://raw.githubusercontent.com/Justin417/youtube-dl-web-interface/master/screenshots/ss1.png)

> **Required Software**

> - youtube-dl command
> - PHP and a browser that can run PHP5+
> -  Full access to the webserver you are installing on
> - FFMPEG

How to use:
- Download and upload to a server running PHP.
-  Use the "chown" command to give the webserver write access to the directory. This can be done with:
```
sudo chown -R www-data /var/www/where_you_installed_yt_dl
```
(Please note that the "www-data" user varies depending on your operating system and webserver)

- Change the directory which the .mp3 file is moved. This part is found in dl.php on line 41. Simply change the directory to fit your needs on your local system. Again, ensure the webserver has write permissions to the folder. 
