There exists an open source First Person Shooter, [AssaultCube](http://assault.cubers.net). Players frequently take screenshots of the score screen at the end of matches in order to share them. This is inconvenient because:

1. The screenshots are dumped into a single directory, making them impossible to sort or search without manually viewing all files.

2. In order to share a screenshot, one needs to upload the image to an image hosting website and then share the link.

Eye of AC is a Python script that wraps the AssaultCube client and parses the stdout (which is in a logging format). When a user takes a screenshot, a set of metadata is saved and the image itself is automatically uploaded to imgur.com. All this is then viewable, sortable, and searchable in one place.

The Python client is distributed as a binary for Linux and Windows. You can view the source [here](https://github.com/gdmen/EoAC).

I built the web app from the ground up in PHP and LESS, backed by a MySQL database. I wrote the user login system from scratch for learning purposes. The python game clients upload screenshot data to a RESTful API and the screenshots are associated with users via a key system.

I'm not very good at UI design and execution, but I find it in some regards more rewarding than backend work. The result, when appealing, is a more visceral reward than having a program that works. Beautiful code comes pretty close, though!
