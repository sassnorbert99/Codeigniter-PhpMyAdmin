                                                         Web Programming Documentation
                                                            Luxury Car Sales Blog
 
 <table>
  <thead>
  <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">Login</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
    <td><p>The login operation requires two properties: one marked as user identity and second is password.</p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>POST</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>controllers/login</p></td>
  </tr>
  <tr>
    <td><p align="center">Parameters</p></td>
    <td><p> Request Body:    
       <li> "username" : value,    </li>
        <li>"password" : value, </li> 
  </p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>status_code : 201, description : Login success!, token:jsontoken</p></td> 
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p>status_code: 401, description: Wrong username or password!</p></td>
  </tr>  
  <tr>
    <td><p align="center">Curl</p></td>
    <td><p>
      <li>-H Content-Type:application/json   </li>
      <li>-X POST   </li>
      <li>-d '{"login":"test1", "password":"asdasd"}'  </li> 
      <li>-d '{"login":"sassnorbert99", "password":"asdasd"}'  </li> 
      <li>-v https://localhost:8888/users/login  </li>
  </p></td> 
  </tr>  
</table>


<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">Logout</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
    <td><p>The Logout operation terminates user session.
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>GET</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>controllers/Users/logout</p></td>
  </tr>
  <tr>
    <td><p align="center">Parameters</p></td>
    <td><p> Request Headers:   
       <li> user-token: value-of-the-user-token-header-from-login  </li>       
  </p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>status_code : 200,	description : The logout is success!</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >status_code: 401, description: Invalid token, throw new InvalidTokenException!</p></td>
  </tr>  
  <tr>
    <td><p align="center">Curl</p></td>
    <td><p>
      <li>-H user-token:[`value-of-user-token-from-login`]  </li>    
      <li>-v https://localhost:8888/users/logout  </li>
  </p></td> 
  </tr>  
</table>

<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">Register</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
    <td><p>Registers user
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>PUT</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>users/register</p></td>
  </tr>
  <tr>
    <td><p align="center">Parameters</p></td>
    <td><p> Request Headers:  
      <li> name: UNIQUE name of the new user  </li>
	    <li> username: UNIQUE username of the new user  </li>
	    <li> password: password  </li>
	    <li> email: email address in order to send informations  </li>
	    <li> password: md5 hashed password of the new user  </li>
      <li> password2: confirm password of the new user  </li>
	    <li> date: The date of the creation ex: 2020-01-01</li>
  </p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>status_code : 201,	description : Successfully registered</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >status_code: 400, description: Missing parameters.</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>



<table>
  <thead>
   <tr>
    <td><b><p align="center">Service Name</p></b></td>
    <td colspan=2><b><p align="center">check_username_exists</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>Check username that exists in this field</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>get</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>users/check_username_exists</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, the username is already taken, choose another one.</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>


<table>
  <thead>
   <tr>
    <td><b><p align="center">Service Name</p></b></td>
    <td colspan=2><b><p align="center">check_email_exists</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>Check email that exists in this current field</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>get</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>users/check_email_exists</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, the email is already taken, choose another one.</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>



<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">GetUserById</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>Get user for id</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>get</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>users/:id</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, message: There is no user with the given ID.</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>



<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">create</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>create post for user</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>get</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>Posts/create</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, message: result.</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>


<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">delete</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>delete post for user</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>delete</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>posts/delete</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, message: You are not logged in!</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>


<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">edit</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>edit posts for user</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>get</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>posts/edit</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, message: You are not logged in!</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>



<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">update</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>update posts for users</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>update</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>posts/update</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, message: You are not logged in!</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>


<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">createComments</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>Create comment under the posts for users</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>get</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>comments/create</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, message: Invalid values in this field!</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>



<table>
  <thead>
   <tr>
    <td><b><p align="center">Service name</p></b></td>
    <td colspan=2><b><p align="center">createCategories</p></b></td>
  </tr>
  </thead>
  <tr> 
    <td><p align="center">Description</p></td>
	  <td><p>Create category for users</p></p></td>
  </tr>
    <td><p align="center">Method</p></td>
    <td><p>get</p></td>
  </tr>
  <tr>
    <td><p align="center">Path</p></td>
    <td><p>categories/create</p></td>
  </tr>
  <tr>
    <td><p align="center">Response OK</p></td>
    <td><p>success : 1,	data : results</p></td>
  </tr>
  <tr>
    <td><p align="center">Response Error</p></td>
    <td><p >success: 0, message: You are not logged in!</p></td>
  </tr>  
  <tr>
    
  </tr>  
</table>











