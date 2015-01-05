#Preview

Preview is an addon for [Cockpit CMS](https://github.com/aheinze/cockpit), that adds another menu item that allows you to easily see your website.<br><br>
Also it renders a new dashboard widget with a screenshot of your website so it's even easier for you to see the changes.

<br>
##Installation
1. Download the latest release of Preview
2. Place the folder `Preview` in `modules/addons` in your Cockpit folder
<br><br>

####Widget Installation
1. Open the file `dashboard.php` in `modules/addons/Preview/views` in your favorite editor
2. Change the URL in the `$payload` array where it says `** YOUR URL HERE **` to your website URL
3. In Cockpit, go to `Settings -> General -> Registry` and add a new key and name it `screeenly`
4. Go to [Screeenly.com](http://screeenly.com/), create a user, get your API key and paste it into the new key in Cockpit
 
  If you don't do step 4, Cockpit will use a public API key I got from the developer of Screeenly 

  If it doesn't work the first time you load up Cockpit, just refresh it a couple of times

<br>
##License
Preview is licensed under the MIT license
