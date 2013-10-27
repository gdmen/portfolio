----title----
Eye of AC
----authors----
By: Gary Menezes
----links----
<a href="http://www.eyeofac.garymenezes.com" class="btn btn-large btn-primary"><i class="icon-eye-open"></i><p>See Live</p></a>
<a href="https://github.com/gdmen/EoAC" class="btn btn-large btn-success"><i class="icon-github"></i><p>GitHub</p></a>
----technologies----
PHP, Python, MySQL, HTML, LESS / CSS, JavaScript
----summary----
Eye of AC is a Python client and accompanying web app that streamlines the screenshot sharing process for players of [AssaultCube](http://assault.cubers.net).
----features----
1. Uploads screenshots in the background during game play
2. Enables textual searching and sorting of screenshots
3. Gathers additional and otherwise unsaved metadata with each screenshot
----details----
There exists an open source First Person Shooter, [AssaultCube](http://assault.cubers.net). Players frequently take screenshots of the score screen at the end of matches in order to share them. This is inconvenient because:

1. The screenshots are dumped into a single directory, making them impossible to sort or search without manually viewing all files.

2. In order to share a screenshot, one needs to upload the image to an image hosting website and then share the link.

Eye of AC is a Python script that wraps the AssaultCube client and parses the stdout (which is in a logging format). When a user takes a screenshot, a set of metadata is saved and the image itself is automatically uploaded to imgur.com. All this is then viewable, sortable, and searchable in one place.

The Python client is distributed as a binary for Linux and Windows. You can view the source [here](https://github.com/gdmen/EoAC).

I built the web app from the ground up in PHP and LESS, backed by a MySQL database. I wrote the user login system from scratch for learning/fun purposes. The Python game client uploads screenshot data to a RESTful API and the screenshots are associated with users via a key system.

I'm not very good at UI design and execution, but I find it in some regards more rewarding than backend work. The result, when appealing, is a more visceral reward than having a program that works. Beautiful code comes pretty close, though!
----bugs----
* See github issue tracker
----media----
<div class="project-media-element">
  <ul class="thumbnails">
    <li class="span3">
      <a href="$$content_url$$Eye_of_AC/landing.png" rel="media" class="thumbnail fancybox">
        <img src="$$content_url$$Eye_of_AC/thumbs/t-landing.png">
      </a>
    </li>
    <li class="span3">
      <a href="$$content_url$$Eye_of_AC/feed.png" rel="media" class="thumbnail fancybox">
        <img src="$$content_url$$Eye_of_AC/thumbs/t-feed.png">
      </a>
    </li>
    <li class="span3">
      <a href="$$content_url$$Eye_of_AC/screenshot.png" rel="media" class="thumbnail fancybox">
        <img src="$$content_url$$Eye_of_AC/thumbs/t-screenshot.png">
      </a>
    </li>
  </ul>
</div>
--------