# apl-oauth2
OAuth2 with Clean Architecture and Phalcon for Software Architecture Class

# Getting Started
1. Clone the project
2. Change directory to `src` folder with ```cd src```
3. Run ```composer install```
4. DONE !

# Module
There's a module named `oauth` in  `src/apps/modules`, you can add more modules there\
you can register your modules in `src/apps/config/modules.php`

# URL
url is formatted like this
`BASE_URL/src/{module_name}/{controller_name}/{action_name}/{params}`

since the `BASE_URL` in this project is `http://oidc.local` and has `oauth` moudle and `TestController` with `paramAction`, we can type this\
`http://oidc.local/src/oauth/test/param/anythingYouWantHere`
![URL Example](https://github.com/Droppledev/apl-oauth2/blob/master/image.png)
