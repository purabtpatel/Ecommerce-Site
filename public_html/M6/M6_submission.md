<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Purab Patel (ptp25)</td></tr>
<tr><td> <em>Generated: </em> 11/9/2022 2:29:36 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/hw-html5-canvas-game/grade/ptp25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>Arcade Shooter<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/M6/GameHtml5.html">https://ptp25-prod.herokuapp.com/M6/GameHtml5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/33/">https://github.com/purabtpatel/IT202-009/pull/33/</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Extended controls to left and right movement, restricted the x bounds so the<br>player can&#39;t leave the canvas window.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200916546-dba25a11-68e3-4f63-99a0-17a2c400eaa6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I show the player hugging the right wall, can&#39;t move further than that<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200917476-d1f8d217-8635-4100-b596-68ee7cd4d7f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sets up left and right bounds for player<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200917480-b7b2a872-6b0c-46a5-877d-b37f299facbc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Adds event listeners for left and right keys for player movement.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>Added a power up for the player to collect. The power enables the<br>player to shoot 5 bullets 5 times. After 5 shots, the normal 1<br>bullet shot comes back. The power appears on the screen and moves through<br>the screen like the enemy square. If the player collides with the blue<br>power up square, they gain the power up ability.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200918617-f0e2b399-dbd1-4a65-83a2-aa88fd367958.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the blue powerup with the player and enemy<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200919482-9c377aab-8bff-4d08-938f-46a79ac0a1b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows what the bullet shot looks like with the power up on, bullets<br>spread out as they go, my timing was a bit too early<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200920222-3d033bc3-2dcc-4043-b88f-fa234bc85272.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Create 5 bullets, make a powerup variable for drawing, keep track if player<br>is powered up, set number of allowed powered shots; 5<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200921210-fd8397ba-4e85-4803-b28f-db9360873641.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shoot function checks if player is powered, if play is not powered, only<br>one bullet is fired, if powered, fires 5 bullets and decrements allowed powered<br>shots until 0, then resets counter and sets player to not powered up.<br>Draws the power up square and checks for player collisions. If there is<br>a collision, sets powered to true. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/200922735-cfd8457e-c26b-4485-a54d-4d39ad8e5756.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This handles the movement of the bullet(s) and collisions with enemies if the<br>player is powered or not. <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned a lot about the capabilities of html, and that it can<br>support dynamic visuals powered by canvas element and javascript. This can help developer<br>create simple or complex illustrations or games. Canvas is a fully capable illustrating<br>component that can be added anywhere in a html file and is really<br>nice to have for custom visuals.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/hw-html5-canvas-game/grade/ptp25" target="_blank">Grading</a></td></tr></table>