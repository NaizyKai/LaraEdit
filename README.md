# LaraEdit
An IDE package for Laravel. 

I started building LaraEdit around October of 2014 and was able to package a working code editor and terminal emulator for Laravel 4 rather quickly (https://github.com/iBourgeois/LaraEdit). However, shortly after gaining traction I wanted to upgrade the package to work on Laravel 5 which was to be released soon there after.

After several delays in the release of L5, I was forced to sideline the project momentarily. 

Now I am back! And I have brought with me, a new set of blueprints for what I would like to accomplish with LaraEdit. Though it will require two separate packages, I think you'll enjoy the outcome in the event I succeed...

I hate to leave you hanging like this, but there will be more to come soon!

# Installation (Standalone)
- Add the LaraEdit package to your composer requirements:
  ``` "laraedit/laraedit": "dev-master", ```
- Add the LaraEdit Service hook to your app config:
  ``` "LaraEdit\LaraEdit\LaraEditServiceProvider" ```
- Publish the LaraEdit assets using Artisan:
  ``` php artisan vendor:publish ```
- Visit the route:
  ``` /laraedit ```
- Enjoy!

# Installation (With LaraGit)
- Add the LaraEdit package to your composer requirements:
  ``` "laraedit/laraedit": "dev-master", ```
- Add the LaraEdit Service hook to your app config:
  ``` "LaraEdit\LaraEdit\LaraGitServiceProvider" ```
- Publish the LaraEdit assets using Artisan:
  ``` php artisan vendor:publish ```
- Visit the route:
  ``` /laraedit ```
- Enjoy!

# The Plan

#### Phase One
  
  - LaraEdit will provide a working code editor.
  
#### Phase Two

  - LaraEdit will provide a working terminal emulator to accompany the code editor.

#### Phase Three

  - LaraEdit will gain the ability to interface with LaraGit (https://github.com/LaraEdit/LaraGit).


