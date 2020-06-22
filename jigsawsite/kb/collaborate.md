---
title: Collaborate on DHS
description: Find out how to collaborate on DHS.
extends: _layouts.kb
section: content
---

# Collaborate on DHS {#collab-on-dhs}

datahoarder.space is a community-curated site. Therefore, you are able to contribute to our ever-growing library of information and guides. If you want to collaborate on DHS, it is a good idea to understand how our site works on it's infrastructure and how you can get it running on your local machine.

## Infrastructure {#infrastructure}

Our site infrastructure consists of Jigsaw, a Laravel-based static site generator, Tailwind CSS and Laravel Mix to compile assets. Jigsaw utilises blade templating as well as markdown to make it very easy and quick to build up a site once you have a theme, basically only requiring the content.

If you are planning to write some of our information and articles, it is strongly recommended to have a look at how some of the other pages work and how the folder structure is constructed so that it is easier to understand where and how to write our content. To learn more you can view the <a href="https://jigsaw.tighten.co/docs/installation">Jigsaw docs</a>.

## Get prepared {#get-prepared}

To get prepared to start collaborating on DHS and writing or updating some content, first fork the <a href="https://github.com/datahoarder-space/datahoarder-space">main repository</a> and then ask in the Discord to be added as a collaborator (which gives you access to edit and use the tracker as well as chat in the collaborators channel on our Discord server). 

Once this is done, you can use the method of your choice for source control for your version of the site. When you first clone the repository, you will need to run the following commands:

```text
composer install
npm install
cp config.sample.php config.php
npm run watch
```

Once this has been done you should be able to access the site at <b>https://localhost:3000</b> and can start making changes.
