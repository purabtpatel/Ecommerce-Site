<table><tr><td> <em>Assignment: </em> IT202 JavaScript and CSS Challenge</td></tr>
<tr><td> <em>Student: </em> Purab Patel (ptp25)</td></tr>
<tr><td> <em>Generated: </em> 10/9/2022 11:53:57 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-javascript-and-css-challenge/grade/ptp25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ul><li>Reminder: Make sure you start in dev and it's up to date<ol><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li><code>git checkout -b M3-Challenge-HW</code></li></ol></li></ul><ol><li>Create a copy of the template given here:&nbsp;<a href="https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c">https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c</a></li><li>Implement the changes defined in the body of the code</li><li><strong>Do not</strong>&nbsp;edit anything where the comments tell you not to edit, you will lose points for not following directions</li><li>Make changes where the comments tell you (via TODO's or just above the lines that tell you not to edit below)<ol><li><strong>Hint</strong>: Just change things in the designated&nbsp;<code>&lt;style&gt;</code>&nbsp;and&nbsp;<code>&lt;script&gt;</code>&nbsp;tags</li><li><strong>Important</strong>: The function that drives one of the challenges is&nbsp;<code>updateCurrentPage(str)</code>&nbsp;which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.</li></ol></li><li>Create a branch called M3-Challenge-HW if you haven't yet</li><li>Add this template to that branch (git add/git commit)</li><li>Make a pull request for this branch once you push it</li><li>You may manually deploy the HW branch to dev to get the evidence for the below prompts</li><li>Create a new file&nbsp;<strong>m3_submission.md</strong>&nbsp;file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)</li><li>Add, commit, and push the submission file</li><li>Close the pull request by merging it to dev (double-check all looks good on dev)</li><li>Manually create a new pull request from dev to prod (i.e., base: prod &lt;- compare: dev)</li><li>Complete the merge to deploy to production</li><li>Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission</li></ol><style>` and `<script>` tags
    2. **Important**: The function that drives one of the challenges is `updateCurrentPage(str)` which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.  
5. Create a branch called M3-Challenge-HW if you haven't yet
6. Add this template to that branch (git add/git commit)
7. Make a pull request for this branch once you push it
8. You may manually deploy the HW branch to dev to get the evidence for the below prompts
9. Create a new file **m3_submission.md** file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)
10. Add, commit, and push the submission file
11. Close the pull request by merging it to dev (double-check all looks good on dev)
12. Manually create a new pull request from dev to prod (i.e., base: prod <- compare: dev)
13. Complete the merge to deploy to production
14. Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission
</style></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Completed Challenge Screenshots </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 5 Screenshots based on the checklist items for this task</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/194796020-e45e1cf7-5fa6-4cfd-82b9-1b690c18e590.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Checklist items done, my personal styling to the page was to increase the<br>size of the list element on hover. Also showing the login page click.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/194796024-a8c1d2b0-1ba6-4ebc-b663-0cc659fe4278.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the register link click<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/194796025-0b66d512-f378-4fc7-8f3b-2148ae98af64.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing profile link click<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/194796026-3a27c62d-6d64-43d3-9b50-86395333c1d0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing logout link click<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/194796027-a813f419-9f20-4e25-a3fd-70a2f4db61ff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing my code for the styling of the page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/194796028-758a747b-6064-4752-af4a-b32ede453620.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing my code for the javascript section<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Explain Solutions (Grader use this section to determine completion of each challenge) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly explain how you made the navigation horizontal</td></tr>
<tr><td> <em>Response:</em> <p>I used the inline display for list items inside nav elements with css<br>code: nav li{ display: inline }. This makes the list objects display on<br>the same line.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how you remove the navigation list item markers</td></tr>
<tr><td> <em>Response:</em> <p>When displaying the list items inside the nav element using inline, it automatically<br>got rid of the item markers.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you gave the navigation a background</td></tr>
<tr><td> <em>Response:</em> <p>I put a background-color style on the nav element.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how you made the links (or their surrounding area) change color on mouseover/hover</td></tr>
<tr><td> <em>Response:</em> <p>i used nav li:hover to select all list elements inside nav elements and<br>gave them a background-color that was different when the element was hovered over.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you changed the challenge list bullet points to checkmarks (✓)</td></tr>
<tr><td> <em>Response:</em> <p>I used the list-style-type style on all list elements inside the unordered lists<br>elements, and set that to the check mark that was given.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain how you made the first character of the h1 tags and anchor tags uppercased</td></tr>
<tr><td> <em>Response:</em> <p>I used the text-transform: capitalize on h1 elements, this wouldn&#39;t work on the<br>anchor tags since they are inline elements, so i used display: inline-block to<br>allow for text-transform to work.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain/describe your custom styling of your choice</td></tr>
<tr><td> <em>Response:</em> <p>I did some ease of readability styling which highlights and makes the list<br>item bigger when it is hovered over.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain how the styling for the challenge list doesn't impact the navigation list</td></tr>
<tr><td> <em>Response:</em> <p>it doesn&#39;t affect the navigation list because the list elements in the nav<br>element are not inside an unordered list element.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Briefly explain how you updated the content of the h1 tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>I couldn&#39;t get it to work, but I would set an element to<br>a variable and add an event listener to the variable which would retrieve<br>the clicked element&#39;s content and call updateCurrentPage() with the contents.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain how you updated the content of the title tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>same as above<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Comment briefly talking about what you learned and/or any difficulties you encountered and how you resolved them (or attempted to)</td></tr>
<tr><td> <em>Response:</em> <p>I ran out of time trying to finish all the readings and homework<br>and mastery quiz, this week&#39;s assignments were really time consuming.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your pull request (hw branch to dev only)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/9">https://github.com/purabtpatel/IT202-009/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to your solution html file from prod (again you can assume the url at this point)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/M3/challenge.html#logout">https://ptp25-prod.herokuapp.com/M3/challenge.html#logout</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-javascript-and-css-challenge/grade/ptp25" target="_blank">Grading</a></td></tr></table>