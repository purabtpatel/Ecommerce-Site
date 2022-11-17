<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Purab Patel (ptp25)</td></tr>
<tr><td> <em>Generated: </em> 11/13/2022 3:54:23 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/ptp25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201190088-2927baff-6122-45b1-bea3-80419010d1da.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the html message that email is invalid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201190081-ede915f5-5448-42f1-88ca-bfa12e332be6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the html message for password not long enough<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201191002-79b3d04c-b7a4-48c6-83d0-287d63622f48.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the flash message that passwords do not match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201190099-673a59ac-390d-4dd4-ab1c-4023c720ec3d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the flash message that email is taken. Later I added an or<br>statement to show if either email or username was taken. This is shown<br>on the next screenshot<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201191378-3d370c36-7191-4a44-af7a-ed483d097caf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This one shows that if either email or username is taken, using flash<br>message. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201190038-4a0e443b-0197-425b-b572-ac2dd0e16aa2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This one shows the form filled with valid values<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201191840-d516b3eb-1737-4953-9eff-ddb61868dadb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the users table with my valid info from the screenshot before<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/36">https://github.com/purabtpatel/IT202-009/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form accepts inputs for email, username, password, and password match validation. Php<br>then handles the validation logic.&nbsp;<div><br><div>On the frontend, the html validates the input fields<br>using the type value for input elements. It will naturally filter emails that<br>don&#39;t match the email regex.&nbsp;</div><div><br></div><div>On the backend, php fetches the values from the<br>form and set them to their respective variables. The code then looks at<br>the email value from inputs and removes all characters that aren&#39;t what makes<br>up the email. Then using the validate email function php will look at<br>the email input and decide whether or not it is a valid email.<br>The code then looks at the username and if it matches the username<br>regular expression, it passes the input. Then it checks for if the password<br>field is empty, and if the confirm password field is empty or it<br>doesn&#39;t match the password input. It also checks if the input password is<br>at least a length of 8.&nbsp;</div></div><div><br></div><div><br></div><div>The db is used to fetch existing entries<br>in the users table to check for matches in username and email, if<br>there is a match it notifies the user that the username or email<br>is not available. The db then store the email, password, and username into<br>the users table.&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201497848-e61b862c-7a6a-431d-930d-9b826815a7f3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows how the site handles when the email doesn&#39;t match with<br>any user. Non-existing user validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201497849-45b22f6d-37c0-4118-9d82-9fcadc6b0837.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows wrong password for an existing user.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201498023-2be43ec9-5e3e-43e0-813d-fe91cb6ce52f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows what happens after successful login. I&#39;m not sure why there is a<br>repeated message with a typo, I tried looking for that flash statement to<br>remove it, but I can&#39;t find it. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/37">https://github.com/purabtpatel/IT202-009/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form takes inputs for Email and Password and on the frontend using<br>html value type for input elements, validates that email is a proper email<br>and checks if password is long enough.&nbsp;<div>On the backend, php sets variables to<br>input values from the form and checks if they are empty. If they<br>are not empty, it sanitizes the email and checking if the email is<br>a valid email. It also checks if the password is long enough.</div><div><br></div><div>The db<br>is used to get the email and password for the input email, and<br>then it checks if the input password is the same as the password<br>from the db.&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201529152-44bd4ab0-0677-4643-95cb-fe069e5d6867.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logout message to show logout was successful<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201529159-18dcca38-d109-4496-9d3a-5090eacfb0c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that the user is trying to access a login protected page. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/39">https://github.com/purabtpatel/IT202-009/pull/39</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The session is reset when the logout button is pressed, meaning that the<br>user stored in session variables no longer exists, and can be set again<br>by logging in.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201527689-1c510699-efd9-4b4b-9ba2-ff5bcccb9a92.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the user trying to access the home page without being logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201527694-c4a6379d-70c8-49bc-95c6-21bbe1599a5d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows a logged in user without the admin role trying to access an<br>admin page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201527697-e000865c-64f5-46e4-86d3-4197e5c06aef.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the role table with admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201527708-7ee6b43d-0214-4417-98dd-e6ba090644d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the userRoles table with my account as id 6 being role id<br>1 which is admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/38">https://github.com/purabtpatel/IT202-009/pull/38</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>There is a session array variable that holds the sessions for users and<br>their roles. If the user logs in their username is stored in this<br>array.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>If they also have a role, login.php will store their role in a<br>subarray under user in the array. And then the page that they are<br>trying to access will check this sessions array if they have the correct<br>role.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201534604-93e45fc0-8391-4fd3-8c38-02446fe55516.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows the nav bar and the form styled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201534606-45cc7cd0-2069-48f7-b8ae-9e8065634d6d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows nav, form, and table styled.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/40">https://github.com/purabtpatel/IT202-009/pull/40</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>This was just a very simple re-color of the background colors for the<br>different html elements<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201535017-fff24720-6b83-4fcf-803a-0f9c554f22dc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the password mismatch on registration page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201535019-5507111e-8032-4a93-ae5d-55476bcc3459.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows insufficient role to view page message, when user tries to access admin<br>pages without admin role. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201535020-5bbbf2e9-8723-4dcc-ac8e-8ef7e3b973d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot shows that the username or email is already taken during registration.<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/41">https://github.com/purabtpatel/IT202-009/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>we&#39;re using the function flash to handle error edge cases. These flashes are<br>small and one line descriptions for what went wrong.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201541722-b286f577-dd1a-460b-b5b7-edc465a3894f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the profile tab with autofilled username and email values for the currently<br>signed in user. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/42">https://github.com/purabtpatel/IT202-009/pull/42</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The email and username values are fetched using the get_user_email() and get_username functions<br>defined in user_helpers.php. These values populate the username and email fields of the<br>form on load.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543375-863cba38-173a-4624-b80c-c025d2f9bb3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows input username is not valid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543380-c21cb6f7-128a-44d4-a7ee-9807298a719d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the input email is not valid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543391-cfd8c537-db27-47f6-a1bb-cf6f5e3e4bde.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the new password is not valid, and the confirm password does not<br>match.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543400-e67c10a6-2f16-4a7b-bdc5-dee7c02d8f64.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that the input email is not available. I have the same check<br>for username too. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543682-60984ae8-dc5f-4409-8004-32fb693b0d3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543681-b3787491-203e-4f5c-a43d-81b6fad96a61.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the after, edited the username from hello to hellouser<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/43">https://github.com/purabtpatel/IT202-009/pull/43</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>First the form is checked for inputs filled separately for username and email,<br>and password, confirm password and new password. Then it updates the fields in<br>the database.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543960-3a151ba0-6cff-4a4d-8db5-e78788fb273c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543962-4e911dcc-5e76-475e-b848-b773cd43e100.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/201543963-7491d3c6-58f1-4283-9047-3853449523ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Project board<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/purabtpatel/projects/4">https://github.com/users/purabtpatel/projects/4</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/login.php">https://ptp25-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone1-deliverable/grade/ptp25" target="_blank">Grading</a></td></tr></table>