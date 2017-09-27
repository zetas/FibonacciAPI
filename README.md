Fibonacci API
---
**Endpoints provided:**

Fibonacci Sequence
```
/api/v1/fibonacci/sequence?count=n
 ```
Output json response with fibonacci sequence up to `n`.

Fibonacci Number at Position
```
/api/v1/fibonacci/n
```
Output json response with fibonacci number at sequence number `n`

**** 

### Examples
**Note**: Live API exists at these URLS 
```
$ curl "https://numbers.qubitlogic.net/api/v1/fibonacci/sequence?count=5"
[0,1,1,2,3]

$ curl "https://numbers.qubitlogic.net/api/v1/fibonacci/4"
2
```

***

### Deployment

This app requires a webserver with php7+ capability. 
If using linux, you can deploy with the included ansible playbook like so:

* Update `deploy/production` with ip address to destination server & ensure your deploy user has a 
valid SSH key for this host.
* Update `deploy/group_vars/lumen.yml` to reflect your environment (especially the 
`ansistrano_deploy_to` variable).
* Run `ansible-playbook deploy/playbook-deploy.yml -i deploy/production -u [user]` replace `[user]` 
with 
your deploy user.
* Point your webserver docroot to `[ansistrano_deploy_to]/current/public`. Replace 
`ansistrano_deploy_to` with the directory you used in the `lumen.yml` file.  

***

### Testing

To run the test suite:

```
$ phpunit
PHPUnit 6.3.1 by Sebastian Bergmann and contributors.

.......                                  7 / 7 (100%)

Time: 119 ms, Memory: 12.00MB
```