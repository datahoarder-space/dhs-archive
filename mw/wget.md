GNU Wget (or just Wget, formerly Geturl, also written as its package name, wget) is a computer program that retrieves content from web servers. It is part of the GNU Project. Its name derives from World Wide Web and get. It supports downloading via HTTP, HTTPS, and FTP.

Its features include recursive download, conversion of links for offline viewing of local HTML, and support for proxies. It appeared in 1996, coinciding with the boom of popularity of the Web, causing its wide use among Unix users and distribution with most major Linux distributions. Written in portable C, Wget can be easily installed on any Unix-like system. Wget has been ported to Microsoft Windows, Mac OS X, OpenVMS, HP-UX, MorphOS and AmigaOS. Since version 1.14 Wget has been able to save its output in the web archiving standard WARC format.

Ok but what its main uses for Data Hoarding?

Well wget has some very useful tags. Ok, well what does a wget command look like. <code>wget -m -np -c --no-check-certificate -R &quot;index.html*&quot; &quot;https://example.com/path/"</code>

Ok so to start. 
-m this creates a mirror of everything in that path. 
Next -np or --no-parent. This makes it so the wget spider never leaves the path you set, it will travel down the open directory but never go up. So example.com/path/x/ would be visited but no example.com/test/. 
Next we have -c this allows for download to resume if for some reason your terminal session ever ends.
--no-check-certificate is pretty self explanatory, it just means it won't check if the SSL cert is valid.
Finally -R this will exclude what ever file you put. This prevents from a clobber of index.html files being downloaded when reading an open directory.
