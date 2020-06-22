---
title: Getting started with Plex
description: Plex is a closed-source media manager and server that can be used to organise and manage media, as well as serve it to most devices anywhere in the world.
extends: _layouts.kb
section: content
---

# Getting started with Plex {#getting-started-with-plex}

Plex is a closed-source media manager and server that can be used to organise and manage media, as well as serve it to most devices anywhere in the world. It is very straight forward to get up and running with, and has many content metadata providers making management of your library easier.

* [Installation](#installation)
* [General setup](#general-setup)

## Installation {#installation}

* [Windows](#windows)
* [Mac](#mac)
* [Linux](#linux)
* [Synology](#synology)
* [Unraid](#unraid)

### Windows {#windows}

- Sign up for a Plex account if you do not already have one. This can be done at <a href="https://plex.tv">plex.tv</a>. 
- Download the Plex Media Server for Windows <a href="https://www.plex.tv/en-gb/media-server-downloads/#plex-media-server">here</a>.
- Run the executable and if needed approve administrator access.
- Once installed, run the installed Plex Media Server. It should open the local admin web page in your preferred web browser. If not, <a href="https://localhost:32400">click here</a>.

### Mac {#mac}

- Sign up for a Plex account if you do not already have one. This can be done at <a href="https://plex.tv">plex.tv</a>. 

#### Normal install {#mac-normal}
- Download the Plex Media Server for Mac <a href="https://www.plex.tv/en-gb/media-server-downloads/#plex-media-server">here</a>. Once downloaded it will automatically extract and leave you with an application in your Downloads folder.
- Move the downloaded application to the Applications folder.

#### Homebrew install {#mac-brew}
- You can also install Plex Media Server using homebrew if you prefer to use it. Simply run ```brew cask install plex-media-server```.
- Run Plex Media Server, when asked confirm that you want to open the application and that you trust the source it was downloaded from.
- It will automatically open the local admin web page in your preferred web browser. If not, click on the icon on the top bar and click on 'Open Plex...'.

### Linux {#linux}

This section is work-in-progress. Feel free to contribute to this guide by providing our team with instructions for this platform on our discord server!

### Synology {#synology}

This section is work-in-progress. Feel free to contribute to this guide by providing our team with instructions for this platform on our discord server!

### Unraid {#unraid}

This section is work-in-progress. Feel free to contribute to this guide by providing our team with instructions for this platform on our discord server!

## General setup {#general-setup}

These steps are generally the same for all operating systems once you have passed the installation stage.

- The web panel that has opened will redirect and ask you to log into your plex account. 
- Once this has been done, you will be sent to an introductory information page followed by a Server Setup page.
- On the Server Setup page, give the server a name. This will be how you identify and see the server on your streaming devices of choice and on your Plex account. You will also be asked to confirm whether or not you want to allow access to your media outside of your home. This enables you to stream your media from your mobile devices on-the-go.
- On the next page you are asked to configure your media libraries. Click on 'Add library' to add your first library, choose the type of content in this library then browse to select where the library is/will be stored, or on some operating systems provide a path for where the library is/will be stored.

Now you are done for the most part. You can now go in and configure more libraries if you want to, or add new users to share your new server with.

If you have chosen to allow access to your media outside of your home, make sure to check in your server settings and port forward the remote port that it asks for. This is normally not the same port as the local port (32400) so it is important to check what it has chosen in the server settings.