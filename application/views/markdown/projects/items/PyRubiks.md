----title----
PyRubiks
----authors----
By: Gary Menezes, Patrick Yeyoon, Samuel Appelbaum
----links----
<a href="https://fling.seas.upenn.edu/~gmenezes/dynamic/downloads/pyRubiks%20v1.0.zip" class="btn btn-large btn-success"><i class="icon-github"></i><p>GitHub</p></a>
----technologies----
Python, OpenGL
----summary----
A 3D rubik's cube implemented in python using PyOpenGL, NumPy, and wxPython. You can jumble the cube and then solve it while enjoying the awesomely animated rotations!
----features----
1. Change selected face (the cube then rotates to maintain view of selected face)
2. Rotate the row/column containing the selected face
3. Jumble cube
4. Reset Cube
----details----
----bugs----
* Under currently un-reproducable conditions, the cube's state breaks down. This generally seems to happen after extended use / manipulation of the model. The result is wildly inaccurate rendering that looks as though the camera has become too zoomed in to the cube.
----media----
<!---
The following video contains three 'games.' The first game demonstrates selection movement, rotation, and solvability. The transition to the second game demonstrates the reset function. The second game demonstrates a single jumble and solve. The third game has multiple jumbles (for those who can solve a rubik's cube better than I can!).

The screen capture program (CamStudio) significantly slowed the game, but it wasn't incredibly fast to begin with.
--->
<div class="project-media-element">
  <div class="flash-embed-container">
    <iframe width="800" height="450" src="http://www.youtube-nocookie.com/embed/ZEW-hNTeqeg?wmode=transparent&amp;fs=1&amp;hl=en_US&amp;rel=0&amp;controls=0" frameborder="0"></iframe>
  </div>
</div>
--------