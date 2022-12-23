<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Purab Patel (ptp25)</td></tr>
<tr><td> <em>Generated: </em> 12/4/2022 2:51:43 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/ptp25" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204145576-7331b71b-877d-49f9-bd63-e89ee8725c0a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the form which will let the users of admin and shop<br>owner role add products to the product table. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204145577-9aa0f639-86a6-4427-8b05-a2632dc3a7f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the nav bar dropdown that will be shown to users with the<br>role of admin and shop owner. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204145574-8a9b7395-ab27-44c4-94cc-412fd918c7e1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the products table and DB with two entries I created<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>Users with the role of admin or shop owner will be able to<br>create products, and when they are logged in, their nav bar with show<br>a new dropdown option with a link to create product page. This page<br>has a form which will let the user add to the products page.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/58">https://github.com/purabtpatel/IT202-009/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/admin/create_product.php">https://ptp25-prod.herokuapp.com/Project/admin/create_product.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204154960-bcdf7ee7-a174-415f-8191-1b3aa5cf6f42.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Sorting by price is on by default because there is only two options,<br>but no filters are applied. Shows 10 most recent entries in products table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204154959-b70dee03-0ec8-4df1-b2bf-4418ab97f301.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the filter of category to narrow the results. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204154958-617e9124-d3ba-4f0c-aa01-151eeea73078.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the game category filter and search filter for &quot;fort&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204155108-c0d00117-36fa-432c-ab5c-dbce18193b9a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code for shop page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>there is a query string that gets appended to based on what is<br>filled out in the filters form. By default, ascending by price and descending<br>by created date limit to 10 is applied to all products. Then as<br>filters are applied, and submit button is clicked, it changes the query to<br>reflect it.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/59">https://github.com/purabtpatel/IT202-009/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/ShopPage.php">https://ptp25-prod.herokuapp.com/Project/ShopPage.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204164844-b9321ad3-6a47-420d-a552-a8622219e9d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows all products in the products table, even those with visibility. Most are<br>set to visible, a few to not visible. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>just displays the products in the same way shop does, except it displays<br>all aspects of the product.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/60">https://github.com/purabtpatel/IT202-009/pull/60</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/admin/list_products.php">https://ptp25-prod.herokuapp.com/Project/admin/list_products.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204647235-7caddba9-4660-46c7-9744-88377b3ba313.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the edit button on the regular shop page. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205512211-30dc1018-74fc-4b72-b571-3ece16ef31e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the product view page, with edit button for admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204647234-17cf7b2d-86c7-4e64-b4a3-24a1b825bec1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is shows the edit button on the products in the admin view<br>page.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204647868-d054b9c2-3673-4feb-a6b8-ad7af65ba4cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the before of wallet product<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204647234-17cf7b2d-86c7-4e64-b4a3-24a1b825bec1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the after of the wallet product<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/204647232-589b0a20-6fbb-4430-a9bb-7250cefda5ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the edit page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>When the user presses the edit button, they are redirected to the edit<br>page with http get parameters to populate the edit form with the current<br>product information. Then the user can change the form and press save to<br>update the product info.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/61">https://github.com/purabtpatel/IT202-009/pull/61</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/admin/edit_products.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20id=17&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20name=wallet&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20description=its%20a%20wallet&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20category=Tools&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20unit_price=50&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20stock=5&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20visibility=1">https://ptp25-prod.herokuapp.com/Project/admin/edit_products.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20id=17&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20name=wallet&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20description=its%20a%20wallet&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20category=Tools&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20unit_price=50&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20stock=5&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20visibility=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205394422-43d3f987-e7eb-4e81-b973-43b41cffc489.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the button that redirects to the product details page (button called View)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205394436-63301cef-be3c-4d42-852c-5247e06f91ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the simple product details page which shows the information of the product<br>that was clicked<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>When the product is displayed in shop or admin view, the rendered information<br>is also used as Get parameters to the product details page, just like<br>the edit page.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/62">https://github.com/purabtpatel/IT202-009/pull/62</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/ProductDetailsPage.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20id=4&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20name=The%20bald%20machine&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20description=People%20that%20have%2010%20strands%20of%20hair%20can%20go%20to%200&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20category=Food&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20unit_price=10.99&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20stock=100000">https://ptp25-prod.herokuapp.com/Project/ProductDetailsPage.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20id=4&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20name=The%20bald%20machine&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20description=People%20that%20have%2010%20strands%20of%20hair%20can%20go%20to%200&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20category=Food&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20unit_price=10.99&%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20stock=100000</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205466639-1f646d96-ec6e-4a62-aeee-0a038fe36446.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the product being added to the cart and redirect to the cart<br>page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205466649-57ad79a9-88ee-4979-85c8-b0b9f46ba32e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the user that they are not logged in and redirects to log<br>in page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205466697-4a480f59-29fb-4b90-8a1c-d03ea043100a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the cart table with data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>it is a 1 cart per user, each row in cart represents a<br>unique item in a user&#39;s cart. the cart table won&#39;t hold two separate<br>instances of the same product for one user.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>User needs to log in, after they log in they can add to<br>cart by clicking the add to cart button on any shop view.&nbsp;<div>The add<br>to cart button is a link to view cart page that sets get<br>parameters so that view cart page can add it to the table. In<br>the viewport page, it checks if the user was redirected to the page(via<br>view cart button if get parameter is set). If they were redirected, it<br>adds the product to the user&#39;s cart, otherwise they are shown their existing<br>cart.&nbsp;</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/63">https://github.com/purabtpatel/IT202-009/pull/63</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205466639-1f646d96-ec6e-4a62-aeee-0a038fe36446.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the view cart page with subtotals of multiple products<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>Each product starts off as a single quantity in the cart. when the<br>user updates the quantity in the cart, it takes that input and multiplies<br>it by the the unit_price of that product. It then updates the cart<br>table with the new values.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/63">https://github.com/purabtpatel/IT202-009/pull/63</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/ViewCart.php">https://ptp25-prod.herokuapp.com/Project/ViewCart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205469522-3d2078b4-8347-4527-a49a-b88c182a7882.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The is the original quantity in the cart for the first product<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205469523-52b8b9ff-fedb-43c5-bdce-617f2bdd6222.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This shows the message after updating the quantity of an item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205469607-7ad5454e-c2a7-4c9a-b1cc-9aade6d91f39.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the input of 0 in the quantity before submitting the change<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205469606-a3f5cc86-701c-45ad-96b2-a4a3c9da71dd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the product gone from the cart page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205469684-e86ab074-03d7-4f25-9351-a8dd599c07fe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the message for if a user inputs a value under 0<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>in the view cart code, each item in the cart is displayed with<br>its values, and the update value is a form that the user can<br>input to update the number of items in their cart. The value of<br>0 and negative numbers have a different case, 0 triggers a remove sql<br>statement, and negatives are ignore and flashed a message.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/63">https://github.com/purabtpatel/IT202-009/pull/63</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205511427-b09e200f-3f44-4e21-bd64-a2fd2ec59470.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before pressing delete<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205511426-ed156153-7413-4eeb-a2c9-231b62e812ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After pressing delete<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205511575-72b95180-9c47-436a-badc-1d6564de2ed6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before clearing cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205511573-8f487e38-8ef3-4c37-bbf6-6abf3f47204a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After clearing cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>On button click, a query goes out to delete the selected item in<br>the cart. It is based on a dynamic naming of the html elements<br>based on the id of the product being displayed.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/purabtpatel/IT202-009/pull/63">https://github.com/purabtpatel/IT202-009/pull/63</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205511953-20584243-0f94-4d87-bb31-7f307cdfeb2e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/95395767/205511955-7418a36b-0408-4970-9b50-6b1a6c2f3721.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>rest of project board<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ptp25-prod.herokuapp.com/Project/login.php">https://ptp25-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-009-F22/it202-milestone-2-shop-project/grade/ptp25" target="_blank">Grading</a></td></tr></table>