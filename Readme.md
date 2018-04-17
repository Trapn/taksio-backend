# Taksio

# Register and login
### JSON Web Tokens (JWT)
JSON Web Token (JWT) is an open standard (RFC 7519) that defines a compact and self-contained way for securely transmitting information between parties as a JSON object. This information can be verified and trusted because it is digitally signed. JWTs can be signed using a secret (with the HMAC algorithm) or a public/private key pair using RSA.  

![Alt Text](/images/authSchema.png)
## Example
This is an example to register or login with a user to access the :closed_lock_with_key: API's. In this example i'm using POSTMAN you can download it here:  
https://www.getpostman.com/
### Register 
To register you can simply add some Params to you're request:
* **/api/register** 
![Alt Text](/images/register.PNG)
### Register 
After registering you can get the token by logging in:
* **/api/login** 
![Alt Text](/images/login.PNG)
### Accessing the :closed_lock_with_key: API's
When done the previous steps you have to add some things to you're request
#### 1. Set authentication type to "Bearer Token" and fill in you're recived token
![Alt Text](/images/addtokentorequest.PNG)
#### 2. Add these two values to the header:
![Alt Text](/images/addheaders.PNG)
#### 3. Normally you should be able now to access following API's with a POST request:
* **/api/locations**  :unlock:
* **/api/devices**  :unlock:
* **/api/sensors**  :unlock:
* **/api/measurements**  :unlock:  
Make sure the Foreign key(if adding devices, sensors, measurements) of the other table exists.  
You should get something like this when sending the post request:
![Alt Text](/images/postlocation.PNG)

## Database

### Database UML
![Alt Text](/images/database_uml.PNG)

## Heroku

#### Running commands on heroku
You can run all artisan commands on heroku:
```heroku run php /app/artisan migrate```  

