<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Shop Project</td></tr>
<tr><td> <em>Student: </em> Purab Patel (ptp25)</td></tr>
<tr><td> <em>Generated: </em> 12/18/2022 11:09:00 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/ptp25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Orders will be able to be recorded </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Orders table with valid data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208323427-2681fd6f-009c-4c85-874d-079dc6dae45d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the orders table from vscode<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of OrderItems table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208323426-1fc625a0-e433-45ae-bb25-97799b4a105a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the orderItems table from vscode<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the purchase form UI from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208323513-b40821a0-2763-4931-930a-32e93c8ce396.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the checkout form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the items pending purchase from Heroku</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208323513-b40821a0-2763-4931-930a-32e93c8ce396.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the pending items above the form with name, quantity, unit cost, subtotal.<br>This is after the change to New&#39;s price. Link to cart is in<br>the nav. The total price and the subtotal are based on the newer<br>price of the product, not the old one.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208323740-266155bf-496c-4969-b26e-1a704cdfbd0b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is before New&#39;s price was changed to $20<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot showing the Order Process validations from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208323967-c637e053-b03e-4353-930a-6e80606aafd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows my whole code for checkout page. Ucid and date are commented at<br>the top. Verify address is at line 183, verify payment method is in<br>html by default, can only choose between certain options, line 140-145. Verify paid<br>amount vs cart amount is the script tag at line 170-175. Total for<br>purchase amount is calculated at lines 66-77.  Stock amount is verified in<br>lines 191-198. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a screenshot showing the Order Process validations from the UI (Heroku)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208324204-362d9093-02da-4e33-9999-fce4db2560fc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the message for not enough stock<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208324205-8661efe9-1cbc-4bda-859a-4bc221e4ba48.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the payment amount is invalid message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208323533-fe461b3e-33c1-4105-8ad7-7b0ec501027f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the price difference message in the pending items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly describe the code flow/process of the purchase process</td></tr>
<tr><td> <em>Response:</em> <p>*All items from cart are displayed with proper information<div>*All items in cart are<br>checked for updated pricing, if there is a difference, display that difference next<br>to the old price</div><div>*Calculate and display the total based on the newer prices<br>for the items in users cart</div><div>*Render the form which has inputs for address,<br>payment amount, payment type, and name</div><div><em>validate the fields</div><div><em>create the order in orders table&nbsp;</div><div><em>fetch<br>the order id to populate order items table with the items in the<br>order</div><div></em> create a new entry for each item in order items table</div><div></em> Delete<br>the cart from the current user</div><div></em> redirect to the Confirmation page.</div><div><br></div><div><br></div><div><br></div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/75">https://github.com/purabtpatel/IT202-009/pull/75</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/checkout.php">https://ptp25-prod.herokuapp.com/Project/checkout.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Order Confirmation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot showing the order details from the purchase form and the related items that were purchased with a thank you message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208327182-0ac8b2a4-0faf-4769-9ccf-02c773cb41c1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the order confirmation page. I also made it so you can&#39;t<br>access it unless you are the user that made the order. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how this information is retrieved and displayed from a code logic perspective</td></tr>
<tr><td> <em>Response:</em> <p>when redirecting, I feed in the id of the order, and then in<br>the ViewOrder.php page I get that id, make sure the current user signed<br>in matches the user id for the order,&nbsp;<div>Then I fetch the order details<br>and display them on the page.&nbsp;</div><div>Then I fetch all the items in OrderItems<br>from the order</div><div>then I display them on the page, fetching the name of<br>the product from products table based on the product id stored in order<br>id</div><div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/76">https://github.com/purabtpatel/IT202-009/pull/76</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/ViewOrder.php">https://ptp25-prod.herokuapp.com/Project/ViewOrder.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User will be able to see their Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history for a user</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208329418-11adf92a-c85b-4270-9704-4f4d5793cc74.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the history of purchases of the user currently signed in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208329417-048c2c73-a4b3-4da2-ba67-ceeb807ddd70.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the purchase details of the order clicked on in the history, without<br>the thank you message. done by including an extra get parameter to indicate<br>if it is a new purchase or not<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details</td></tr>
<tr><td> <em>Response:</em> <p>The purchase history list is fetched by getting all from the order table<br>where user id is the same as the one signed in, each is<br>displayed in a list with a button that will redirect the user to<br>the product details page of that specific order. The product details page is<br>the same as the one that the user is redirected to after checkout,<br>but it has an extra GET variable to keep track if the purchase<br>is new or not, will display the thank you message if new.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/77">https://github.com/purabtpatel/IT202-009/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/ViewOrder.php?id=9&new=0">https://ptp25-prod.herokuapp.com/Project/ViewOrder.php?id=9&new=0</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing purchase history from multiple users</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208344362-bb4c24be-9d84-483d-a79b-3e52f5c7bdb7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the Sales page accessible only to admins and shop owner role, list<br>items can be clicked on to go to sales detail page which also<br>provides the username of the account that placed the order. Sales page also<br>lists the sales with the username of the account. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing full details of a purchase (Order Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208344360-8ed82b62-d4bf-49d0-979e-fa3fa1795251.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the sales detail page, only passing the id of the order into<br>the page. The php code fetches the details of the order, the items<br>in that order, the username of the user that placed the order, and<br>the product names of the items in the order items list.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the logic for showing the purchase list and click/displaying the Order Details (mostly how it differs from the user's purchase history feature)</td></tr>
<tr><td> <em>Response:</em> <p>The biggest difference is that it also shows the username of the user<br>that placed the order. I do this by taking the id of the<br>order and passing it into the details page, then fetching the order from<br>orders table. Then using that info to fetch the info of the user,<br>and populating the username field.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/78">https://github.com/purabtpatel/IT202-009/pull/78</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/admin/SaleHistory.php">https://ptp25-prod.herokuapp.com/Project/admin/SaleHistory.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart page showing the button to place an order</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208345041-627283e4-8065-4591-a74c-3603d9a2dfb2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the cart page with the checkout button<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/208345766-826aeafc-e58f-47df-bb7a-8513babba260.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows completed project board so far<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-3-shop-project/grade/ptp25" target="_blank">Grading</a></td></tr></table>