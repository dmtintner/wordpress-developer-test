## Wordpress Developer Test

### Get started
* Fork the repository
* Create a database called `sw-wordpress-test`
* Add `sw-dev.dev` to your hosts file
* Add the following to httpd-vhosts.conf, making sure to use the correct path to the project
```
#SW Wordpress Developer Test
<VirtualHost *:80>
    ServerName sw-dev.dev
    ServerAlias sw-dev.ngrok.com
    DocumentRoot "C:\projects\wordpress-developer-test"
    <Directory "C:\projects\wordpress-developer-test">
      AllowOverride All
      Order allow,deny
      Allow from all
    </Directory>
</VirtualHost>
```
* Follow the Wordpress install instructions

### The test
All of the files that you will need for the test are located inside of the directory `test-documents`

#### Part 1
* Create a custom post type called `Products`
* A Product needs fields in the admin for Title, Link, Image, Background-color
* Take each of the images from the `product-images` directory, and create a `product` from them.
* Each one should have:
* a different background-color
* a different title
* a link to a page about it
* Display these Products on the home page, and make sure that it looks good in every screen size. You can refer to the screenshot called products, in the `screenshots` directory, to see how it should look.

#### Part 2
* Create a custom post type called `videos`
* A `video` only needs fields in the admin for Name, youtube-id
* Take each of the videos listed in the text file `videos-list` and create a `video` from them.
* On the home page, below the `products` section, create a new section and that shows only one video and a list of text links for the other videos. Refer to the screenshot called videos, also in the `screenshots` directory to see how it should look.
* When you click the link to another video in the list, the video displaying on the home page should change and become the new video
